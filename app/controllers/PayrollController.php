<?php

class PayrollController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /payroll
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /payroll/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /payroll
	 *
	 * @return Response
	 */
	public function store()
	{
		$payroll = new Payroll;
		$payroll->paydate = Input::get("paydate");
		$payroll->wtax = Input::get("wtax");
		$payroll->lateunder = Input::get("lateunder");
		$payroll->ssscont = Input::get("ssscont");
		$payroll->absent = Input::get("absent");
		$payroll->phcont = Input::get("phcont");
		$payroll->regotpay = Input::get("regotpay");
		$payroll->pagibigcont = Input::get("pagibigcont");
		$payroll->regholdpay = Input::get("regholdpay");
		$payroll->sssloan = Input::get("sssloan");
		$payroll->regholdotpay = Input::get("regholdotpay");
		$payroll->pagibigloan = Input::get("pagibigloan");
		$payroll->restpay = Input::get("restpay");
		$payroll->cashadv = Input::get("cashadv");
		$payroll->specholdpay = Input::get("specholdpay");
		$payroll->income = Input::get("income");
		$payroll->employee_id = Input::get("empId");
		$payroll->save();
		return Redirect::to('viewpay');
	}

	/**
	 * Display the specified resource.
	 * GET /payroll/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		
	}


	/**
	 * Show the form for editing the specified resource.
	 * GET /payroll/{id}/edit
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
	 * PUT /payroll/{id}
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
	 * DELETE /payroll/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}