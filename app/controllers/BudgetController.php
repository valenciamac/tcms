<?php

class BudgetController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /budget
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /budget/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /budget
	 *
	 * @return Response
	 */
	public function store()
	{
		$budget = new Budget;
		$budget->addincome = Input::get('addincome');
		$budget->project_id = Input::get('projId');
		$budget->save();

		return Redirect::to('financing');
	}

	/**
	 * Display the specified resource.
	 * GET /budget/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */



	/**
	 * Show the form for editing the specified resource.
	 * GET /budget/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /budget/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /budget/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function showdate()
	{
		if ( $search = Request::get('search'))
		{
			$emp = Employee::search($search)->get();
		}
		else
		{
			$emp = Employee:: groupBY('paydate')->get();

		}
	
		return View::make('users.financing.totalpayroll')->withEmployee($emp);
	}
	public function editpaydate($paydate)
	{
		//$emp = Employee::where('paydate', '=', $paydate )->get();
		$tri = Payroll::with('employee')->where('paydate', '=', $paydate )->get();
		$date = Employee::where('paydate', '=' , $paydate)->groupBy('paydate')->get();
		return View::make('users.financing.payrollexpense')->withPayroll($tri)->withEmployee($date);
		
	}
	public function editpaydate2($paydate)
	{
		$tri = Payroll::with('employee')->where('paydate', '=', $paydate)->get();
		$date = Employee::where('paydate', '=', $paydate)->get();
		return View::make('users.financing.payrollpermonth')->withPayroll($tri)->with('rdate', $date->lists('paydate'))
			->with('rtri', $tri->lists('income'));
		// return 'YEHEY';
		
	}
}