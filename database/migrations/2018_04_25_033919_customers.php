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
            $table->increments('Id');
            $table->string('Customer_Name')->nullable();
            $table->string('Customer_Address')->nullable();
            $table->string('Customer_PhoneNumber')->nullable();
            $table->timestamps();

        }
        );
        Schema::table('Products', function($table) {
            $table->foreign('Product_CategoryId')->references('Id')->on('Categories');
            $table->foreign('Product_BrandId')->references('Id')->on('Brands');
            $table->foreign('Product_CustomerId')->references('Id')->on('Customers');
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
