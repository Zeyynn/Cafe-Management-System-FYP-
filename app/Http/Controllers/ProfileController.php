<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Duwauser;

class ProfileController extends Controller
{
    
    public function show()
    {
        // Fetch from Duwauser model
        $user = Duwauser::find(Auth::id());

        // Return the ProfilePage view with duwauser table
        return view('Manage User Profile.ProfilePage', compact('user'));
    }

    
    public function edit()
    {
        // Get data duwauser from the Duwauser model
        $user = Duwauser::find(Auth::id());

        // Return the Edit Profile page with duwauser data
        return view('Manage User Profile.EditProfilePage', compact('user'));
    }

    
    public function update(Request $request)
    {
        // Get data duwauser from the Duwauser model
        $user = Duwauser::find(Auth::id());

        // Inputs
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

        // Updates
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

        // Return the Profile page with updated duwauser data
        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

    public function changePassword(Request $request)
    {
        // Input
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        // Get data duwauser from the Duwauser model
        $user = Duwauser::find(Auth::id());

        // Double check password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password does not match.']);
        }

        // Update  password
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Success
        return redirect()->route('profile')->with('success', 'Password changed successfully.');
    }
}
