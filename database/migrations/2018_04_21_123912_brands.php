<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Brands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create(
            'Brands',function (Blueprint $table){
            $table->increments('SubCategory_Id');
            $table->string('SubCategory_Name')->nullable();
            $table->integer('Subcategory_CategoryId')->unsigned();
            $table->foreign('Subcategory_CategoryId')->references('Category_Id')->on('Categories');
            $table->timestamps();

        }
        );
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
