<?php

class PhcontrController extends BaseController {
	public function index()
	{

	}

public function store()
	{
		$phcontr = new Phcontr;
		$phcontr->salbracket = Input::get('salbracket');
		$phcontr->salrange = Input::get('salrange');
		$phcontr->salbase = Input::get('salbase');
		$phcontr->tmp = Input::get('tmp');
		$phcontr->empeeshare = Input::get('empeeshare');
		$phcontr->empershare = Input::get('empershare');
		$phcontr->save();

		return Redirect::to('rates2');
	}
public function show()
	{
		
			$phcontr = Phcontr::all();
		

		return View::make('users.accounting.ratese')->withPhcontr($phcontr);
	}

public function editrate($id)
	{
		$phcontr = Phcontr::where('id', '=', $id)->get();

		return View::make('users.accounting.changephilhealth')->withPhcontr($phcontr);
	}

	public function update($id)
	{
		$phcontr = Phcontr::find($id);
		$phcontr->salbracket = Input::get('salbracket');
		$phcontr->salrange= Input::get('salrange');
		$phcontr->salbase = Input::get('salbase');
		$phcontr->tmp= Input::get('tmp');
		$phcontr->empershare= Input::get('empershare');
		$phcontr->empeeshare= Input::get('empeeshare');

		$saved = $phcontr->save();

		if ($saved)
		{
			return Redirect::to('ratese');
		}
		else
		{
			return 'not saved';
		}
	}
		public function destroy($id)
	{
		
		$phcontr = Phcontr::find($id);

		$phcontr->delete();


		return Redirect::back();
	}
}