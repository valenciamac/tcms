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
			$table->double('incomeTJanuary');
			$table->double('incomeTFebruary');
			$table->double('incomeTMarch');
			$table->double('incomeTApril');
			$table->double('incomeTMay');
			$table->double('incomeTJune');
			$table->double('incomeTJuly');
			$table->double('incomeTAugust');
			$table->double('incomeTSeptember');
			$table->double('incomeTOctober');
			$table->double('incomeTNovember');
			$table->double('incomeTDecember');
			$table->double('incomeTTotal');
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
