<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepcostformworksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repcostformworks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('formworksJanuary');
			$table->double('formworksFebruary');
			$table->double('formworksMarch');
			$table->double('formworksApril');
			$table->double('formworksMay');
			$table->double('formworksJune');
			$table->double('formworksJuly');
			$table->double('formworksAugust');
			$table->double('formworksSeptember');
			$table->double('formworksOctober');
			$table->double('formworksNovember');
			$table->double('formworksDecember');
			$table->double('formworksTotal');
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
		Schema::drop('repcostformworks');
	}

}
