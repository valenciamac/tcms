<?php

class CheckItemController extends BaseController {

public function index()
	{

	}
public function create()
	{
		$unrel = Checkvouchers::with('checkitem')->where('released','=','0')->get();
		$unpaid = Po::with('item')->where('payment','=','0')->get();
		$paid = Po::with('item')->where('payment','=','1')->get();
		return View::make('users.accounting.unrel')->withCheckvouchers($unrel)->withUnpaid($unpaid)->withPaid($paid);
	}
public function store()
	{
		$vitems = new Checkitem;
		$vitems->check = Input::get('check');
		$vitems->project = Input::get('project');
		$vitems->checkdate = Input::get('checkdate');
		$vitems->amount = Input::get('amount');
		$vitems->payee = Input::get('payee');
		$vitems->bank = Input::get('bank');
		$vitems->acctitle1 = Input::get('acctitle1');
		$vitems->acctitle2 = Input::get('acctitle2');
		$vitems->debit = Input::get('debit');
		$vitems->credit = Input::get('credit');
		$vitems->checkvouchers_checkno = Input::get('checkvouchers_checkno');
		$vitems->po_po = Input::get('po_po');
		$vitems->save();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Added a new voucher item';
		$activity->identifier = Input::get('check');
		$activity->save();
		
		return Redirect::to('checkvouchers');
	}

	
public function show($checkno)
	{
		$vitem = Checkitem::where('checkvouchers_checkno', '=', $checkno)->get();
		$vouch = Checkvouchers::where('checkno', '=', $checkno)->get();
		$banks = Bank::get();
		$purchase = Po::with('project')->orderby('po')->get();
		$item =Item::with('po')->get();
		return View::make('users.accounting.checkvouchersitems')->withCheckitem($vitem)->withCheckvouchers($vouch)->withPo($purchase)->withBank($banks)->withItem($item);
	}
public function destroy($id)
	{
		$vitem = Checkitem::find($id);

		$vitem->delete();

		return Redirect::back();
	}

}	