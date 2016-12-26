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
            $table->string('email',50)->unique();
            $table->string('username',30)->unique();
            $table->string('name',30);
            $table->string('surname',30);
            $table->string('password',30);
            //$table->string('role')->default('user');
            //$table->integer('role_id')->default(3);
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
