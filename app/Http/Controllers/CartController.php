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
    public function cartCount(Request $request)
{
    $userId = auth()->id();
    $count = Cart::where('user_id', $userId)->sum('quantity');
    return response()->json(['count' => $count]);
}
public function cartItems(Request $request)
{
    $userId = auth()->id();
    $items = Cart::where('user_id', $userId)->get(['item_name', 'item_price', 'quantity']);
    return response()->json(['items' => $items]);
}

public function removeFromCart($id)
{
    $item = Cart::findOrFail($id);
    $item->delete();
    return response()->json(['success' => true]);
}
public function getCartItems()
{
    $userId = Auth::id(); // Get the logged-in user ID
    $cartItems = DB::table('cart')->where('user_id', $userId)->get();
    return response()->json($cartItems);
}

public function deleteCartItem($id)
{
    $userId = Auth::id(); // Get the logged-in user ID
    $deleted = DB::table('cart')->where('id', $id)->where('user_id', $userId)->delete();

    if ($deleted) {
        return response()->json(['success' => true]);
    } else {
        return response()->json(['success' => false], 400);
    }
}

}