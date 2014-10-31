<?php

class DoorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /door
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /door/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /door
	 *
	 * @return Response
	 */
	public function store()
	{
		$door = new Door;
		$door->itemdesc = Input::get('itemdesc');
		$door->nopieces = Input::get('nopieces');
		$door->pending = Input::get('nopieces');
		$door->unitmeasure = Input::get('measure');
		$door->unitprice = Input::get('unitprice');
		$door->model_id = Input::get('modelId');
		$door->save();
		$id=$door->model_id;
		return Redirect::route('bomitem.show', ['model_id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /door/{id}
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
	 * GET /door/{id}/edit
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
	 * PUT /door/{id}
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
	 * DELETE /door/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}