<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admin extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('admin', function(Blueprint $table){
			$table->increments('id');
			$table->string('username', 30);
			$table->string('password', 64);
			$table->string('nim', 10);
			$table->string('namaLengkap', 30);
			$table->string('angkatan', 4);
			$table->string('remember_token', 100)->nullable();
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
		//
		Schema::drop('admin');
	}


}
