<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateZipCodeUsTable
 */
class CreateZipCodeUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create user table
        Schema::create('zip_code_us', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zip_code')->index();
            $table->string('city')->index();
            $table->string('state_name')->index();
            $table->string('state_prefix')->index();
            $table->string('county')->index();
            $table->float('lat');
            $table->float('lon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zip_code_us');
    }
}
