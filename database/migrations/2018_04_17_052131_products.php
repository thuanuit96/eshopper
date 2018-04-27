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
            $table->string('Product_Name')->nullable();
            $table->string('Product_Description')->nullable();
            $table->float('Product_Price')->nullable();
            $table->string('Product_Color')->nullable();
            $table->string('Product_Material')->nullable();
            $table->integer('Product_Size')->nullable();
            $table->string('ProductDetail')->nullable();
            $table->integer('Product_TotalView')->nullable();
            $table->tinyInteger('Product_IsSellOff')->nullable();
            $table->string('Product_Alias')->nullable();
            $table->integer('Product_Image1')->nullable();
            $table->integer('Product_Image2')->nullable();
            $table->integer('Product_Image3')->nullable();
            $table->integer('Product_Image4')->nullable();
            $table->integer('Product_CategoryId')->unsigned()->nullable();;
            $table->integer('Product_BrandId')->unsigned()->nullable();;
            $table->integer('Product_CustomerId')->unsigned()->nullable();;
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
