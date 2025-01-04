// Cart management script
let cart = [];

// Add an item to the cart
function addToCart(itemName, itemPrice) {
    console.log('Adding to cart:', itemName, itemPrice);

    fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({
            item_name: itemName,
            item_price: itemPrice,
            quantity: 1,
        }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log('Added to cart:', data.message);
                updateCartUI();
            } else {
                console.error('Failed to add to cart:', data.message);
            }
        })
        .catch(error => console.error('Error:', error));
}

// Update the cart UI
function updateCartUI() {
    fetch('/cart/items', {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    })
        .then(response => response.text()) // Use text() to capture non-JSON responses
        .then(data => {
            console.log('Response from /cart/items:', data); // Log the response
            try {
                const jsonData = JSON.parse(data); // Try parsing as JSON
                console.log('Parsed JSON:', jsonData);
            } catch (error) {
                console.error('Error parsing JSON:', error);
            }
        })
        .catch(error => console.error('Error updating cart UI:', error));
}

// Remove an item from the cart
function removeFromCart(itemId) {
    fetch(`/cart/remove/${itemId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Item removed from cart!');
                updateCartUI();
            } else {
                alert('Failed to remove item.');
            }
        })
        .catch(error => console.error('Error:', error));
}

// Toggle cart popup visibility
function toggleCart() {
    const cartPopup = document.getElementById('cartPopup');

    // Debugging: Check if element exists
    console.log('Cart Popup:', cartPopup);

    if (cartPopup) {
        cartPopup.style.display = cartPopup.style.display === 'block' ? 'none' : 'block';
    } else {
        console.error('Cart popup not found.');
    }
}

// Attach event listener for cart toggle button
const cartToggleButton = document.getElementById('cartToggleButton');
if (cartToggleButton) {
    cartToggleButton.addEventListener('click', toggleCart);
} else {
    console.error('Cart toggle button not found.');
}

// Close cart popup when clicking outside
window.addEventListener('click', function(event) {
    const cartPopup = document.getElementById('cartPopup');
    if (event.target === cartPopup) {
        cartPopup.style.display = 'none';
    }
});

// Automatically update the cart UI when the page loads
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.add-button, .rectangle-1c');
    console.log('Add Buttons Found:', buttons);

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const parentElement = button.closest('.flex-row, .flex-row-be, .flex-row-bb-16');
            if (!parentElement) {
                console.error('Parent element not found for add button.');
                return;
            }

            const itemNameElement = parentElement.querySelector('.basil-pesto, .creamy-chicken-pesto, .classic-margherita');
            const itemPriceElement = parentElement.querySelector('.price, .rm-35');

            console.log('Item Name Element:', itemNameElement);
            console.log('Item Price Element:', itemPriceElement);

            if (!itemNameElement || !itemPriceElement) {
                console.error('Item name or price element not found.');
                return;
            }

            const itemName = itemNameElement.innerText;
            const itemPrice = parseFloat(itemPriceElement.innerText.replace('RM', '').trim());

            addToCart(itemName, itemPrice);
        });
    });

    updateCartUI();
});

// Handle checkout functionality
const checkoutButton = document.querySelector('.checkout-button');
if (checkoutButton) {
    checkoutButton.addEventListener('click', () => {
        fetch('/cart/checkout', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Checkout successful!');
                    updateCartUI(); // Clear the cart after checkout
                } else {
                    console.error('Checkout failed:', data.message);
                }
            })
            .catch(error => console.error('Error during checkout:', error));
    });
} else {
    console.error('Checkout button not found.');
}
