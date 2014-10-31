<?php

class CashDetailsController extends BaseController {

public function index()
	{
		// 
	}

public function store()
	{
		$vitems = new Cashitem;
		$vitems->cashvouchers_checkno = Input::get('cashvouchers_checkno');
		$vitems->payee = Input::get('payee');
		$vitems->labor = Input::get('labor');
		$vitems->descr = Input::get('descr');
		$vitems->amount = Input::get('amount');
		$vitems->less = Input::get('less');
		$vitems->acctitle = Input::get('acctitle');
		$vitems->acctitle2 = Input::get('acctitle2');
		$vitems->debit = Input::get('debit');
		$vitems->credit = Input::get('credit');
		$vitems->save();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Added a new vouchers';
		$activity->identifier = Input::get('descr');
		$activity->save();

		return Redirect::back();
	}


	
public function show($checkno)
	{
		$vitem = Cashitem::where('cashvouchers_checkno', '=', $checkno)->get();
		$vouch = Cashvouchers::where('checkno', '=', $checkno)->get();
		$emp = Employee::with('payroll')->where('department','=','worksite')->get();
		$lab = Labor::get();	
		$acctitle = Accounttitle::get();
		return View::make('users.accounting.cashvouchersdetails')->withCashvouchers($vouch)->withCashitem($vitem)->withEmployee($emp)->withLabor($lab)->withAccounttitle($acctitle);
	}
}