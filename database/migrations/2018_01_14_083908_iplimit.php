<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Iplimit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iplimit', function (Blueprint $table) {
            $table->increments('uid');
            $table->integer('ipaddr1')->nullable();
            $table->string('ipmask1',2)->nullable();
            $table->integer('ipaddr2')->nullable();
            $table->string('ipmask2',2)->nullable();
            $table->integer('ipaddr3')->nullable();
            $table->string('ipmask3',2)->nullable();
            $table->char('enable',1)->nullable();
            $table->char('lockstatus',1)->nullable();
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
