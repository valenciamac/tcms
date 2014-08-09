<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepcostinhouseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repcostinhouse', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('inhouseJanuary');
			$table->double('inhouseFebruary');
			$table->double('inhouseMarch');
			$table->double('inhouseApril');
			$table->double('inhouseMay');
			$table->double('inhouseJune');
			$table->double('inhouseJuly');
			$table->double('inhouseAugust');
			$table->double('inhouseSeptember');
			$table->double('inhouseOctober');
			$table->double('inhouseNovember');
			$table->double('inhouseDecember');
			$table->double('inhouseTotal');
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
		Schema::drop('repcostinhouse');
	}

}
