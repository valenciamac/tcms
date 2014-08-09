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
			$table->double('incomeJanuary');
			$table->double('incomeFebruary');
			$table->double('incomeMarch');
			$table->double('incomeApril');
			$table->double('incomeMay');
			$table->double('incomeJune');
			$table->double('incomeJuly');
			$table->double('incomeAugust');
			$table->double('incomeSeptember');
			$table->double('incomeOctober');
			$table->double('incomeNovember');
			$table->double('incomeDecember');
			$table->double('incomeTotal');
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
