<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepIncomeFromContractsTotalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RepIncomeFromContractsTotal', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('year')->unsigned();
			$table->string('incomeTJanuary');
			$table->string('incomeTFebruary');
			$table->string('incomeTMarch');
			$table->string('incomeTApril');
			$table->string('incomeTMay');
			$table->string('incomeTJune');
			$table->string('incomeTJuly');
			$table->string('incomeTAugust');
			$table->string('incomeTSeptember');
			$table->string('incomeTOctober');
			$table->string('incomeTNovember');
			$table->string('incomeTDecember');
			$table->string('incomeTTotal');
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
		Schema::drop('RepIncomeFromContractsTotal');
	}

}
