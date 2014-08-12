<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStandardDescTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('standardDesc', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('standard_item_id')->unsigned();
			$table->string('sdesc');
			$table->timestamps();

			$table->foreign('standard_item_id')->references('id')->on('standardItem')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('standardDesc');
	}

}
