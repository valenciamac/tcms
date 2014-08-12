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
			$table->double('costContractsTJanuary');
			$table->double('costContractsTFebruary');
			$table->double('costContractsTMarch');
			$table->double('costContractsTApril');
			$table->double('costContractsTMay');
			$table->double('costContractsTJune');
			$table->double('costContractsTJuly');
			$table->double('costContractsTAugust');
			$table->double('costContractsTSeptember');
			$table->double('costContractsTOctober');
			$table->double('costContractsTNovember');
			$table->double('costContractsTDecember');
			$table->double('costContractsTTotal');
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
