<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
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
            $table->integer('ID')->default(0);
            $table->string('name', 32)->default('');
            $table->string('passwd', 64);
            $table->string('Prompt', 32)->default('');
            $table->string('answer', 32)->default('');
            $table->string('truename', 32)->default('');
            $table->string('idnumber', 32)->default('');
            $table->string('email', 64)->default('')->unique();
            $table->string('mobilenumber', 32)->default('')->nullable();
            $table->string('province', 32)->default('')->nullable();
            $table->string('city', 32)->default('')->nullable();
            $table->string('phonenumber', 32)->default('')->nullable();
            $table->string('anddress', 64)->default('')->nullable();
            $table->string('postalcode', 8)->default('')->nullable();
            $table->integer('gender')->default(0)->nullable();
            $table->date('birthday')->nullable();
            $table->dateTime('creatime');
            $table->string('qq', 32)->default('')->nullable();
            $table->string('passwd2', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
