<?php

class EmployeeController extends BaseController {
	public function index()
	{

	}
public function store()
	{
		$employee = new Employee;
		$employee->department = Input::get('department');
		$employee->position = Input::get('position');
		$employee->fname = Input::get('fname');
		$employee->mname = Input::get('mname');
		$employee->lname = Input::get('lname');
		$employee->rate = Input::get('rate');

		$employee->save();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Added a new employee';
		$activity->identifier = Input::get('fname');
		$activity->save();

		return Redirect::to('employ');
	}

public function show()
	{
		if ( $search = Request::get('search'))
		{
			$emp = Employee::search($search)->get();
		}
		else
		{
			$emp = Employee::all();
		}

		return View::make('users.accounting.employ2')->withEmployee($emp);
	}
public function edit($id)
	{
		$emp = Employee::where('id', '=', $id)->get();

		return View::make('users.accounting.editemploy')->withEmployee($emp);
	}
	public function update($id)
	{
		$emp = Employee::find($id);
		$emp->department = Input::get('department');
		$emp->position= Input::get('position');
		$emp->fname = Input::get('fname');
		$emp->mname= Input::get('mname');
		$emp->lname= Input::get('lname');
		$emp->rate= Input::get('rate');
		$saved = $emp->save();

		if ($saved)
		{
			$activity = new Activity;
			$activity->user_id = Auth::user()->id;
			$activity->action = 'Updated an employee';
			$activity->identifier = Input::get('fname');
			$activity->save();

			return Redirect::to('employ2');
		}
		else
		{
			return 'not saved';
		}
	}
	public function destroy($id)
	{
		$emp = Employee::find($id);

		$emp->delete();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Deleted an employee';
		$activity->identifier = Input::get('fname');
		$activity->save();

		return Redirect::to('employ2');
	}

public function shows()
	{
		if ( $search = Request::get('search'))
		{
			$emp1 = Employee::search($search)->get();
		}
		else
		{
			$emp1 = Employee::all();
		}

		return View::make('users.accounting.payroll')->withEmployee($emp1);
	}
}