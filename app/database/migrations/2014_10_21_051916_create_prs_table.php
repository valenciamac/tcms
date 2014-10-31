<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('prs');
			$table->integer('model_id')->unsigned();
			$table->integer('proj_id')->unsigned();
			$table->timestamps();
			
			$table->foreign('model_id')->references('id')->on('modelhouse')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('proj_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prs');
	}

}
