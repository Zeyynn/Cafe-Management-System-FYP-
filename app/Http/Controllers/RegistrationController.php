<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationModel;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function store(Request $request)
{
    try {
        //Input
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'phone' => 'required|max:15',
            'email' => 'required|email|unique:duwauser,email',
            'password' => 'required|min:6|confirmed',
        ]);

        
        \Log::info('Validated Data:', $validatedData);

        
        $user = RegistrationModel::create([
            'name' => $validatedData['username'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Redirect to success page
        return redirect()->route('registration.success');
    } catch (\Exception $e) {
        // Log any errors
        \Log::error('Error saving user: ' . $e->getMessage());

        // Redirect back with errors
        return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
    }
}
}