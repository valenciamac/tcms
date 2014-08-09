<?php

class FinanceController extends \BaseController {

	
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /accounts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /accounts
	 *
	 * @return Response
	 */
	public function view()
	{
		// $income = new Income;
		// $income->clientName = Input::get('clientName');
		// $income->projectTitle= Input::get('projectTitle');
		// $income->siteSalaryTotal = Input::get('siteSalaryTotal');
		// $income->officeSalaryTotal= Input::get('officeSalaryTotal');
		// $income->priceOfMaterialsTotal= Input::get('priceOfMaterialsTotal');
		// $income->misc= Input::get('misc');
		// $income->expensesTotal= Input::get('expensesTotal');
		// $income->incomeTotal= Input::get('incomeTotal');

		// $income->save();

		// return View::make('users.financing.financialReports')->withIncome($income);
	}

	/**
	 * Display the specified resource.
	 * GET /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		if ( $search = Request::get('search'))
		{
			$incomes = Income::search($search)->paginate(6);
		}
		else
		{
			$incomes = Income::paginate(6);
		}
		
		return View::make('users.financing.financialReports')->withIncome($incomes);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function printShow()
	{
		
		$incomes = Income::all();
		
		return View::make('users.financing.printfr')->withIncome($incomes);
	}
	public function update()
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = Income::find($id);

		$user->delete();

		return Redirect::back();
	}


}
