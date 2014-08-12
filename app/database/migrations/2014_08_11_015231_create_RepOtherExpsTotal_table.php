<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepOtherExpsTotalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RepOtherExpsTotal', function(Blueprint $table)
		{
			$table->double('otherExpsTJanuary');
			$table->double('otherExpsTFebruary');
			$table->double('otherExpsTMarch');
			$table->double('otherExpsTApril');
			$table->double('otherExpsTMay');
			$table->double('otherExpsTJune');
			$table->double('otherExpsTJuly');
			$table->double('otherExpsTAugust');
			$table->double('otherExpsTSeptember');
			$table->double('otherExpsTOctober');
			$table->double('otherExpsTNovember');
			$table->double('otherExpsTDecember');
			$table->double('otherExpsTTotal');
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
		Schema::drop('RepOtherExpsTotal');
	}

}
