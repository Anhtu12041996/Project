<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_products', function (Blueprint $table) {
            $table->increments('product_id');

            $table->string('name');
            $table->text('description');
            $table->double('unit_price');
            $table->double('promotion_price');
            $table->string('img');
            $table->integer('cate_id')->unsigned();
            $table->integer('typeProduct_id')->unsigned();

            $table->foreign('cate_id')
                  ->references('cate_id')->on('db_categories')
                  ->onDelete('cascade');

            $table->foreign('typeProduct_id')
                  ->references('typeProduct_id')->on('db_typeProducts')                 
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
        Schema::dropIfExists('db_products');
    }
}
