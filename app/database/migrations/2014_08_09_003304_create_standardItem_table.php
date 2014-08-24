<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStandardItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('standardItem', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sname');
			$table->integer('tempno')->unsigned();
			$table->timestamps();

			$table->foreign('tempno')->references('id')->on('templates')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('standardItem');
	}

}
