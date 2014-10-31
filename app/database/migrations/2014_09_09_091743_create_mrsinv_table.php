<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMrsinvTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mrsinv', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('mrsnum')->unsigned();
			$table->string('invName');
			$table->string('idesc');
			$table->integer('qty');
			$table->timestamps();

			$table->foreign('mrsnum')->references('id')->on('mrs')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mrsinv');
	}

}
