<?php

class PaintController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /paint
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /paint/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /paint
	 *
	 * @return Response
	 */
	public function store()
	{
		$paint = new Paint;
		$paint->itemdesc = Input::get('itemdesc');
		$paint->nopieces = Input::get('nopieces');
		$paint->pending = Input::get('nopieces');
		$paint->unitmeasure = Input::get('measure');
		$paint->unitprice = Input::get('unitprice');
		$paint->model_id = Input::get('modelId');
		$paint->save();
		$id=$paint->model_id;
		return Redirect::route('bomitem.show', ['model_id' => $id]);
	}

	/**
	 * Display the specified resource.
	 * GET /paint/{id}
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
	 * GET /paint/{id}/edit
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
	 * PUT /paint/{id}
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
	 * DELETE /paint/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}