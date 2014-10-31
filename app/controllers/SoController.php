<?php

class SoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /so
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /so/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /so
	 *
	 * @return Response
	 */
	public function store()
	{
		$so = new So;
		$so->po_po = Input::get('po');
		$so->num = Input::get('so');
		$so->save();
		$num = $so->num;
		$po = $so->po_po;
		$query = array($po, $num);
		return Redirect::route('soitem', $query);
	}

	/**
	 * Display the specified resource.
	 * GET /so/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($po, $num)
	{
		$ponum = Po::where('po','=', $po)->get();
		$purchase = Item::where('po_po', '=', $po)->get();
		$sos = So::with('po')->where('num' , '=', $num)->get();


		return View::make('users.admin.soitem')->withSo($sos)
						->withPo($ponum)
						->withItem($purchase);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /so/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($po,$num,$id)
	{
		$invform = Item::find($id);

		$invform->delivered = Input::get('delivered');
		$invform->edit_this = $invform->edit_this-Input::get('delivered');
		$good = $invform->save();

		$check = Item::with('po')->where('edit_this','>',0)->where('po_po','=',Input::get('po'))->get();

		if(empty($check->count()))
		{
			$checked = Po::where('po','=',Input::get('po'))->get();
			foreach($checked as $done)
			{
						$done->complete = 1;
						$done->due_date = Carbon::now()->addDays($done->terms);
						$done->save();
			}
		}

		if ($good)
		{

			$iid = Input::get('invnum');
			$iname = Input::get('iname');

			$exid = Soitem::where('invnum', '=', $iid)->where('iname', '=', $iname)->where('idesc', '=', Input::get('idesc'))->get();
			if ($exid->count())
			{
				foreach($exid as $ex)
				{
					$ex->iqty = $ex->iqty + Input::get('delivered');
					$ok = $ex->save();

					if($ok)
					{
						return Redirect::back();
					}
				}
			}
			else
			{
			$inv = new InvItem;
			$inv->project_id = Input::get('projid');
			$inv->invName = Input::get('iname');
			$inv->idesc = Input::get('idesc');
			$inv->qty = Input::get('delivered');
			$inv->save();
			
			$num = new Soitem;
			$num->invnum = Input::get('invnum');
			$num->iname = Input::get('iname');
			$num->idesc = Input::get('idesc');
			$num->iprice = Input::get('iprice');
			$num->iqty = Input::get('delivered');
			$num->save();
					return Redirect::back();
			}				
		}

		else
		{
		return 'not saved';
		}
}		

	/**
	 * Update the specified resource in storage.
	 * PUT /so/{id}
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
	 * DELETE /so/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}