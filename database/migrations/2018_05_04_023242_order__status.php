<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order_Status',function (Blueprint $table){
            $table->increments('Id');
            $table->string('Name');

            $table->timestamps();

        });
        Schema::table('Order',function (Blueprint $table){
            $table->foreign('Order_Status')->references('Id')->on('Order_Status');


        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}