<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('duwauser', function (Blueprint $table) {
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->text('address')->nullable();
            $table->string('food')->nullable();
            $table->string('drink')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('duwauser', function (Blueprint $table) {
            $table->dropColumn(['birthday', 'gender', 'address', 'food', 'drink']);
        });
    }
};
