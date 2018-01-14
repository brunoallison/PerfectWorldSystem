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
            $table->integer('userid')->default(0);
            $table->integer('type')->default(0);
            $table->dateTime('ctime');
            $table->integer('forbid_time')->default(0);
            $table->binary('reason');
            $table->integer('gmroleid')->default(0)->nullable();
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
