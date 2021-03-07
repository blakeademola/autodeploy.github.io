<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('item_id');
            $table->string('desc');
            $table->string('order_no');
            $table->integer('qty');
            $table->integer('weight');
            $table->integer('dispatch_country_id');
            $table->integer('transport_mode_id');
            $table->string('single_item_total')->nullable();
            $table->string('total');
            $table->string('tax');
            $table->string('grand_total');
            $table->integer('country_id');
            $table->string('status');
            $table->longText('payload')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_orders');
    }
}
