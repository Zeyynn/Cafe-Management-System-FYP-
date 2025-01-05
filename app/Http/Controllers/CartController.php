<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // Add item to cart
    public function addToCart(Request $request)
{
    \Log::info('Add to Cart Request:', $request->all());
    $user = Auth::user(); // Get the logged-in user

    // Check if the item is already in the cart
    $cartItem = Cart::where('user_id', $user->id)
                    ->where('menu_id', $request->menu_id)
                    ->first();

    if ($cartItem) {
        // If it exists, increment the quantity
        $cartItem->quantity += 1;
        $cartItem->save();
    } else {
        // Otherwise, create a new cart entry
        Cart::create([
            'user_id' => $user->id,
            'menu_id' => $request->menu_id,
            'quantity' => 1,
        ]);
    }

    return response()->json(['success' => true, 'message' => 'Item added to cart!']);
}

    // Get all cart items
    public function getCartItems()
{
    $user = Auth::user();

    $cartItems = Cart::with('menuItem') // Eager load menu item details
                     ->where('user_id', $user->id)
                     ->get();

    return response()->json(['cartItems' => $cartItems]);
}

    // Remove an item from the cart
    public function removeFromCart($cartId)
{
    $cartItem = Cart::find($cartId);

    if ($cartItem) {
        $cartItem->delete();
        return response()->json(['success' => true, 'message' => 'Item removed from cart!']);
    }

    return response()->json(['success' => false, 'message' => 'Item not found.']);
}
public function showPaymentPage() {
    $userId = auth()->id(); // Replace with the actual user ID
    $cartItems = DB::table('cart')->where('user_id', $userId)->get();

    return view('ManagePayment.PaymentPage', compact('cartItems'));
}
}

Log::info('Add to cart request payload:', $request->all());
Log::info('Authenticated User ID:', ['id' => Auth::id()]);
Log::info('Database check for existing item:', ['item' => $cartItem]);
Log::info('Incoming Request: ', $request->all());