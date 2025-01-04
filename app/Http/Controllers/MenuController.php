<?php

namespace App\Http\Controllers;

use App\Models\Menu; // Import your Menu model
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Fetch all menu items
        $menuItems = Menu::all();

        // Return the view with the menu items
        return view('MenuPage', compact('menuItems'));
    }
}
