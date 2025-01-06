<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/PaymentPage.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const stripe = Stripe('{{ env('STRIPE_KEY') }}'); // Use your publishable key
            const button = document.getElementById('checkout-button');

            if (button) {
                button.addEventListener('click', (event) => {
                    event.preventDefault(); // Prevent form submission
                    fetch('/create-checkout-session', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                        body: JSON.stringify({
                            amount: {{ $totalAmount * 100 }} // Total amount in cents
                        }),
                    })
                        .then(response => response.json())
                        .then(session => {
                            return stripe.redirectToCheckout({ sessionId: session.id });
                        })
                        .then(result => {
                            if (result.error) {
                                alert(result.error.message);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });
            } else {
                console.error('Checkout button not found!');
            }
        });
    </script>
</head>
<body>

  <div class="container">
    <!-- Order Summary -->
    <div class="order-summary">
        <h2>Your Order</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                    <tr>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>RM{{ number_format($item->item_price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p><strong>Total:</strong> RM{{ number_format($totalAmount, 2) }}</p>
    </div>

    <!-- Checkout Form -->
    <div class="checkout-form">
      <h2>Check Out</h2>
      <form action="{{ route('process-checkout') }}" method="POST">
        @csrf
        <input type="hidden" name="totalAmount" value="{{ $totalAmount }}">
        <div class="form-group">
            <label for="card-holder-name">Card Holder Name</label>
            <input type="text" id="card-holder-name" name="card_holder_name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="card_number" placeholder="**** **** **** ****" required>
        </div>
        <div class="form-group">
            <label for="expiration-date">Expiration Date</label>
            <input type="text" id="expiration-date" name="expiration_date" placeholder="MM/YY" required>
        </div>
        <div class="form-group">
            <label for="cvv">CVV Code</label>
            <input type="text" id="cvv" name="cvv" placeholder="***" required>
        </div>
        <button id="checkout-button" type="submit" class="btn btn-primary">
            Pay RM{{ number_format($totalAmount, 2) }}
        </button>
    </form>
      <p class="secure-info">Payments are secured and encrypted</p>
  </div>
</div>
</div>
</body>
</html>