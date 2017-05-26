<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imagePath');
            $table->string('thumbnail');
            $table->string('title');
            $table->string('short_desc');
            $table->text('description');
            $table->string('category',30);
            $table->string('subcategory',30);
            $table->integer('price');
            $table->integer('stock');
            $table->integer('rating_count');
            $table->float('rating_cache',2,1);
            $table->tinyInteger('published');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}