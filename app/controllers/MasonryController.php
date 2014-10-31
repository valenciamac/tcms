<?php

class MasonryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /masonry
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /masonry/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /masonry
	 *
	 * @return Response
	 */
	public function store()
	{
		$masonry = new Masonry;
		$masonry->itemdesc = Input::get('itemdesc');
		$masonry->nopieces = Input::get('nopieces');
		$masonry->pending = Input::get('nopieces');
		$masonry->unitmeasure = Input::get('measure');
		$masonry->unitprice = Input::get('unitprice');
		$masonry->model_id = Input::get('modelId');
		$masonry->save();
		$id=$masonry->model_id;
		return Redirect::route('bomitem.show', ['model_id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /masonry/{id}
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
	 * GET /masonry/{id}/edit
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
	 * PUT /masonry/{id}
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
	 * DELETE /masonry/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}