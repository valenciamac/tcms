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
			$table->integer('employee_id')->unsigned();
			$table->DATE('paydate');
			$table->DATE('paydateend');
			$table->float('lateunder');
			$table->float('ssscont');
			$table->float('absent');
			$table->float('phcont');
			$table->float('regotpay');
			$table->float('pgibigcont');
			$table->float('regholdpay');
			$table->float('regholdotpay');
			$table->float('restpay');
			$table->float('restreg');
			$table->float('restspecial');
			$table->float('advance');
			$table->float('specholdpay');
			$table->float('gross');
			$table->float('income');
			$table->timestamps();

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
