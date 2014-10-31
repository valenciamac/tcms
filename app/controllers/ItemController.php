
<?php
use Carbon\Carbon;
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
		$good = false;
		$input = Input::all();
		for($i = 0; $i < count(Input::get('id')); $i++) 
		{
			if (Input::get('qty')[$i] > 0) {

				$pitem = Prsitem::find(Input::get('id')[$i]);
				$pitem->edit_this = $pitem->edit_this - Input::get('qty')[$i];
				$saved = $pitem->save();
				
				Item::query()->insert(array(
				'iname' => Input::get('iname')[$i],
				'po_po' => Input::get('po_po')[$i],
				'desc' => Input::get('iunit')[$i],
				'price' => Input::get('iprice')[$i],
				'qty' => Input::get('qty')[$i],
				'edit_this' => Input::get('qty')[$i],
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
				));
				}
			}
		
	
	return Redirect::back();
	
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /item
	 *
	 * @return Response
	 */
	public function store()
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
	 * Display the specified resource.
	 * GET /item/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($po, $prs)
	{
		$additem = Po::with('Project')->where('id', '=', $po)->get();

		$items = Item::where('po_po', '=', $po)->get();
		$pitem = Prsitem::where('prs','=',$prs)->get();

		return View::make('users.purchasing.additem')->withPo($additem)->withItem($items)->withPrsitem($pitem);
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
		$product = Item::where('id', '=', $id)->get();

		return View::make('users.purchasing.edit2')->withItem($product);
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
		$product->edit_this= Input::get('qty');
		$product->name= Input::get('name');
		$product->desc= Input::get('desc');
		$product->price= Input::get('price');
		$product->amount= Input::get('amount');

		$saved = $product->save();

		if ($saved)
		{
			$activity = new Activity;
			$activity->user_id = Auth::user()->id;
			$activity->action = 'edited an item';
			$activity->identifier = Input::get('name');
			$activity->save();

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

			$activity = new Activity;
			$activity->user_id = Auth::user()->id;
			$activity->action = 'deleted an item';
			$activity->identifier = $product->name;
			$activity->save();


		return Redirect::back();
	}

}