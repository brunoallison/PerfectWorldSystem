<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Forbid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forbid', function (Blueprint $table) {
            $table->increments('userid');
            $table->integer('type')->index();
            $table->dateTime('ctime');
            $table->integer('forbid_time');
            $table->binary('reason');
            $table->integer('gmroleid')->nullable();
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
