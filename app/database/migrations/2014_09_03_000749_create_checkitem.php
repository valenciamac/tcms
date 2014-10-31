<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckitem extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('checkitem', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('checkvouchers_checkno');
			$table->integer('po_po')->unsigned();
			$table->string('check');
			$table->string('checkdate');
			$table->string('amount');
			$table->string('project');
			$table->string('payee');
			$table->string('bank');
			$table->string('acctitle1');
			$table->string('acctitle2');
			$table->string('debit');
			$table->string('credit');
			$table->timestamps();

			
			$table->foreign('checkvouchers_checkno')->references('checkno')->on('checkvouchers')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('po_po')->references('id')->on('pos')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('checkitem');
	}
}

