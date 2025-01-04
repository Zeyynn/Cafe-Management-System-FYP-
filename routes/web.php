<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;

// Public Routes

Route::get('/password', function () {
    return view('Manage User Profile.ChangePasswordPage');
})->name('password');

Route::get('/home', function () {
    return view('Manage Menu.HomePage');
})->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

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
        return view('Manage Menu.MenuPage');
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

    Route::middleware(['auth'])->group(function () {
        Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
        Route::get('/cart/items', [CartController::class, 'getCartItems'])->name('cart.items');
        Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    });
});

