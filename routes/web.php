<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//Homepage

Route::get('/header', function () {
    return view('include.userHeader');
});

Route::get('/feedback', function () {
    return view('Manage Feedback.FeedbackPage');
});

Route::get('/login', function () {
    return view('Manage Login.LoginPage');
})->name('login');

Route::get('/menu', function () {
    return view('Manage Menu.HomePage');
});

Route::get('/store', function () {
    return view('Manage User Profile.Stores');
})->name('stores');

Route::get('/menu', function () {
    return view('Manage Menu.HomePage');
})->name('menu');

Route::get('/payment', function () {
    return view('Manage Payment.PaymentPage');
})->name('menu');

Route::get('/profile', function () {
    return view('Manage User Profile.ProfilePage');
})->name('profile');

Route::get('/registration', function () {
    return view('Manage Login.RegistrationPage');
})->name('registration');

Route::post('/submit-registration', [App\Http\Controllers\RegistrationController::class, 'store']);
