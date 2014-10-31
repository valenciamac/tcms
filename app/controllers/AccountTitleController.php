<?php

class AccountTitleController extends BaseController {

public function index()
	{
		// 
	}

public function store()
	{
		$acctitle = new Accounttitle;
		$acctitle->account = Input::get('account');
		$acctitle->save();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Added a new bank';
		$activity->identifier = Input::get('account');
		$activity->save();

		return Redirect::back();
	}
}