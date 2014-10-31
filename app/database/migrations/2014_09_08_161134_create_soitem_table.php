<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoitemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('soitem', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('invnum');
			$table->string('iname');
			$table->string('idesc');
			$table->float('iprice');
			$table->integer('iqty');
			$table->timestamps();

			$table->foreign('invnum')->references('num')->on('so')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('soitem');
	}

}
