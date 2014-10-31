<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabor extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('labor', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('labor')->unique();
			$table->integer('employee_id')->unsigned();
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
		Schema::drop('labor');
	}

}
