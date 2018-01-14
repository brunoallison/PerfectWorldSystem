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
            $table->integer('userid')->default(0);
            $table->integer('zoneid')->default(0);
            $table->integer('sn')->default(0);
            $table->integer('aid')->default(0);
            $table->integer('point')->default(0);
            $table->integer('cash')->default(0);
            $table->integer('status')->default(0);
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
