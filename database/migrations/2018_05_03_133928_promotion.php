<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Promotion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Promotion',function (Blueprint $table){
            $table->increments('Id');
            $table->string('Name')->nullable();
            $table->integer('OrderId')->unsigned();
            $table->timestamps();
            $table->foreign('OrderId')->references('Id')->on('Order');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
