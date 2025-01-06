<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:duwauser,id',
            'item_name' => 'required|string',
            'item_price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Cart::create([
            'user_id' => $validated['user_id'],
            'item_name' => $validated['item_name'],
            'item_price' => $validated['item_price'],
            'quantity' => $validated['quantity'],
        ]);

        return response()->json(['success' => true, 'cart' => $cart]);
    }
    
public function cartItems(Request $request)
{
    $userId = auth()->id();
    $items = Cart::where('user_id', $userId)->get(['id', 'item_name', 'item_price', 'quantity']);
    return response()->json(['items' => $items]);
}

public function removeItem($id)
{
    $cartItem = Cart::find($id);

    if ($cartItem) {
        $cartItem->delete();
        return response()->json(['success' => true, 'message' => 'Item removed from cart.']);
    }
\Log::error("Cart item with ID $id not found.");
    return response()->json(['success' => false, 'message' => 'Item not found.']);
}
public function getCartItems()
{
    try {
        $cartItems = Cart::where('user_id', auth()->id())->get();

        return response()->json(['items' => $cartItems]);
    } catch (\Exception $e) {
        \Log::error('Error fetching cart items: ' . $e->getMessage());
        return response()->json(['error' => 'Failed to fetch cart items'], 500);
    }
    
    $userId = auth()->id(); // Get the authenticated user's ID
    $cartItems = Cart::where('user_id', auth()->id())->get();

    return response()->json($cartItems);
}

}