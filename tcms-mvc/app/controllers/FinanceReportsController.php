<?php

class FinanceReportsController extends \BaseController {

	public function monthly()
	{

		$monthly = FinanceReports::all();

		return View::make('users.financing.monthlyGraph')
			->with('rMonth', $monthly->lists('month'))
			->with('rIncome', $monthly->lists('income'))
			->with('rExpenses', $monthly->lists('expenses'));

	}

}
