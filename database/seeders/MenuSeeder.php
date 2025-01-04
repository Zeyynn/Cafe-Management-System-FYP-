<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->insert([
            ['name' => 'Classic Margherita', 'price' => 25.00, 'description' => 'Fresh mozzarella, tomato sauce, and basil'],
            ['name' => 'BBQ Chicken Pizza', 'price' => 30.00, 'description' => 'Grilled chicken, barbecue sauce, red onions, and cilantro'],
            ['name' => 'Pasta Alfredo', 'price' => 20.00, 'description' => 'Creamy Alfredo sauce with fettuccine pasta'],
        ]);
    }
}
