<?php

class FormworksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /formworks
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /formworks/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /formworks
	 *
	 * @return Response
	 */
	public function store()
	{
		$formworks = new Formworks;
		$formworks->itemdesc = Input::get('itemdesc');
		$formworks->nopieces = Input::get('nopieces');
		$formworks->pending = Input::get('nopieces');
		$formworks->unitmeasure = Input::get('measure');
		$formworks->unitprice = Input::get('unitprice');
		$formworks->model_id = Input::get('modelId');
		$formworks->save();
		$id=$formworks->model_id;
		return Redirect::route('bomitem.show', ['model_id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /formworks/{id}
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
	 * GET /formworks/{id}/edit
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
	 * PUT /formworks/{id}
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
	 * DELETE /formworks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}