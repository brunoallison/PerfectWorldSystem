<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateForbidsTable.
 */
class CreateForbidsTable extends Migration
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
        Schema::drop('forbids');
    }
}
