<?php

class HardwareController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /hardware
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /hardware/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /hardware
	 *
	 * @return Response
	 */
	public function store()
	{
		$hardware = new Hardware;
		$hardware->itemdesc = Input::get('itemdesc');
		$hardware->nopieces = Input::get('nopieces');
		$hardware->pending = Input::get('nopieces');
		$hardware->unitmeasure = Input::get('measure');
		$hardware->unitprice = Input::get('unitprice');
		$hardware->model_id = Input::get('modelId');
		$hardware->save();
		$id=$hardware->model_id;
		return Redirect::route('bomitem.show', ['model_id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /hardware/{id}
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
	 * GET /hardware/{id}/edit
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
	 * PUT /hardware/{id}
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
	 * DELETE /hardware/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}