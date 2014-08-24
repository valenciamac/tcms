<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepCostContractsTotalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RepCostContractsTotal', function(Blueprint $table)
		{
			$table->string('costContractsTJanuary');
			$table->string('costContractsTFebruary');
			$table->string('costContractsTMarch');
			$table->string('costContractsTApril');
			$table->string('costContractsTMay');
			$table->string('costContractsTJune');
			$table->string('costContractsTJuly');
			$table->string('costContractsTAugust');
			$table->string('costContractsTSeptember');
			$table->string('costContractsTOctober');
			$table->string('costContractsTNovember');
			$table->string('costContractsTDecember');
			$table->string('costContractsTTotal');
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
		Schema::drop('RepCostContractsTotal');
	}

}
