<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepcosttruckingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repcosttrucking', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('truckingJanuary');
			$table->string('truckingFebruary');
			$table->string('truckingMarch');
			$table->string('truckingApril');
			$table->string('truckingMay');
			$table->string('truckingJune');
			$table->string('truckingJuly');
			$table->string('truckingAugust');
			$table->string('truckingSeptember');
			$table->string('truckingOctober');
			$table->string('truckingNovember');
			$table->string('truckingDecember');
			$table->string('truckingTotal');
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
		Schema::drop('repcosttrucking');
	}

}
