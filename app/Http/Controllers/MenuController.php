<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu; // Import the Menu model

class MenuController extends Controller
{
    public function showMenu()
    {
        // Retrieve all menu items from the database
        $menuItems = Menu::all();

        // Pass the data to the MenuPage view
        return view('Manage Menu.MenuPage', compact('menuItems'));
    }
}