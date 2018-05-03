<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Role extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create(
            'Role',function (Blueprint $table){
            $table->increments('Id');
            $table->string('Name')->nullable();
            $table->string('Description');
            $table->integer('UserId')->unsigned();
            $table->foreign('UserId')->references('Id')->on('Users');
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
        Schema::dropIfExists('Role');
    }
}
