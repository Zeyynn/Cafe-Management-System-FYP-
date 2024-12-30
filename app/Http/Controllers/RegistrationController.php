<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationModel;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'phone' => 'required|max:15',
            'email' => 'required|email|unique:duwauser,email', // Adjusted to match the correct table name
            'password' => 'required|min:6|confirmed', // 'confirmed' checks if re-entered password matches
        ]);

        // Create a new user
        $user = new RegistrationModel();
        $user->name = $validatedData['username'];
        $user->phone = $validatedData['phone'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        // Redirect or return response
        return redirect()->back()->with('success', 'Registration successful!');
    }
}
