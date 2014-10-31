<?php

class TileController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tile
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tile/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tile
	 *
	 * @return Response
	 */
	public function store()
	{
		$tile = new Tile;
		$tile->itemdesc = Input::get('itemdesc');
		$tile->nopieces = Input::get('nopieces');
		$tile->pending = Input::get('nopieces');
		$tile->unitmeasure = Input::get('measure');
		$tile->unitprice = Input::get('unitprice');
		$tile->model_id = Input::get('modelId');
		$tile->save();
		$id=$tile->model_id;
		return Redirect::route('bomitem.show', ['model_id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /tile/{id}
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
	 * GET /tile/{id}/edit
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
	 * PUT /tile/{id}
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
	 * DELETE /tile/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}