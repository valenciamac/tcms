<?php

class InvoiceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /accounts
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /accounts/create
	 *
	 * @return Response
	 */
	public function create($po)
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /accounts
	 *
	 * @return Response
	 */
	public function store()
	{
		return 'yehey';
	}

	/**
	 * Display the specified resource.
	 * GET /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($po)
	{
		$ponum = Po::where('id','=', $po)->get();
		$si = Si::with('po')->where('po_po', $po)->get();
		$ci = Ci::with('po')->where('po_po', $po)->get();
		$dr = Dr::with('po')->where('po_po', $po)->get();
		$so = So::with('po')->where('po_po', $po)->get();

		$purchase = Item::where('po_po', '=', $po)->get(); 
		
		return View::make('users.admin.invoice')->withItem($purchase)->withPo($ponum)
					->withSi($si)
					->withCi($ci)
					->withDr($dr)
					->withSo($so);
		// $ponum = Po::where('po','=', $po)->get();
		// $receipts = Invoice::where('po_po', '=', $po)->get();
		// return View::make('users.admin.addinv')->withInvoice($receipts)->withPo($ponum);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /accounts/{id}/edit
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
			$checked = Po::where('id','=',Input::get('po'))->get();
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

			$exid = Invoiceitem::where('invnum', '=', $iid)->where('iname', '=', $iname)->where('idesc', '=', Input::get('idesc'))->get();
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
			
			$num = new Invoiceitem;
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
	 * PUT /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$inv = Item::find($id);
		$inv->delivered = 2;
		$inv->save();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}