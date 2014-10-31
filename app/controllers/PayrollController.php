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
		$payroll->lateunder = Input::get("lateunder");
		$payroll->paydate = Input::get("paydate");
		$payroll->paydateend = Input::get('paydateend');
		$payroll->ssscont = Input::get("ssscont");
		$payroll->absent = Input::get("absent");
		$payroll->phcont = Input::get("phcont");
		$payroll->regotpay = Input::get("regotpay");
		$payroll->pgibigcont = Input::get("pgibigcont");
		$payroll->regholdpay = Input::get("regholdpay");
		$payroll->regholdotpay = Input::get("regholdotpay");
		$payroll->restpay = Input::get("restpay");
		$payroll->advance = Input::get("advance");
		$payroll->specholdpay = Input::get("specholdpay");
		$payroll->restspecial = Input::get("restspecial");
		$payroll->restreg = Input::get("restreg");
		$payroll->gross = Input::get("gross");
		$payroll->income = Input::get("income");
		$payroll->employee_id = Input::get("empId");
		$employee = Employee::find(Input::get("empId"));
		$employee->paydate = Input::get("paydateend");
		$day= new Day;
		$day->days=Input::get("days");
		$day->employee_id=Input::get("empId");
		$day->save();
		$payroll->save();
		$employee->save();

		$out = Comein::find(1);
		$out->income = $out->income-$payroll->income;
		$out->save();
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