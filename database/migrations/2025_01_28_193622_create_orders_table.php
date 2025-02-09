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
        $table->id();
        $table->string('order_id')->unique();
        $table->string('customer_name');
        $table->string('customer_email');
        $table->text('order_details');
        $table->decimal('total_amount', 8, 2);
        $table->string('payment_status')->default('pending');
        $table->timestamps();
    });
}