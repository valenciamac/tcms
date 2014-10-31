<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhcontrTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phcontr', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('salbracket');
			$table->string('salmin');
			$table->string('salmax');
			$table->float('salbase');
			$table->float('tmp');
			$table->float('empeeshare');
			$table->float('empershare');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('phcontr');
	}

}
