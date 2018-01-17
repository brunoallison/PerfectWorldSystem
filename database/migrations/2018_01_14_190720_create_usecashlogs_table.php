<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsecashlogsTable.
 */
class CreateUsecashlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usecashlog', function (Blueprint $table) {
            $table->integer('userid')->default(0);
            $table->integer('zoneid')->default(0);
            $table->integer('sn')->default(0);
            $table->integer('aid')->default(0);
            $table->integer('point')->default(0);
            $table->integer('cash')->default(0);
            $table->integer('status')->default(0);
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
        Schema::drop('usecashlogs');
    }
}
