<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Point extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point', function (Blueprint $table) {
            $table->increments('uid');
            $table->integer('aid')->index();
            $table->integer('time');
            $table->integer('zoneid')->nullable();
            $table->integer('zonelocalid');
            $table->dateTime('accountstart');
            $table->dateTime('lastlogin');
            $table->dateTime('enddate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
