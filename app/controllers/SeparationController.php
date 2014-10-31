<?php

class SeparationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /separation
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /separation/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /separation
	 *
	 * @return Response
	 */
	public function store()
	{
		$separation = new Separation;
		$separation->days_work=Input::get("days_work");
		$separation->reason=Input::get("reason");
		$separation->amtpay=Input::get("amtpay");
		$separation->sepdate=Input::get("sepdate");
		$separation->firstN=Input::get("firstN");
		$separation->lastN=Input::get("lastN");
		$separation->employee_id=Input::get("employee_id");
		$separation->save();
		$employee = Employee::find(Input::get("employee_id"));
		
		$employee->delete();
		$employee2 = Employ::find(Input::get("employee_id"));
		$employee2->sepdate = Input::get("sepdate");
		$employee2->save();

		$out = Comein::find(1);
		$out->income = $out->income-$separation->amtpay;
		$out->save();
		return Redirect::to('viewpay');
	}

	/**
	 * Display the specified resource.
	 * GET /separation/{id}
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
	 * GET /separation/{id}/edit
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
	 * PUT /separation/{id}
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
	 * DELETE /separation/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}