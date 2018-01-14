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
            $table->integer('uid')->default(0)
            ;
            $table->integer('ipaddr1')->default(0)->nullable();
            $table->string('ipmask1',2)->default('')->nullable();
            $table->integer('ipaddr2')->default(0)->nullable();
            $table->string('ipmask2',2)->default('')->nullable();
            $table->integer('ipaddr3')->default(0)->nullable();
            $table->string('ipmask3',2)->default('')->nullable();
            $table->char('enable',1)->default('')->nullable();
            $table->char('lockstatus',1)->default('')->nullable();
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
