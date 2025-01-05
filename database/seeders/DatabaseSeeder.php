<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        Menu::create([
            'name' => 'Classic Margherita',
            'description' => 'Made with fresh marinara sauce, mozzarella cheese, and basil.',
            'price' => 20.00,
            'image' => 'margherita.png',
        ]);

        Menu::create([
            'name' => 'Meat Madness',
            'description' => 'Loaded with pepperoni, bacon crumble, and mild sausage.',
            'price' => 50.00,
            'image' => 'meatmadness.png',
        ]);

        // Add more items as needed
    }
}
