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
            $table->integer('board_order_id');
            $table->integer('meal_id');
            $table->integer('quantity');
            $table->integer('total_price');
            $table->time('order_time');
            $table->time('ready_time');

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
