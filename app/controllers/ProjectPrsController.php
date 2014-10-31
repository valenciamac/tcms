<?php

class ProjectPrsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /projectprs
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /projectprs/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /projectprs
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /projectprs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($mid , $id)
	{
		$delmo = Prs::where('id' , '=' , $id)->where('model_id' , '=' , $mid)->get();
		$moed = Modelhouse::find($mid);
		$mason = Masonry::where('model_id' , '=' , $mid)->get();
		$form = Formworks::where('model_id' , '=' , $mid)->get();
		$bakal = Steel::where('model_id' , '=' , $mid)->get();
		$carp = Carpentry::where('model_id' , '=' , $mid)->get();
		$tin = Thinmistry::where('model_id' , '=' , $mid)->get();
		$rus = Truss::where('model_id' , '=' , $mid)->get();
		$hard = Hardware::where('model_id' , '=' , $mid)->get();
		$elit = Tile::where('model_id' , '=' , $mid)->get();
		$pinto = Door::where('model_id' , '=' , $mid)->get();
		$elect = Electrical::where('model_id' , '=' , $mid)->get();
		$plum = Plumbing::where('model_id' , '=' , $mid)->get();
		$pintura = Paint::where('model_id' , '=' , $mid)->get();
		
		


		
		return View::make('users.engineer.createprs')->withModelhouse($delmo)->withMasonry($mason)->withFormworks($form)->withSteel($bakal)
		->withCarpentry($carp)->withThinmistry($tin)->withTruss($rus)->withHardware($hard)->withTile($elit)->withDoor($pinto)
		->withElectrical($elect)->withPlumbing($plum)->withPaint($pintura)->withMod($moed);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /projectprs/{id}/edit
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
	 * PUT /projectprs/{id}
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
	 * DELETE /projectprs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function showmodel($id)
	{
		$h = Modelhouse::with('project')->where('project_id','=', $id)->get();
		
		return View::make('users.engineer.model')->withModelhouse($h);
	}
	public function showprs($id)
	{

	}
	

}