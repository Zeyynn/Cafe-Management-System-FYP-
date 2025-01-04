<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    // Add item to cart
    public function addToCart(Request $request)
{
    Log::info('Add to cart request: ', $request->all());
    Log::info('Authenticated User ID: ' . Auth::id());
    
    
    $cartItem = Cart::where('user_id', Auth::id())
        ->where('item_name', $request->item_name)
        ->first();

    if ($cartItem) {
        $cartItem->quantity += $request->quantity;
        $cartItem->save();
        Log::info('Updated Cart Item: ', $cartItem->toArray());
    } else {
        $newCartItem = Cart::create([
            'user_id' => Auth::id(), // Authenticated user ID
            'item_name' => $request->item_name,
            'item_price' => $request->item_price,
            'quantity' => $request->quantity,
        ]);
        Log::info('Created Cart Item: ', $newCartItem->toArray());
    }

    return response()->json(['success' => true, 'message' => 'Item added to cart']);
}

    // Get all cart items
    public function getCartItems()
{
    $cartItems = Cart::where('user_id', Auth::id())->get();

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
    $cartItem = Cart::where('user_id', Auth::id())->where('id', $id)->first();

    if ($cartItem) {
        $cartItem->delete();
        return response()->json(['success' => true, 'message' => 'Item removed from cart']);
    }

    return response()->json(['success' => false, 'message' => 'Item not found']);
    }
}

Log::info('Add to cart request payload:', $request->all());
Log::info('Authenticated User ID:', ['id' => Auth::id()]);
Log::info('Database check for existing item:', ['item' => $cartItem]);
Log::info('Incoming Request: ', $request->all());