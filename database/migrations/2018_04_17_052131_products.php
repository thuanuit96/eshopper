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
            $table->string('Code')->nullable();
            $table->string('Description')->nullable();
            $table->float('Price')->nullable();
            $table->string('Discount')->nullable();
            $table->string('Status')->nullable();
            $table->string('Slug')->nullable();
            $table->string('Image1')->nullable();
            $table->string('Image2')->nullable();
            $table->string('Image3')->nullable();
            $table->integer('SubCategoryId')->unsigned()->nullable();
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
