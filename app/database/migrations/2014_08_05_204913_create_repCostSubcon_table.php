<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepCostSubconTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repCostSubcon', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('subconJanuary');
			$table->double('subconFebruary');
			$table->double('subconMarch');
			$table->double('subconApril');
			$table->double('subconMay');
			$table->double('subconJune');
			$table->double('subconJuly');
			$table->double('subconAugust');
			$table->double('subconSeptember');
			$table->double('subconOctober');
			$table->double('subconNovember');
			$table->double('subconDecember');
			$table->double('subconTotal');
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
		Schema::drop('repCostSubcon');
	}

}
