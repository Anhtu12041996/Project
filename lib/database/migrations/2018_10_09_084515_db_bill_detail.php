<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbBillDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_billDetail', function (Blueprint $table) {
            $table->increments('billDetail_id');

            $table->integer('bill_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('quantily');
            $table->double('price');

            $table->foreign('bill_id')
                  ->references('bill_id')->on('db_bills')
                  ->onDelete('cascade');

            $table->foreign('product_id')
                  ->references('product_id')->on('db_Products')                 
                  ->onDelete('cascade');

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
        Schema::dropIfExists('db_billDetail');
    }
}
