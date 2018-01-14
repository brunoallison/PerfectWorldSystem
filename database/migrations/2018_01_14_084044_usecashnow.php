<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usecashnow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usecashnow', function (Blueprint $table) {
            $table->increments('userid');
            $table->integer('zoneid')->index();
            $table->integer('sn')->index();
            $table->integer('aid');
            $table->integer('point');
            $table->integer('cash');
            $table->integer('status');
            $table->dateTime('creatime');
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
