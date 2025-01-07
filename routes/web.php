<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Models\Menu;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PaymentController;

// Public Routes

Route::get('/test', function () {
    return view('include.userHeader');
})->name('test');

Route::get('/password', function () {
    return view('Manage User Profile.ChangePasswordPage');
})->name('password');

Route::get('/', function () {
    return view('Manage Menu.HomePage');
})->name('home');



Route::get('/login', function () {
    return view('Manage Login.LoginPage');
})->name('login');

Route::get('/registration', function () {
    return view('Manage Login.RegistrationPage');
})->name('registration');

Route::post('/submit-registration', [RegistrationController::class, 'store'])->name('registration.submit');

Route::get('/registration-success', function () {
    return view('Manage Login.RegistrationSuccess');
})->name('registration.success');

// Authentication Routes
Route::post('/submit-login', [LoginController::class, 'login'])->name('login.submit');

Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('password.change');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::get('/menu', function () {
        $menuItems = Menu::all(); // Fetch all menu items from the database
        return view('Manage Menu.MenuPage', compact('menuItems'));
    })->name('menu');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.changePassword');

    Route::get('/store', function () {
        return view('Manage User Profile.Stores');
    })->name('stores');

    Route::get('/payment', function () {
        return view('Manage Payment.PaymentPage');
    })->name('payment');



    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    })->name('logout');

    //Cart

    Route::middleware('auth')->group(function () {
        Route::post('/cart/add', [CartController::class, 'addToCart']);
        Route::get('/cart/count', [CartController::class, 'cartCount']);
        Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart']);
        Route::delete('/cart/delete/{id}', [CartController::class, 'deleteCartItem']);
        Route::get('/cart/items', [CartController::class, 'cartItems'])->name('cart.items');
        Route::delete('/cart/remove/{id}', [CartController::class, 'removeItem']);
        Route::post('/clear-cart', [PaymentController::class, 'clearCart'])->name('clear-cart');
    });

    //Menu

    Route::middleware('auth')->group(function () {
        Route::get('/menu', [MenuController::class, 'showMenu'])->name('menu');
    });
    

    //Payment

    Route::get('/payment', [PaymentController::class, 'showPaymentPage'])->name('payment.page');
    Route::post('/process-checkout', [PaymentController::class, 'processCheckout'])->name('process-checkout');
    Route::get('/payment-completed/{orderId}', [PaymentController::class, 'showPaymentCompleted'])->name('payment.completed');
    Route::post('/create-checkout-session', [PaymentController::class, 'createCheckoutSession'])->name('create-checkout-session');

});

