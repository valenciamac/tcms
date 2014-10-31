<?php

class PlumbingItemController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /plumbingitem
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /plumbingitem/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /plumbingitem
	 *
	 * @return Response
	 */
	public function store()
	{
		$product = new PrsItem;
		$product->prs = Input::get('prs');
		$product->iname= Input::get('iname');
		$product->qty= Input::get('qty');
		$product->unit= Input::get('unit');
		$product->price= Input::get('price');
		$product->save();

		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /plumbingitem/{id}
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
	 * GET /plumbingitem/{id}/edit
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
	 * PUT /plumbingitem/{id}
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
	 * DELETE /plumbingitem/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}