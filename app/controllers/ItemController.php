<?php

class ItemController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /item
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /item/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /item
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /item/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		if ( $search = Request::get('search'))
		{
			$product = Item::search($search)->paginate(5);
		}
		else
		{
			$product = Item::paginate(5);
		}
		

		return View::make('users.purchasing.view2')->withItem($product);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /item/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		{
		$product = Item::where('id', '=', $id)->get();

		return View::make('users.purchasing.edit2')->withItem($product);
	}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /item/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$product = Item::find($id);
		$product->po = Input::get('po');
		$product->qty= Input::get('qty');
		$product->name= Input::get('name');
		$product->desc= Input::get('desc');
		$product->price= Input::get('price');
		$product->amount= Input::get('amount');

		$saved = $product->save();

		if ($saved)
		{
			return Redirect::to('view2');
		}
		else
		{
			return 'not saved';
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /item/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$product = Item::find($id);

		$product->delete();

		return Redirect::back();
	}

}