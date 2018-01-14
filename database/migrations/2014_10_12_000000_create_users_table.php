<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->string('passwd', 64);
            $table->string('Prompt', 32);
            $table->string('answer', 32);
            $table->string('truename', 32);
            $table->string('idnumber', 32);
            $table->string('email', 64)->unique();
            $table->string('mobilenumber', 32);
            $table->string('province', 32);
            $table->string('city', 32);
            $table->string('phonenumber', 32);
            $table->string('anddress', 64);
            $table->string('postalcode', 8);
            $table->integer('gender');
            $table->date('birthday');
            $table->dateTime('creatime');
            $table->string('qq',32);
            $table->string('passwd2',64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
