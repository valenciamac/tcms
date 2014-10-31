<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventoryDescTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventoryDesc', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('inv_item_id')->unsigned();
			$table->string('invDesc');
			$table->integer('stock');
			$table->timestamps();

			$table->foreign('inv_item_id')->references('id')->on('inventoryItems')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inventoryDesc');
	}

}
