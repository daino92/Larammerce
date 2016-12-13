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
            $table->string('password');
            //$table->string('role')->default('user');
            $table->string('role_id');
            $table->rememberToken();
            $table->boolean('confirmed')->default(0);       //for confirmation mail.
            $table->string('confirmation_code')->nullable();// -//-
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
