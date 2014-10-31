<?php

class BomitemController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /bomitem
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /bomitem/create
	 *
	 * @return Response
	 */
	public function create($id)
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /bomitem
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /bomitem/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editbahay($id)
	{
		
		$bahay = Modelhouse::where('id','=', $id)->get();
		$mason = Masonry::where('model_id' , '=' , $id)->get();
		$form = Formworks::where('model_id' , '=' , $id)->get();
		$bakal = Steel::where('model_id' , '=' , $id)->get();
		$carp = Carpentry::where('model_id' , '=' , $id)->get();
		$tin = Thinmistry::where('model_id' , '=' , $id)->get();
		$rus = Truss::where('model_id' , '=' , $id)->get();
		$hard = Hardware::where('model_id' , '=' , $id)->get();
		$elit = Tile::where('model_id' , '=' , $id)->get();
		$pinto = Door::where('model_id' , '=' , $id)->get();
		$elect = Electrical::where('model_id' , '=' , $id)->get();
		$plum = Plumbing::where('model_id' , '=' , $id)->get();
		$pintura = Paint::where('model_id' , '=' , $id)->get();
		return View::make('users.engineer.bomlist')->withModelhouse($bahay)->withMasonry($mason)->withFormworks($form)->withSteel($bakal)
		->withCarpentry($carp)->withThinmistry($tin)->withTruss($rus)->withHardware($hard)->withTile($elit)->withDoor($pinto)
		->withElectrical($elect)->withPlumbing($plum)->withPaint($pintura);
	}

	public function show($id)
	{
		
		$bahay = Modelhouse::where('id','=', $id)->get();
		$mason = Masonry::where('model_id' , '=' , $id)->get();
		$form = Formworks::where('model_id' , '=' , $id)->get();
		$bakal = Steel::where('model_id' , '=' , $id)->get();
		$carp = Carpentry::where('model_id' , '=' , $id)->get();
		$tin = Thinmistry::where('model_id' , '=' , $id)->get();
		$rus = Truss::where('model_id' , '=' , $id)->get();
		$hard = Hardware::where('model_id' , '=' , $id)->get();
		$elit = Tile::where('model_id' , '=' , $id)->get();
		$pinto = Door::where('model_id' , '=' , $id)->get();
		$elect = Electrical::where('model_id' , '=' , $id)->get();
		$plum = Plumbing::where('model_id' , '=' , $id)->get();
		$pintura = Paint::where('model_id' , '=' , $id)->get();
		return View::make('users.engineer.viewbahay')->withModelhouse($bahay)->withMasonry($mason)->withFormworks($form)->withSteel($bakal)
		->withCarpentry($carp)->withThinmistry($tin)->withTruss($rus)->withHardware($hard)->withTile($elit)->withDoor($pinto)
		->withElectrical($elect)->withPlumbing($plum)->withPaint($pintura);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /bomitem/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editbom($id)
	{
		$boms = Bomitem::where('id' , '=' , $id)->get();
		return View::make('users.engineer.changebom')->withBomitem($boms);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /bomitem/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$boms = Bomitem::find($id);
		$boms->itemdesc = Input::get('itemdesc');
		$boms->unitmeasure= Input::get('unitmeasure');
		$boms->unitprice = Input::get('unitprice');
		$saved = $boms->save();

		if ($saved)
		{
			return Redirect::to('engineer');
		}
		else
		{
			return 'not saved';
		}
		
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /bomitem/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$boms = Bomitem::find($id);

		$boms->delete();

		return Redirect::back();
	}

	public function showproj()
	{
		$jectpro = Project::all();
		return View::make('users.engineer.index')->withProject($jectpro);

	}
	public function showmod($id)
	{
		$house = Modelhouse::with('project')->where('project_id','=', $id)->get();
		
		return View::make('users.engineer.viewmod')->withModelhouse($house);

	}
	public function showbahay($id)
	{	
		$bahay = Modelhouse::where('id','=', $id)->get();
		$mason = Masonry::where('model_id' , '=' , $id)->get();
		$form = Formworks::where('model_id' , '=' , $id)->get();
		$bakal = Steel::where('model_id' , '=' , $id)->get();
		$carp = Carpentry::where('model_id' , '=' , $id)->get();
		$tin = Thinmistry::where('model_id' , '=' , $id)->get();
		$rus = Truss::where('model_id' , '=' , $id)->get();
		$hard = Hardware::where('model_id' , '=' , $id)->get();
		$elit = Tile::where('model_id' , '=' , $id)->get();
		$pinto = Door::where('model_id' , '=' , $id)->get();
		$elect = Electrical::where('model_id' , '=' , $id)->get();
		$plum = Plumbing::where('model_id' , '=' , $id)->get();
		$pintura = Paint::where('model_id' , '=' , $id)->get();
		return View::make('users.engineer.viewbahay')->withModelhouse($bahay)->withMasonry($mason)->withFormworks($form)->withSteel($bakal)
		->withCarpentry($carp)->withThinmistry($tin)->withTruss($rus)->withHardware($hard)->withTile($elit)->withDoor($pinto)
		->withElectrical($elect)->withPlumbing($plum)->withPaint($pintura);
	}
	

}