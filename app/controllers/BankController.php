<?php

class BankController extends BaseController {

public function index()
	{
		// 
	}

public function store()
	{
		$bank = new Bank;
		$bank->bname = Input::get('bname');
		$bank->save();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Added a new bank';
		$activity->identifier = Input::get('bname');
		$activity->save();

		return Redirect::back();
	}
}