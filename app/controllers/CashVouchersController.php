<?php

class CashVouchersController extends BaseController {

public function index()
	{

	}
public function create()
	{
		$emp = Cashvouchers::orderby('id', 'asc')->get();
		$emp2 = Checkvouchers::get();
		$pay = Cashitem::get();
		$pay1 = Cashitem3::get();
		$rfp = Rfp::all();
		$suppliers = Suppliers::with('po')->get();

		return View::make('users.accounting.cashvouchers')->withCashvouchers($emp)->withCashitem($pay)->withCashitem3($pay1)->withCheckvouchers($emp2)->withSuppliers($suppliers)
		->withRfp($rfp);
	}
public function store()
	{
		$voucher = new Cashvouchers;
		$voucher->rfrom = Input::get('rfrom');
		$voucher->rpb = Input::get('rpb');
		$voucher->checkno = Input::get('checkno');
		$voucher->prepared = Input::get('prepared');
		$voucher->checked = Input::get('checked');
		$voucher->approved = Input::get('approved');
		$voucher->save();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Added a new cash voucher';
		$activity->identifier = Input::get('prepared');
		$activity->save();

		// return Redirect::to('cashvouchersview');
		$checkno = $voucher->checkno;

		return Redirect::route('cashdetails.show', ['checkno' => $checkno]);
	}
public function show()
	{
		if ( $search = Request::get('search'))
		{
			$vouch = Cashvouchers::search($search)->get();
			$vitem = Cashitem::search($search)->get();
		}
		else
		{
			$vouch = Cashvouchers::all();
			$vitem = Cashitem::all();
		}

		return View::make('users.accounting.cashvouchersview')->withCashvouchers($vouch)->withCashitem($vitem);
	}
public function destroy($id)
	{
		$vouch = Cashvouchers::find($id);
		$vouch->delete();

		return Redirect::to('cashvouchers');
	}
}