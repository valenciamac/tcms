<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCashitemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cashitem', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cashvouchers_checkno');
			$table->string('payee');
			$table->string('labor');
			$table->string('descr');
			$table->string('amount');
			$table->string('less');
			$table->string('acctitle');
			$table->string('acctitle2');
			$table->string('debit');
			$table->string('credit');
			$table->timestamps();

			$table->foreign('cashvouchers_checkno')->references('checkno')->on('cashvouchers')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cashitem');
	}

}
