<?php

class PrsPoController extends \BaseController {

	public function index()
	{
		$items = Item::get();
		$pitem = Project::with('prs')->orderby('id')->get();
		$prs = Prs::get();
		$supplier = Suppliers::get();

		return View::make('users.purchasing.prspos')->withItem($items)->withProject($pitem)->withPrs($prs)->withSuppliers($supplier);
	}
}