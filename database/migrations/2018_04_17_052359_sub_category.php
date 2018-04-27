<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create(
            'SubCategory',function (Blueprint $table){
            $table->increments('Id');
            $table->string('SubCategory_Name')->nullable();
            $table->integer('Subcategory_CategoryId')->unsigned();
            $table->foreign('Subcategory_CategoryId')->references('Id')->on('Categories');
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
        Schema::dropIfExists('SubCategory');
    }
}
