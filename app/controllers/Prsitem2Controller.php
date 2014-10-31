<?php

class Prsitem2Controller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /prsitem2
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /prsitem2/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /prsitem2
	 *
	 * @return Response
	 */
	public function store()
	{
		$good = false;
		$input = Input::all();
		for($i = 0; $i < count(Input::get('bakalid')); $i++) {
			$mason = Steel::find(Input::get('bakalid')[$i]);
			$mason->pending = $mason->pending - Input::get('limit')[$i];
			$good = $mason->save();
			echo Input::get('itemdesc')[$i];
			echo ' '.$good.' ';
				if (Input::get('limit')[$i] > 0) {
					
					Prsitem2::query()->insert(array(
							'itemdesc' => Input::get('itemdesc')[$i],
							'prs' => Input::get('prs')[$i],
							'nopieces' => Input::get('limit')[$i],
							'unitmeasure' => Input::get('unitmeasure')[$i],
							'unitprice' => Input::get('unitprice')[$i],
							'edit_this' => Input::get('limit')[$i]
				));
				}
			}
			
		
		return Redirect::back();
		die();	
	}

	/**
	 * Display the specified resource.
	 * GET /prsitem2/{id}
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
	 * GET /prsitem2/{id}/edit
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
	 * PUT /prsitem2/{id}
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
	 * DELETE /prsitem2/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}