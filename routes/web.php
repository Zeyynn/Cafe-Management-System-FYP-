<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Homepage

Route::get("/")
;

Route::get('/header', function () {
    return view('include.userHeader');
});

Route::get('/feedback', function () {
    return view('Manage Feedback.FeedbackPage');
});

