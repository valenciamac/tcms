<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddEditToPrsitemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('prsitem', function(Blueprint $table)
		{
			$table->integer('edit_this');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('prsitem', function(Blueprint $table)
		{
			$table->dropColumn('edit_this');
		});
	}

}
