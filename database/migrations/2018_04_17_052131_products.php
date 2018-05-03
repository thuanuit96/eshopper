<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('Products',function (Blueprint $table)
        {
            $table->increments('Id');
            $table->string('Name')->nullable();
            $table->string('Description')->nullable();
            $table->float('Price')->nullable();
            $table->float('Discount')->nullable();
            $table->string('Color')->nullable();
            $table->string('Material')->nullable();
            $table->integer('Size')->nullable();
            $table->tinyInteger('IsSellOff')->nullable();
            $table->string('Alias')->nullable();
            $table->integer('Image1')->nullable();
            $table->integer('Image2')->nullable();
            $table->integer('Image3')->nullable();
            $table->integer('Image4')->nullable();
            $table->integer('CategoryId')->unsigned()->nullable();;
            $table->integer('BrandId')->unsigned()->nullable();;
            $table->integer('CustomerId')->unsigned()->nullable();;
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
        Schema::dropIfExists('Products');
    }
}
