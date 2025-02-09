<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Duwa Menu</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Artifika:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arvo:wght@400&display=swap" />
    <link rel="stylesheet" href="{{ asset('css/HomePage.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/MenuPage.css')
    @vite('resources/js/cart.js')
    <script>

      //Scroll
      document.querySelectorAll('.flex-row-c a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        window.scrollTo({
            top: targetElement.offsetTop - 100, // Adjust offset if header is sticky
            behavior: 'smooth'
        });
    });
});


//Cart
document.addEventListener("DOMContentLoaded", function () {

    // Attach click event listeners to all "Add" buttons dynamically
    document.querySelectorAll('.rectangle-4').forEach(button => {
        button.addEventListener('click', function () {
            const parentElement = this.closest('.rectangle-3'); 

            if (!parentElement) {
                console.error("Parent element for button not found.");
                return;
            }

            // Dynamically extract item name and price
            const itemName = parentElement.querySelector('.meat-madness').innerText.trim();
            console.log(parentElement.querySelector('.item-name')); // First span inside the parentElement (item name)
            const priceElement = parentElement.querySelector('.price-6');
            console.log(parentElement.querySelector('.price')); // Find price element inside the parent
            const itemPrice = parseFloat(priceElement.innerText.replace('RM ', '').trim()); // Extract price dynamically

            const userId = {{ auth()->id() }}; // Replace with dynamic user ID if necessary

            // Call the addToCart function with the extracted data
            addToCart(userId, itemName, itemPrice);
        });
    });

    // Add to Cart Function
    function addToCart(userId, itemName, itemPrice) {

      fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({
                user_id: userId,
                item_name: itemName,
                item_price: itemPrice,
                quantity: 1, // Default quantity
            }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(`${itemName} added to cart!`);
                } else {
                    alert(`Failed to add ${itemName} to cart.`);
                }
            })
            .catch(error => console.error('Error adding to cart:', error));
    }
});
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
//Popup
document.addEventListener('DOMContentLoaded', function () {
    const orderButton = document.getElementById('orderButtonLink');
    const cartPopup = document.getElementById('cartPopup');
    const closeCartButton = document.getElementById('closeCartButton');
    const cartItemsList = document.getElementById('cartItemsList');


    if (!orderButton || !cartPopup || !cartItemsList || !closeCartButton) {
        console.error("Some required elements are missing in the DOM.");
        return;
    }

    // Function to fetch cart items
    function fetchCartItems() {
        console.log("Fetching cart items...");
        fetch('/cart/items', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            }
        })
            .then(response => {
                if (!response.ok) {
                    console.error('Failed to fetch cart items:', response.statusText);
                    return response.json();
                }
                return response.json();
            })
            .then(data => {
                console.log("Cart items fetched:", data);

                // Clear previous items
                cartItemsList.innerHTML = '';
                if (!data.items || data.items.length === 0) {
                    cartItemsList.innerHTML = '<li>Your cart is empty</li>';
                } else {
                    data.items.forEach(item => {
                        const listItem = document.createElement('li');
                        listItem.innerHTML = `
                            ${item.item_name} - RM${item.item_price} x ${item.quantity};
                            <button class="remove-button" data-id="${item.id}">Remove</button>
                        `;
                        cartItemsList.appendChild(listItem);
                    });

                    // Attach event listeners to remove buttons
                    document.querySelectorAll('.remove-button').forEach(button => {
                        button.addEventListener('click', function () {
                            const itemId = this.getAttribute('data-id');
                            if (!itemId) {
                                console.error("Item ID is undefined.");
                                return;
                            }
                            console.log("Removing item with ID:", itemId);
                            removeCartItem(itemId);
                        });
                    });
                }
                cartPopup.style.display = 'block'; // Show the popup
            })
            .catch(error => console.error('Error fetching cart items:', error));
    }

    // Function to remove a cart item
    function removeCartItem(cartItemId) {
        console.log("Sending request to remove item:", cartItemId);
        fetch(`/cart/remove/${cartItemId}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
        })
            .then(response => {
                if (!response.ok) {
                    console.error('Failed to remove cart item:', response.statusText);
                    return response.json();
                }
                return response.json();
            })
            .then(data => {
                console.log("Remove item response:", data);
                if (data.success) {
                    alert('Item removed from cart.');
                    fetchCartItems(); // Refresh cart items
                } else {
                    alert('Failed to remove item.');
                }
            })
            .catch(error => console.error('Error removing cart item:', error));
    }

    // Open cart popup when "Order" is clicked
    orderButton.addEventListener('click', function (e) {
        e.preventDefault();
        fetchCartItems();
    });

    // Close cart popup when "Close" is clicked
    closeCartButton.addEventListener('click', function () {
        cartPopup.style.display = 'none';
    });

    // Close popup when clicking outside the cart content
    window.addEventListener('click', function (e) {
        if (e.target === cartPopup) {
            cartPopup.style.display = 'none';
        }
    });
});


    </script>
  </head>

  
  <body>
    <div class="main-container">
      <div class="rectangle">
        <div class="flex-row-bb">
          <img class="logo" src="img/duwa1.png" alt="Logo" />
          @if (Auth::check())
            <div class="auth-message">
                Welcome, {{ Auth::user()->name }}!
            </div>
        @else
            <div class="auth-message">
                <a href="{{ route('login') }}">Log in</a> to access the menu.
            </div>
        @endif
          <div class="removal">
            <a href="/menu">
                <img class="logo" src="img/duwa1.png" alt="Logo" />
                </a>
          </div>
            <span class="rectangle-1"></span>
            <a href="#" id="orderButtonLink" class="order-link">
              <span id="orderButton" class="order">Order</span>
          </a>
          <a href="{{ route('stores') }}" class="stores-link">
            <span class="stores">Stores</span>
          </a>
          <div class="artboard"></div>
          <a href="{{ route('profile') }}" class="profile-link">
          <span class="sign-in">Profile</span>
          </a>
          <a href="#" class="english" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Log Out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
        <div class="flex-row-c">
          <a href="#sourdough-pizza" class="sourdough-pizza">| Sourdough Pizza</a>
          <a href="#pasta" class="pasta">| Pasta</a>
          <a href="#soup" class="soup">| Soup</a>
          <a href="#dessert" class="dessert">| Dessert</a>
          <a href="#et-cetera" class="et-cetera">| Et Cetera</a>
          <a href="#drink" class="drink">| Drinks</a>
          <div class="toolbar-icon"></div>
        </div>
        <div class="line"></div>
      </div>

<!--Menu-->

<div class="menu-container">      
    @php
        $groupedMenuItems = $menuItems->groupBy('category');
    @endphp

    @foreach ($groupedMenuItems as $category => $items)
        <h2 id="{{ strtolower(str_replace(' ', '-', $category)) }}">{{ $category }}</h2> 
        
        <!-- Category Container -->
        <div class="category-container">
            @foreach ($items->chunk(2) as $menuRow)
                <div class="flex-row">
                    @foreach ($menuRow as $item)
                        <div class="rectangle-3">
                            <div class="barbecue-bacon-pizza"></div>
                            <img src="/img/{{ $item->image }}" alt="{{ $item->name }}">
                            <div class="flex-column">
                                <span class="meat-madness">{{ $item->name }}</span>
                                <span class="meat-mania">{{ $item->description }}</span>
                                <span class="price-6">RM {{ number_format($item->price, 2) }}</span>
                                <button class="rectangle-4" onclick="addToCart('{{ auth()->id() }}', '{{ $item->name }}', {{ $item->price }})">
                                    Add
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
        <!-- End of Category Container -->
    @endforeach
</div>

  </div>
  <div id="cartPopup" class="cart-popup" style="display: none;">
    <div class="cart-popup-content">
        <h2>Your Cart</h2>
        <ul id="cartItemsList"></ul>
        <a href="/payment" id="checkoutButton" class="checkout-button">Checkout</a>
        <button id="closeCartButton">Close</button>
    </div>
</div>
    <!--Test-->
  </body>
</html>
