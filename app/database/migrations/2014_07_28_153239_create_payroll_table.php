<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayrollTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payroll', function(Blueprint $table)
		{
			$table->increments('id');
			$table->DATE('paydate');
			$table->DATE('paydateend');
			$table->float('wtax');
			$table->float('lateunder');
			$table->float('ssscont');
			$table->float('absent');
			$table->float('phcont');
			$table->float('regotpay');
			$table->float('pagibigcont');
			$table->float('regholdpay');
			$table->float('sssloan');
			$table->float('regholdotpay');
			$table->float('pagibigloan');
			$table->float('restpay');
			$table->float('cashadv');
			$table->float('specholdpay');
			$table->float('income');
			$table->integer('employee_id')->unsigned();

			$table->foreign('employee_id')->references('id')->on('employee')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
public function down()
	{
		Schema::drop('payroll');
	}

}
