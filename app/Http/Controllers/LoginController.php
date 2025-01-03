<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(Request $request)
{
    \Log::info('Login attempt with:', [
        'email' => $request->email,
        'password' => $request->password,
    ]);

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        \Log::info('Login successful for email: ' . $request->email);
        $request->session()->regenerate();
        return redirect()->route('menu');
    }

    \Log::error('Login failed for email: ' . $request->email);
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
    }
}
