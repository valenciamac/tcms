<?php

class PlumbingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /plumbing
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /plumbing/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /plumbing
	 *
	 * @return Response
	 */
	public function store()
	{
		$plumbing = new Plumbing;
		$plumbing->itemdesc = Input::get('itemdesc');
		$plumbing->nopieces = Input::get('nopieces');
		$plumbing->pending = Input::get('nopieces');
		$plumbing->unitmeasure = Input::get('measure');
		$plumbing->unitprice = Input::get('unitprice');
		$plumbing->model_id = Input::get('modelId');
		$plumbing->save();
		$id=$plumbing->model_id;
		return Redirect::route('bomitem.show', ['model_id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /plumbing/{id}
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
	 * GET /plumbing/{id}/edit
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
	 * PUT /plumbing/{id}
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
	 * DELETE /plumbing/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}