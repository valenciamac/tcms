<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDritemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dritem', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('invnum');
			$table->string('iname');
			$table->string('idesc');
			$table->float('iprice');
			$table->integer('iqty');
			$table->timestamps();

			$table->foreign('invnum')->references('num')->on('dr')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dritem');
	}

}
