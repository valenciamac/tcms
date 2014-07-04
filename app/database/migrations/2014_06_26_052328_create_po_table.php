<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('suppler_name');
			$table->string('prs');
			$table->string('po');
			$table->DATE('po_date');
			$table->string('address');
			$table->string('terms');
			$table->string('supplier_code');
			$table->string('deliverTo');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pos');
	}

}
