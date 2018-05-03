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
            $table->increments('Id');
            $table->string('UserId')->nullable();
            $table->string('CustomerId')->nullable();
            $table->date('Order_date')->nullable();
            $table->float('Total')->nullable();
            $table->string('Note')->nullable();
            $table->string('Payment_Method')->nullable();
            $table->string('Payment_Status')->nullable();
            $table->string('Status')->nullable();
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
