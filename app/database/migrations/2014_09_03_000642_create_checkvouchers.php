<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckvouchers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('checkvouchers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('checkno')->unique();
			$table->string('rfrom');
			$table->string('rpb');
			$table->string('prepared');
			$table->string('checked');
			$table->string('approved');
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
		Schema::drop('checkvouchers');
	}
}
