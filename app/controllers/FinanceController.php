<?php

class FinanceController extends \BaseController {

	
	public function store()
	{
		$monthly = new Monthly;
		$monthly->date = Input::get('date');
		$monthly->income = Input::get('income');
		$monthly->expenses = Input::get('expenses');

		$monthly->save();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'created new transaction';
		$activity->identifier = 'of the company';
		$activity->save();

		return redirect::to('users.financing.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if ( $search = Request::get('search'))
		{
			$monthly = Monthly::search($search)->get();
		}
		else
		{
			$monthly = Monthly::all();
		}
		

		return View::make('users.financing.index')->withMonthly($monthly);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$monthly = Monthly::find($id);

		$monthly->delete();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'deleted a transaction';
		$activity->identifier = 'of the company';
		$activity->save();

		return Redirect::back();
	}


}
