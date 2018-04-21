<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order',function (Blueprint $table){
            $table->increments('Order_Id');
            $table->string('Order_UserId')->nullable();
            $table->string('Order_CustomerName')->nullable(false)->change();
            $table->string('Order_Address')->nullable(false)->change();
            $table->string('Order_Phone')->nullable(false)->change();
            $table->string('Order_Email')->nullable(false)->change();
            $table->increments('Order_Quantity')->nullable(false)->change();
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
        Schema::dropIfExists('Order');
    }
}
