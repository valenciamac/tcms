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
			$table->double('truckingJanuary');
			$table->double('truckingFebruary');
			$table->double('truckingMarch');
			$table->double('truckingApril');
			$table->double('truckingMay');
			$table->double('truckingJune');
			$table->double('truckingJuly');
			$table->double('truckingAugust');
			$table->double('truckingSeptember');
			$table->double('truckingOctober');
			$table->double('truckingNovember');
			$table->double('truckingDecember');
			$table->double('truckingTotal');
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
