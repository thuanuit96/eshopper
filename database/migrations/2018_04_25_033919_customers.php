<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create(
            'Customers',function (Blueprint $table){
//            $table->string('Order_Phone')->nullable(false)->change();
//            $table->string('Order_Email')->nullable(false)->change();
//            $table->increments('Order_Quantity')->nullable(false)->change();
            $table->increments('Id');
            $table->string('Name')->nullable();
            $table->string('Email')->nullable();
            $table->string('Address')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->timestamps();

        }
        );
        Schema::table('Products', function($table) {
            $table->foreign('CategoryId')->references('Id')->on('Categories');
            $table->foreign('BrandId')->references('Id')->on('Brands');
            $table->foreign('CustomerId')->references('Id')->on('Customers');
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
