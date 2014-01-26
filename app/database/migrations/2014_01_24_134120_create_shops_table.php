<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shops', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('tagline');
			/*
			$table->string('tags');
			$table->longtext('content')->nullable();
			$table->string('street');
			$table->string('zip');
			$table->string('city');			
			$table->string('email')->nullable();
			$table->string('web')->nullable();
			$table->string('tel')->nullable();			
			$table->string('img')->nullable();
			*/
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
		Schema::drop('shops');
	}

}
