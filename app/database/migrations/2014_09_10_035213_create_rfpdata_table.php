<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRfpdataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rfpdata', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('rfpno')->unsigned();
			$table->integer('po');
			$table->string('si');
			$table->string('ci');
			$table->string('dr');
			$table->string('so');
			$table->string('others');
			$table->string('ms');
			$table->float('amount');
			$table->timestamps();

			$table->foreign('rfpno')->references('id')->on('rfp')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rfpdata');
	}

}
