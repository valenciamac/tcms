<?php

class CompanyIncomeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /companyincome
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /companyincome/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$in = Comein::find(1);
		$comp = CompanyIncome::get();
		$cool = Project::all();
		$bonj = Budget::all();
		$pay = Payroll::all();
		return View::make('users.financing.index')->withIn($in)->withCompanyincome($comp)->withProject($cool)->withBudget($bonj)->withPayroll($pay);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /companyincome
	 *
	 * @return Response
	 */
	public function store()
	{
		$company = new CompanyIncome;
		$company->company_income= Input::get('company_income');
		$company->reason = Input::get('reason');;
		$company->save();

		$out = Comein::find(1);
		$out->income = $out->income+$company->company_income;
		$out->save();
		return Redirect::to('financing');
	}

	/**
	 * Display the specified resource.
	 * GET /companyincome/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /companyincome/{id}/edit
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
	 * PUT /companyincome/{id}
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
	 * DELETE /companyincome/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}