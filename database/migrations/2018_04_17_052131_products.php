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
            $table->increments('Product_Id');
            $table->string('Product_Name')->default(null);
            $table->string('Product_Description')->default(null);
            $table->float('Product_Price')->default(null);
            $table->string('Product_Color')->default(null);
            $table->string('Product_Material')->default(null);
            $table->integer('Product_Size')->default(null);
            $table->string('ProductDetail')->default(null);
            $table->integer('Product_TotalView')->default(null);
            $table->tinyInteger('Product_IsSellOff')->default(null);
            $table->string('Product_Alias')->default(null);
            $table->integer('Product_Image1')->default(null);
            $table->integer('Product_Image2')->default(null);
            $table->integer('Product_Image3')->default(null);
            $table->integer('Product_Image4')->default(null);
            $table->integer('Product_CategoryId')->unsigned();
            $table->foreign('Product_CategoryId')->references('Category_Id')->on('Categories');

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
