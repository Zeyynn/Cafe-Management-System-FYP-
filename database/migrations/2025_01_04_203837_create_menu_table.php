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
    Schema::create('menu', function (Blueprint $table) {
        $table->id(); // Primary Key
        $table->string('name'); // Item name
        $table->decimal('price', 8, 2); // Item price
        $table->text('description')->nullable(); // Optional item description
        $table->timestamps(); // Created at / Updated at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
