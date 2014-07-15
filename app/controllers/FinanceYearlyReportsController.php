<?php

class FinanceYearlyReportsController extends \BaseController {

	public function annual()
	{

		$annual = FinanceYearlyReports::all();

		return View::make('users.financing.yearlyGraph')
			->with('raYear', $annual->lists('year'))
			->with('raIncome', $annual->lists('income'))
			->with('raExpenses', $annual->lists('expenses'));

	}

}
