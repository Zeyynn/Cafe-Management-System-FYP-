@include('include.userHeader')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Completed</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Replace with your Vite or CSS file path -->
    @vite('resources/css/PaymentCompleted.css')
</head>
<body>

    <div class="container">
        <h1>Thank you for purchasing with us!</h1>
        <p>Please provide the receipt or the order number during your pickup at the counter</p>

        <div class="receipt-box">
            <h2>Your Receipt</h2>
            <p>#{{ $orderId }}</p>
        
            <table class="receipt-table">
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
        
            <div class="receipt-total">
                <p><strong>Total:</strong> RM{{ number_format($subtotal, 2) }}</p>
                <p><strong>Taxes and Charges:</strong> RM{{ number_format($taxes, 2) }}</p>
                <p><strong>Delivery:</strong> RM{{ number_format($deliveryFee, 2) }}</p>
                <p><strong>Bill Total:</strong> RM{{ number_format($total, 2) }}</p>
            </div>
        </div>
        
        <a href="{{ route('menu') }}" class="back-button">Back to Menu</a>
    </div>
</body>
</html>
