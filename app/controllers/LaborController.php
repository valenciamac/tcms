<?php

class LaborController extends BaseController {

public function index()
	{
		// 
	}

public function store()
	{
		$labor = new Labor;
		$labor->labor = Input::get('labor');
		$labor->save();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Added a new bank';
		$activity->identifier = Input::get('labor');
		$activity->save();

		return Redirect::back();
	}
}