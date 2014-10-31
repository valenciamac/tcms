<?php

class PrsitemController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /prsitem
	 *
	 * @return Response
	 */
	public function index()
	{
		// $prsitem = Masonry::with('Formworks')->all();

		// return View::make('users.engineer.addprsitem')->with('prsitem', $prsitem);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /prsitem/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /prsitem
	 *
	 * @return Response
	 */
	public function store()
	{
		$good = false;
		$input = Input::all();
		for($i = 0; $i < count(Input::get('masonryid')); $i++) {
			$mason = Masonry::find(Input::get('masonryid')[$i]);
			$mason->pending = $mason->pending - Input::get('limit')[$i];
			$good = $mason->save();
			echo Input::get('itemdesc')[$i];
			echo ' '.$good.' ';
				if (Input::get('limit')[$i] > 0) {
					
					Prsitem::query()->insert(array(
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
	 * GET /prsitem/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// $prsitem = PrsItem::with('masonry')->with('formworks')->with('steel')->with('carpentry')
		// 			->with('thinmistry')->with('truss')->with('hardware')->with('tile')
		// 			->with('door')->with('electrical')->with('plumbing')->with('paint')
		// 			->where('id' , '=', $id)->get();

		$masonry = Masonry::where('model_id' , '=', $id)->get();
		$formworks = Formworks::where('model_id' , '=', $id)->get();
		$steel = Steel::where('model_id' , '=', $id)->get();
		$carpentry = Carpentry::where('model_id' , '=', $id)->get();
		$thinmistry = Thinmistry::where('model_id' , '=', $id)->get();
		$truss = Truss::where('model_id' , '=', $id)->get();
		$hardware = Hardware::where('model_id' , '=', $id)->get();
		$tile = Tile::where('model_id' , '=', $id)->get();
		$door = Door::where('model_id' , '=', $id)->get();
		$electrical = Electrical::where('model_id' , '=', $id)->get();
		$plumbing = Plumbing::where('model_id' , '=', $id)->get();
		$paint = Paint::where('model_id' , '=', $id)->get();

		return View::make('users.engineer.addprsitem')->with('masonry', $masonry)->with('formworks', $formworks)
						->with('steel', $steel)->with('carpentry', $carpentry)->with('thinmistry', $thinmistry)
						->with('truss', $truss)->with('hardware', $hardware)->with('tile', $tile)->with('door',$door)
						->with('electrical',$electrical)->with('plumbing', $plumbing)->with('paint', $paint);

		// $addprs = Prs::where('id', '=', $id)->get();

		// $items = Prsitem::where('prs', '=', $id)->get();

		// return View::make('users.engineer.addprsitem')->withPrs($addprs)->withPrsitem($items);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /prsitem/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = PrsItem::find($id);
		$product->prs = Input::get('prs');
		$product->iname= Input::get('iname');
		$product->qty= Input::get('qty');
		$product->unit= Input::get('unit');
		$product->price= Input::get('price');
		$product->save();

		$a = Masonry::find(Input::get('id'));
		$a->edit_this = Input::get('edit_thisa');
		$saved = $a->save();

		$b = Formworks::find(Input::get('id'));
		$b->edit_this = Input::get('edit_thisb');
		$saved = $b->save();

		return Redirect::back();
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /prsitem/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($prs)
	{
		$additem = Po::with('project')->where('prs', '=', $prs)->get();
		
		return View::make('users.purchasing.viewprspo')->withPo($additem);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /prsitem/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($prs)
	{
		$product = PrsItem::find($prs);

		$product->delete();

			$activity = new Activity;
			$activity->user_id = Auth::user()->id;
			$activity->action = 'deleted an item';
			$activity->identifier = $product->iname;
			$activity->save();


		return Redirect::back();
	}

}