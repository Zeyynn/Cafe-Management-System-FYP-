<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id(); // Auto-incrementing primary key (Order #)
        $table->unsignedBigInteger('user_id'); // To associate the order with a user
        $table->decimal('total', 8, 2); // Store the total bill amount
        $table->timestamps(); // Created and updated timestamps
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
