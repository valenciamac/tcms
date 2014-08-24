<?php

class FinanceYearlyController extends \BaseController {

	public function annual()
	{

		$annual = FinanceYearly::all();

		return View::make('users.financing.yearlyGraph')
			->with('raYear', $annual->lists('year'))
			->with('raIncome', $annual->lists('income'))
			->with('raExpenses', $annual->lists('expenses'));

	}

	public function refresh()
	{
		$yearCreated = DB::table('repincomefromcontractstotal')
										->orderBy('created_at')
										->first();

		DB::table('financeyearly')->truncate();

        DB::table('financeyearly')->insert(
                array(
                        array(
                        		'year' => '2010',
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'year' => '2011',
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'year' => '2012',
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                        array(
                        		'year' => '2013',
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),
                        ),
                ));

		return Redirect::to('yearlyGraph');
	}

}
