<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
        DB::table('menu')->insert([
            // Sourdough Pizza
            [
                'name' => 'Classic Margherita',
                'price' => 20.00,
                'category' => 'Sourdough Pizza',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Meat Madness',
                'price' => 50.00,
                'category' => 'Sourdough Pizza',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Creamy Chicken Pesto',
                'price' => 35.00,
                'category' => 'Sourdough Pizza',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BBQ Bacon Mushroom',
                'price' => 40.00,
                'category' => 'Sourdough Pizza',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Pasta
            [
                'name' => 'Basil Pesto',
                'price' => 24.00,
                'category' => 'Pasta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aglio Olio',
                'price' => 15.00,
                'category' => 'Pasta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mac & Cheese',
                'price' => 12.00,
                'category' => 'Pasta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alfredo',
                'price' => 18.00,
                'category' => 'Pasta',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Soup
            [
                'name' => 'Pumpkin Soup',
                'price' => 12.00,
                'category' => 'Soup',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mushroom & Potato',
                'price' => 12.00,
                'category' => 'Soup',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Dessert
            [
                'name' => 'Creme Brulee',
                'price' => 12.00,
                'category' => 'Dessert',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Et Cetera
            [
                'name' => 'Meatball and Mash',
                'price' => 25.00,
                'category' => 'Et Cetera',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chicken Tenders',
                'price' => 15.00,
                'category' => 'Et Cetera',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Drinks
            [
                'name' => 'Americano',
                'price' => 6.00,
                'category' => 'Drinks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mocha',
                'price' => 10.00,
                'category' => 'Drinks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cafe Latte',
                'price' => 8.00,
                'category' => 'Drinks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cappuccino',
                'price' => 8.00,
                'category' => 'Drinks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dark Chocolate',
                'price' => 9.00,
                'category' => 'Drinks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Matcha Latte',
                'price' => 12.00,
                'category' => 'Drinks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
