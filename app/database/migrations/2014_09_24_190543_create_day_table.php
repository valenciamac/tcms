<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDayTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('day', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('days');
			$table->integer('employee_id')->unsigned();
			$table->timestamps();
			$table->foreign('employee_id')->references('id')->on('employee')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('day');
	}

}
