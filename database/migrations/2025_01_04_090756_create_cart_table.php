<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('cart', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Links to the user
        $table->foreignId('menu_id')->constrained('menu')->onDelete('cascade'); // Links to the menu item
        $table->integer('quantity')->default(1); // Quantity of the item
        $table->timestamps(); // Timestamps for tracking
    });
}

    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};