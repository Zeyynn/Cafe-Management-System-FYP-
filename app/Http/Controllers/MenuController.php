<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function showMenu()
    {
        // Fetch menu items from the database
        $menuItems = DB::table('menu')->get();
        return view('Manage Menu.MenuPage', compact('menuItems'));
    }
}