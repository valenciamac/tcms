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
			$table->string('formworksJanuary');
			$table->string('formworksFebruary');
			$table->string('formworksMarch');
			$table->string('formworksApril');
			$table->string('formworksMay');
			$table->string('formworksJune');
			$table->string('formworksJuly');
			$table->string('formworksAugust');
			$table->string('formworksSeptember');
			$table->string('formworksOctober');
			$table->string('formworksNovember');
			$table->string('formworksDecember');
			$table->string('formworksTotal');
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
