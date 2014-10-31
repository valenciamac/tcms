<?php

class SteelController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /steel
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /steel/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /steel
	 *
	 * @return Response
	 */
	public function store()
	{
		$steel = new Steel;
		$steel->itemdesc = Input::get('itemdesc');
		$steel->nopieces = Input::get('nopieces');
		$steel->pending = Input::get('nopieces');
		$steel->unitmeasure = Input::get('measure');
		$steel->unitprice = Input::get('unitprice');
		$steel->model_id = Input::get('modelId');
		$steel->save();
		$id=$steel->model_id;
		return Redirect::route('bomitem.show', ['model_id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /steel/{id}
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
	 * GET /steel/{id}/edit
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
	 * PUT /steel/{id}
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
	 * DELETE /steel/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}