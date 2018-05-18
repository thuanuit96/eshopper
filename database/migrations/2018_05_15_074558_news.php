<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('News',function (Blueprint $table){
            $table->increments('Id');
            $table->string('Title');
            $table->string('Slug');
            $table->string('Author');
             $table->string('Intro');
            $table->string('Content');
            $table->string('Images');

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
        //
    }
}
