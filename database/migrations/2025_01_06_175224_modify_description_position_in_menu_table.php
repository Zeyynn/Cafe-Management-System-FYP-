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
    Schema::table('menu', function (Blueprint $table) {
        $table->text('description')->after('name')->change();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('menu', function (Blueprint $table) {
        $table->text('description')->after('updated_at')->change();
    });
}
};
