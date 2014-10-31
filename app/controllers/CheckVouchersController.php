<?php

class CheckVouchersController extends BaseController {

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
		return View::make('users.accounting.checkvouchers')->withCheckvouchers($emp2)->withCheckitem($pay)->withCashvouchers($emp)->withSuppliers($suppliers)
		->withRfp($rfp);
	}
public function store()
	{
		$voucher = new Checkvouchers;
		$voucher->rfrom = Input::get('rfrom');
		$voucher->rpb = Input::get('rpb');
		$voucher->checkno = Input::get('checkno');
		$voucher->prepared = Input::get('prepared');
		$voucher->checked = Input::get('checked');
		$voucher->approved = Input::get('approved');
		$voucher->save();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Added a new check voucher';
		$activity->identifier = Input::get('prepared');
		$activity->save();

		 // return Redirect::to('checkvouchers');
		$checkno = $voucher->checkno;

		return Redirect::route('checkdetails.show', ['checkno' => $checkno]);
	}
public function show()
	{
		if ( $search = Request::get('search'))
		{
			$vouch = Cashvouchers::search($search)->get();
			$vitem = Cashvouchitems::search($search)->get();
		}
		else
		{
			$vouch = Cashvouchers::all();
			$vitem = Cashvouchitems::all();
		}

		return View::make('users.accounting.cashvouchersview')->withCashvouch($vouch)->withVouchitems($vitem);
	}
public function update($id)
	{
		$voucher = new Cashvouch;
		$voucher->payee = Input::get('payee');
		$voucher->rfrom = Input::get('rfrom');
		$voucher->rpb = Input::get('rpb');
		$voucher->checkno = Input::get('checkno');
		$voucher->prepared = Input::get('prepared');
		$voucher->checked = Input::get('checked');
		$voucher->approved = Input::get('approved');
		$voucher->save();

		if ($saved)
		{
			$activity = new Activity;
			$activity->user_id = Auth::user()->id;
			$activity->action = 'Updated a vouch';
			$activity->identifier = Input::get('id');
			$activity->save();
			return Redirect::to('cashvouchersview');
		}
		else
		{
			return 'not saved';
		}
	}
public function destroy($id)
	{
		$vouch = Checkvouchers::find($id);
		$vouch->delete();

		return Redirect::to('checkvouchers');
	}

}