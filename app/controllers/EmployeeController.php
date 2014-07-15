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
		$employee->basic = Input::get('basic');
		$employee->days = Input::get('days');
		$employee->save();

		return Redirect::to('employ');
	}

public function showemploy()
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

public function editemploy($id)
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

		return Redirect::to('employ2');
	}

public function showpayoffice()
	{
		
		$emp1 = Employee::where('department', '=', 'office')->get();

		return View::make('users.accounting.viewpay')->withEmployee($emp1);
	}

public function showpayworksite()
	{
		
		$emp2 = Employee::where('department', '=', 'worksite')->get();

		return View::make('users.accounting.viewpay2')->withEmployee($emp2);
	}
public function editpayroll($id)
	{
		$emp1 = Employee::where('id', '=', $id)->get();

		return View::make('users.accounting.computepay')->withEmployee($emp1);
	}

}