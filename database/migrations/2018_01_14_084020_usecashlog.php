<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usecashlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usecashlog', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('zoneid');
            $table->integer('sn');
            $table->integer('aid');
            $table->integer('point');
            $table->integer('cash');
            $table->integer('status');
            $table->dateTime('creatime');
            $table->dateTime('fintime');
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
