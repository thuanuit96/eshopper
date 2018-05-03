<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wishlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Wishlist',function (Blueprint $table){
            $table->increments('Id');
            $table->integer('UserId')->unsigned();
            $table->integer('ProductId')->unsigned();
            $table->timestamps();
            $table->foreign('ProductId')->references('Id')->on('Products');
            $table->foreign('UserId')->references('Id')->on('Users');



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
