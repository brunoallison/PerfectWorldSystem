<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUserWebsTable.
 */
class CreateUserWebsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_webs', function(Blueprint $table) {
            $table->increments('id');

            $table->string('login', 32);
            $table->string('email', 64);
            $table->string('nome', 32);
            $table->string('sobrenome', 32);
            $table->date('nascimento');
            $table->integer('sexo');
            $table->integer('gold');
            $table->string('senha', 64);
            $table->binary('avatar')->nullable();
            $table->string('token')->nullable();
            $table->boolean('actived')->default(false);
            $table->boolean('admin')->default(false);

            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_webs');
	}
}
