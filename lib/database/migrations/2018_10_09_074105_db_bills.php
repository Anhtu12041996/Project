<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_bills', function (Blueprint $table) {
            $table->increments('bill_id');

            $table->dateTime('date_order');
            $table->double('total');
            $table->string('note');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')
                  ->references('customer_id')
                  ->on('db_customer')
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
        Schema::dropIfExists('db_bills');
    }
}
