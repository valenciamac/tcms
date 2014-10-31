<?php

class Prsitem8Controller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /prsitem8
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /prsitem8/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /prsitem8
	 *
	 * @return Response
	 */
	public function store()
	{
		$good = false;
		$input = Input::all();
		for($i = 0; $i < count(Input::get('pintoid')); $i++) {
			$mason = Door::find(Input::get('pintoid')[$i]);
			$mason->pending = $mason->pending - Input::get('limit')[$i];
			$good = $mason->save();
			echo Input::get('itemdesc')[$i];
			echo ' '.$good.' ';
				if (Input::get('limit')[$i] > 0) {
					
					Prsitem8::query()->insert(array(
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
	 * GET /prsitem8/{id}
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
	 * GET /prsitem8/{id}/edit
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
	 * PUT /prsitem8/{id}
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
	 * DELETE /prsitem8/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}