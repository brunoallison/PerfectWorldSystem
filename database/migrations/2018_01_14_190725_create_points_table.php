<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePointsTable.
 */
class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point', function (Blueprint $table) {
            $table->integer('uid')->default(0);
            $table->integer('aid')->default(0);
            $table->integer('time')->default(0);
            $table->integer('zoneid')->default(0)->nullable();
            $table->integer('zonelocalid')->default(0)->nullable();
            $table->dateTime('accountstart')->nullable();
            $table->dateTime('lastlogin')->nullable();
            $table->dateTime('enddate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('points');
    }
}
