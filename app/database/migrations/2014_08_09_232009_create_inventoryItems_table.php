<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventoryItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventoryItems', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id')->unsigned();
			$table->string('invName');
			$table->timestamps();

			$table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inventoryItems');
	}

}
