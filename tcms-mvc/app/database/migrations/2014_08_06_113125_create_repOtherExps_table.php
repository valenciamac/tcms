<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepOtherExpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repOtherExps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('otherExpsTitle');
			$table->double('otherExpsJanuary');
			$table->double('otherExpsFebruary');
			$table->double('otherExpsMarch');
			$table->double('otherExpsApril');
			$table->double('otherExpsMay');
			$table->double('otherExpsJune');
			$table->double('otherExpsJuly');
			$table->double('otherExpsAugust');
			$table->double('otherExpsSeptember');
			$table->double('otherExpsOctober');
			$table->double('otherExpsNovember');
			$table->double('otherExpsDecember');
			$table->double('otherExpsTotal');
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
		Schema::drop('repOtherExps');
	}

}
