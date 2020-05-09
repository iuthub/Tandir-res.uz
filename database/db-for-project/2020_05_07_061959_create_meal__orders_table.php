<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal__orders', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('meal_id');
            $table->integer('quantity');
            $table->timestamp('order_time');
            $table->integer('total_price');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal__orders');
    }
}
