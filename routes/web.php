<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;



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



Route::get('/store', function () {
    return view('Manage User Profile.Stores');
})->name('stores');

Route::get('/home', function () {
    return view('Manage Menu.HomePage');
})->name('home');

Route::get('/payment', function () {
    return view('Manage Payment.PaymentPage');
});

Route::get('/profile', function () {
    return view('Manage User Profile.ProfilePage');
})->name('profile');


//Registration

Route::get('/registration', function () {
    return view('Manage Login.RegistrationPage');
})->name('registration');

Route::post('/submit-registration', [App\Http\Controllers\RegistrationController::class, 'store']);

Route::post('/submit-registration', [RegistrationController::class, 'store']);

Route::get('/registration-success', function () {
    return view('Manage Login.RegistrationSuccess');
})->name('registration.success');

//Login

Route::post('/submit-login', [LoginController::class, 'login'])->name('login.submit');

//Menu

Route::get('/menu', function () {
    return view('Manage Menu.MenuPage');
})->name('menu')->middleware('auth');

Route::get('/menu', function () {
    return view('Manage Menu.MenuPage');
});