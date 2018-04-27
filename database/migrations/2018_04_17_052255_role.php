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
            $table->string('Role_Name')->nullable();
            $table->string('Role_Description');
            $table->integer('Role_UserId')->unsigned();
            $table->foreign('Role_UserId')->references('Id')->on('Users');
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
