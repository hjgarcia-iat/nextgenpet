<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create user table
        Schema::create('colleges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('state_id')->index();
            $table->string('name')->index();
            $table->string('address');
            $table->string('city');
            $table->string('zip');
            $table->timestamps();
        });

        // create college user table
        Schema::create('college_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('college_id')->index();
            $table->integer('user_id')->index();
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
        Schema::dropIfExists('colleges');
        Schema::dropIfExists('college_user');
    }
}
