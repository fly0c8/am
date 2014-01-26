<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shop_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id');
			$table->integer('shop_id');
			$table->timestamps();
			$table->foreign('category_id')
				->references('id')
				->on('categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shop_categories');
	}

}
