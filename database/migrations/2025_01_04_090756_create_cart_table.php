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
        $table->unsignedBigInteger('user_id');
        $table->string('item_name');
        $table->decimal('item_price', 8, 2);
        $table->integer('quantity')->default(1);
        $table->timestamps();
    
        // Define the foreign key
        $table->foreign('user_id')->references('id')->on('duwauser')->onDelete('cascade');
    });
}

    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};