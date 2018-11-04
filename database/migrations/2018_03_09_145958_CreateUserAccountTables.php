<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Creat the User and Account Tables
 */
class CreateUserAccountTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create account table
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('first_name')->index();
            $table->string('last_name')->index();
            $table->timestamps();
        });
        // create user table
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->index();
            $table->string('password')->index()->nullable();
            $table->string('remember_token')->nullable();
            $table->string('hash')->nullable();
            $table->string('email')->index();
            $table->string('account_status')->index();
            $table->integer('user_group_id')->index()->unsigned();
            $table->dateTime('account_expiration');
            $table->string('order_number')->nullable();
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
        Schema::dropIfExists('accounts');
        Schema::dropIfExists('users');
    }
}
