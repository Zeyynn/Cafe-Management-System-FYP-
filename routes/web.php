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
});

Route::get('/menu', function () {
    return view('Manage Menu.HomePage');
});
