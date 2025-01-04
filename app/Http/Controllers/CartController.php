<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    // Add item to cart
    public function addToCart(Request $request)
{
    $cartItem = \App\Models\Cart::where('user_id', Auth::id())
        ->where('item_name', $request->item_name)
        ->first();

    if ($cartItem) {
        // Update quantity if item already exists
        $cartItem->quantity += $request->quantity;
        $cartItem->save();
    } else {
        // Create new cart item
        \App\Models\Cart::create([
            'user_id' => Auth::id(),
            'item_name' => $request->item_name,
            'item_price' => $request->item_price,
            'quantity' => $request->quantity,
        ]);
    }

    return response()->json(['success' => true, 'message' => 'Item added to cart']);
}

    // Get all cart items
    public function getCartItems()
{
    $cartItems = \App\Models\Cart::where('user_id', Auth::id())->get();

    $total = $cartItems->sum(function ($item) {
        return $item->item_price * $item->quantity;
    });

    return response()->json([
        'items' => $cartItems,
        'total' => $total,
    ]);
}

    // Remove an item from the cart
    public function removeFromCart($id)
    {
        $cartItem = Cart::where('user_id', Auth::id())
            ->where('id', $id)
            ->first();

        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['success' => true, 'message' => 'Item removed from cart']);
        }

        return response()->json(['success' => false, 'message' => 'Item not found']);
    }
}
