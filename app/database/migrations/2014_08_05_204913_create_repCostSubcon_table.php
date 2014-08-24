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
			$table->string('subconJanuary');
			$table->string('subconFebruary');
			$table->string('subconMarch');
			$table->string('subconApril');
			$table->string('subconMay');
			$table->string('subconJune');
			$table->string('subconJuly');
			$table->string('subconAugust');
			$table->string('subconSeptember');
			$table->string('subconOctober');
			$table->string('subconNovember');
			$table->string('subconDecember');
			$table->string('subconTotal');
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
