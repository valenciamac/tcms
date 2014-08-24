<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepIncomeFromContractsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repIncomeFromContracts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('contractTitle');
			$table->string('incomeJanuary');
			$table->string('incomeFebruary');
			$table->string('incomeMarch');
			$table->string('incomeApril');
			$table->string('incomeMay');
			$table->string('incomeJune');
			$table->string('incomeJuly');
			$table->string('incomeAugust');
			$table->string('incomeSeptember');
			$table->string('incomeOctober');
			$table->string('incomeNovember');
			$table->string('incomeDecember');
			$table->string('incomeTotal');
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
		Schema::drop('repIncomeFromContracts');
	}

}
