<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('name');
            $table->string('surname');
            $table->string('password');
            $table->string('avatar')->default('/uploads/avatar/default.png');
            $table->rememberToken();
            $table->boolean('confirmed')->default(0);       //for confirmation mail.
            $table->string('confirmation_code')->nullable();// -//-
	        $table->string('stripe_api_key')->nullable();
	        $table->string('stripe_public_key')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}