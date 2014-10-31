<?php

class ThinmistryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /thinmistry
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /thinmistry/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /thinmistry
	 *
	 * @return Response
	 */
	public function store()
	{
		$thinmistry = new Thinmistry;
		$thinmistry->itemdesc = Input::get('itemdesc');
		$thinmistry->nopieces = Input::get('nopieces');
		$thinmistry->pending = Input::get('nopieces');
		$thinmistry->unitmeasure = Input::get('measure');
		$thinmistry->unitprice = Input::get('unitprice');
		$thinmistry->model_id = Input::get('modelId');
		$thinmistry->save();
		$id=$thinmistry->model_id;
		return Redirect::route('bomitem.show', ['model_id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /thinmistry/{id}
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
	 * GET /thinmistry/{id}/edit
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
	 * PUT /thinmistry/{id}
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
	 * DELETE /thinmistry/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}