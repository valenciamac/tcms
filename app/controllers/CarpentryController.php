<?php

class CarpentryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /carpentry
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /carpentry/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /carpentry
	 *
	 * @return Response
	 */
	public function store()
	{
		$carpentry = new Carpentry;
		$carpentry->itemdesc = Input::get('itemdesc');
		$carpentry->nopieces = Input::get('nopieces');
		$carpentry->pending = Input::get('nopieces');
		$carpentry->unitmeasure = Input::get('measure');
		$carpentry->unitprice = Input::get('unitprice');
		$carpentry->model_id = Input::get('modelId');
		$carpentry->save();
		$id=$carpentry->model_id;
		return Redirect::route('bomitem.show', ['model_id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /carpentry/{id}
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
	 * GET /carpentry/{id}/edit
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
	 * PUT /carpentry/{id}
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
	 * DELETE /carpentry/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}