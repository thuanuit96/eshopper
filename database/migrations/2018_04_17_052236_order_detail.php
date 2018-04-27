<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrderDetail',function (Blueprint $table){
            $table->increments('Id');
            $table->integer('OrderDetail_OrderId')->unsigned();
            $table->integer('OrderDetail_ProductID')->unsigned();
            $table->string('OrderDetail_Description');
            $table->timestamps();
            $table->foreign('OrderDetail_OrderId')->references('Id')->on('Order');
            $table->foreign('OrderDetail_ProductId')->references('Id')->on('Products');


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OrderDetail');
    }

}
