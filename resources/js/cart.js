// Function to add an item to the cart

let cart = [];

function addToCart(name, price) {
    fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({
            item_name: name,
            item_price: price,
            quantity: 1,
        }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            cart.push({ name, price }); // Update local cart
            updateCart(); // Refresh UI
            updateCartUI();
        } else {
            alert('Failed to add item to cart.');
        }
    })
    .catch(error => console.error('Error adding to cart:', error));
}

// Function to update the cart UI
function updateCartUI() {
    fetch('/cart/items', {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    })
    .then(response => response.json())
    .then(data => {
        const cartItemsContainer = document.getElementById('cartItems');
        const cartTotalElement = document.getElementById('cartTotal');
        cartItemsContainer.innerHTML = ''; // Clear previous items

        let total = 0;
        cart = []; // Clear local cart array

        data.items.forEach(item => {
            const cartItem = document.createElement('div');
            cartItem.className = 'cart-item';
            cartItem.innerHTML = `
                <span>${item.item_name} RM ${item.item_price.toFixed(2)} x ${item.quantity}</span>
                <button class="remove-button" onclick="removeFromCart(${item.id})">Remove</button>
            `;
            cartItemsContainer.appendChild(cartItem);

            cart.push({ // Update local cart array
                name: item.item_name,
                price: parseFloat(item.item_price),
                id: item.id,
                quantity: item.quantity,
            });

            total += item.item_price * item.quantity;
        });

        cartTotalElement.textContent = `RM ${total.toFixed(2)}`;
    })
    .catch(error => console.error('Error updating cart UI:', error));
}


// Function to remove an item from the cart
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
            updateCartUI(); // Fetch updated cart from backend
        } else {
            alert('Failed to remove item from cart.');
        }
    })
    .catch(error => console.error('Error removing item from cart:', error));
}

// Function to toggle cart popup visibility
function toggleCart() {
    const cartPopup = document.getElementById('cartPopup');
    cartPopup.style.display = cartPopup.style.display === 'block' ? 'none' : 'block';
}

// Attach event listener for cart toggle button
const cartToggleButton = document.getElementById('cartToggleButton');
if (cartToggleButton) {
    cartToggleButton.addEventListener('click', toggleCart);
}

// Close cart popup when clicking outside
window.addEventListener('click', function(event) {
    const cartPopup = document.getElementById('cartPopup');
    if (event.target === cartPopup) {
        cartPopup.style.display = 'none';
    }
});

// Automatically update the cart UI when the page loads
document.addEventListener("DOMContentLoaded", function () {
    updateCartUI(); // Fetch and update UI when the page loads
});