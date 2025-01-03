<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Duwauser;

class ProfileController extends Controller
{
    // Show Profile Page
    public function show()
    {
        // Get the authenticated user from the Duwauser model
        $user = Duwauser::find(Auth::id());

        // Return the ProfilePage view with user data
        return view('Manage User Profile.ProfilePage', compact('user'));
    }

    // Show Edit Profile Page
    public function edit()
    {
        // Get the authenticated user from the Duwauser model
        $user = Duwauser::find(Auth::id());

        // Return the EditProfilePage view with user data
        return view('Manage User Profile.EditProfilePage', compact('user'));
    }

    // Handle Profile Update
    public function update(Request $request)
    {
        // Get the authenticated user from the Duwauser model
        $user = Duwauser::find(Auth::id());

        // Validate the input
        $request->validate([
            'username' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'birthday' => 'nullable|date',
            'gender' => 'nullable|string|max:10',
            'address' => 'nullable|string|max:255',
            'food' => 'nullable|string|max:50',
            'drink' => 'nullable|string|max:50',
        ]);

        // Update user data
        $user->update([
            'name' => $request->username,
            'phone' => $request->phone,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'address' => $request->address,
            'food' => $request->food,
            'drink' => $request->drink,
        ]);

        // Redirect to profile page with success message
        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

    // Handle Password Change
    public function changePassword(Request $request)
    {
        // Validate the input
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        // Get the authenticated user from the Duwauser model
        $user = Duwauser::find(Auth::id());

        // Check if current password matches
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password does not match.']);
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect with success message
        return redirect()->route('profile')->with('success', 'Password changed successfully.');
    }
}
