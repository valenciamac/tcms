<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelhouseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modelhouse', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('modelName');
			$table->integer('project_id')->unsigned();
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
		Schema::drop('modelhouse');
	}

}
