<?php

class TrussController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /truss
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /truss/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /truss
	 *
	 * @return Response
	 */
	public function store()
	{
		$truss = new truss;
		$truss->itemdesc = Input::get('itemdesc');
		$truss->nopieces = Input::get('nopieces');
		$truss->pending = Input::get('nopieces');
		$truss->unitmeasure = Input::get('measure');
		$truss->unitprice = Input::get('unitprice');
		$truss->model_id = Input::get('modelId');
		$truss->save();
		$id=$truss->model_id;
		return Redirect::route('bomitem.show', ['model_id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /truss/{id}
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
	 * GET /truss/{id}/edit
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
	 * PUT /truss/{id}
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
	 * DELETE /truss/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}