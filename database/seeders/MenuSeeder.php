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
                'description' => 'Made with fresh marinara sauce, mozzarella cheese, and basil',
                'price' => 20.00,
                'category' => 'Sourdough Pizza',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Meat Madness',
                'description' => 'Our Meat Mania Pizza comes fully loaded with pepperoni, bacon crumble, & mild sausage',
                'price' => 50.00,
                'category' => 'Sourdough Pizza',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Creamy Chicken Pesto',
                'description' => 'This Creamy Pesto Chicken Pizza has a delicious thin crust and juicy sun dried tomatoes',
                'price' => 35.00,
                'category' => 'Sourdough Pizza',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BBQ Bacon Mushroom',
                'description' => 'Our BBQ Mushroom Bacon Pizza comes fully loaded with BBQ sauce, savory mushrooms, and crispy bacon crumble',
                'price' => 40.00,
                'category' => 'Sourdough Pizza',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Pasta
            [
                'name' => 'Basil Pesto',
                'description' => 'This Creamy Pesto Pasta features al dente noodles, rich pesto sauce, and juicy cherry tomatoes *contain nuts',
                'price' => 24.00,
                'category' => 'Pasta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aglio Olio',
                'description' => 'This spaghetti Aglio e Olio is made with garlic, olive oil, and red pepper flakes',
                'price' => 15.00,
                'category' => 'Pasta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mac & Cheese',
                'description' => 'This mac and cheese is made with a creamy cheese sauce, tender macaroni, and a buttery, crunchy topping',
                'price' => 12.00,
                'category' => 'Pasta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alfredo',
                'description' => 'This Alfredo Pasta is made with fettuccine noodles and a creamy Alfredo sauce',
                'price' => 18.00,
                'category' => 'Pasta',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Soup
            [
                'name' => 'Pumpkin Soup',
                'description' => 'This Pumpkin Soup is made with fresh pumpkin, onions, garlic, and a touch of cream',
                'price' => 12.00,
                'category' => 'Soup',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mushroom & Potato',
                'description' => 'This Mushroom & Potato Soup is made with fresh mushrooms, potatoes, onions, and garlic',
                'price' => 12.00,
                'category' => 'Soup',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Dessert
            [
                'name' => 'Creme Brulee',
                'description' => 'This Creme Brulee is made with a rich custard base and a crunchy caramelized sugar topping',
                'price' => 12.00,
                'category' => 'Dessert',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Et Cetera
            [
                'name' => 'Meatball and Mash',
                'description' => 'This Meatball and Mash is made with juicy meatballs, creamy mashed potatoes, and rich gravy',
                'price' => 25.00,
                'category' => 'Et Cetera',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chicken Tenders',
                'description' => 'This Chicken Tenders is made with crispy chicken tenders, fries, and your choice of dipping sauce',
                'price' => 15.00,
                'category' => 'Et Cetera',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Drinks
            [
                'name' => 'Americano',
                'description' => 'This Americano is made with espresso and hot water',
                'price' => 6.00,
                'category' => 'Drinks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mocha',
                'description' => 'ThisThis Mocha is a perfect blend of rich espresso, velvety chocolate, and creamy milk, topped with a frothy finish',
                'price' => 10.00,
                'category' => 'Drinks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cafe Latte',
                'description' => 'This Cafe Latte is made with espresso and steamed milk',
                'price' => 8.00,
                'category' => 'Drinks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cappuccino',
                'description' => 'This Cappuccino is made with espresso, steamed milk, and a thick layer of foam',
                'price' => 8.00,
                'category' => 'Drinks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dark Chocolate',
                'description' => 'This Dark Chocolate is made with rich, dark chocolate and steamed milk',
                'price' => 9.00,
                'category' => 'Drinks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Matcha Latte',
                'description' => 'This Matcha Latte is made with matcha green tea and steamed milk',
                'price' => 12.00,
                'category' => 'Drinks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
