<?php

class ElectricalController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /electrical
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /electrical/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /electrical
	 *
	 * @return Response
	 */
	public function store()
	{
		$electrical = new Electrical;
		$electrical->itemdesc = Input::get('itemdesc');
		$electrical->nopieces = Input::get('nopieces');
		$electrical->pending = Input::get('nopieces');
		$electrical->unitmeasure = Input::get('measure');
		$electrical->unitprice = Input::get('unitprice');
		$electrical->model_id = Input::get('modelId');
		$electrical->save();
		$id=$electrical->model_id;
		return Redirect::route('bomitem.show', ['model_id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /electrical/{id}
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
	 * GET /electrical/{id}/edit
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
	 * PUT /electrical/{id}
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
	 * DELETE /electrical/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}