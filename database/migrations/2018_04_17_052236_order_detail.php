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
            $table->integer('OrderId')->unsigned();
            $table->integer('ProductID')->unsigned();
            $table->float('Quantity')->nullable();
            $table->float('Unit_Price')->nullable();
            $table->integer('CustomerId')->unsigned();
            $table->timestamps();
            $table->foreign('OrderId')->references('Id')->on('Order');
            $table->foreign('ProductId')->references('Id')->on('Products');



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
