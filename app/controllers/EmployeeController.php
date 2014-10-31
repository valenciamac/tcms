<?php

class EmployeeController extends BaseController {
	public function index()
	{

	}
	public function create()
	{
		$emp = Employee::orderby('id', 'asc')->get();
		$pay = Payroll::get();
		return View::make('users.accounting.index')->withEmployee($emp)->withPayroll($pay);


	}
public function store()
	{
		$employee = new Employee;
		$employee->department = Input::get('department');
		$employee->position = Input::get('position');
		$employee->paydate = Input::get('paydate');
		$employee->fname = Input::get('fname');
		$employee->mname = Input::get('mname');
		$employee->lname = Input::get('lname');
		$employee->rate = Input::get('rate');
		$employee->basic = Input::get('basic');
		$employee->days = Input::get('days');
		$employee->save();

		
		$employee2 = new Employ;
		$employee2->fname = Input::get('fname');
		$employee2->mname = Input::get('mname');
		$employee2->lname = Input::get('lname');
		$employee2->sepdate = 0;
		$employee2->save();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Added a new employee';
		$activity->identifier = Input::get('fname');
		$activity->save();

		return Redirect::to('accounting');
	}

	
public function shows()
	{
		if ( $search = Request::get('search'))
		{
			$pay = Employee::search($search)->get();
		}
		else
		{
			$pay = Employee::all();
		}

		return View::make('users.accounting.payroll')->withEmployee($pay);
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

	public function showdate()
	{
		if ( $search = Request::get('search'))
		{
			$pay = Payroll::search($search)->get();
		}
		else
		{
			$pay = Payroll::groupBY('paydate')->get();

		}
	
		return View::make('users.accounting.salary')->withPayroll($pay);
	}

	public function showsep()
	{
		if ( $search = Request::get('search'))
		{
			$sep = Separation::search($search)->get();
		}
		else
		{
			$sep = Separation::get();

		}
	
		return View::make('users.accounting.renew')->withSeparation($sep);
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
		$emp->paydate= Input::get('paydate');
		$emp->fname = Input::get('fname');
		$emp->mname= Input::get('mname');
		$emp->lname= Input::get('lname');
		$emp->rate= Input::get('rate');
		$emp->basic= Input::get('basic');
		$emp->days= Input::get('days');
		$saved = $emp->save();
		if ($saved)
		{
		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Update Employee';
		$activity->identifier = Input::get('fname');
		$activity->save();
			
			return Redirect::to('accounting');
		}
		else
		{
			return 'not saved';
		}
	}
public function destroy($id)
	{
		$emp = Employee::find($id);
		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'Delete Employee';
		$activity->identifier=$emp->fname;
		$activity->save();

		$emp->delete();
		
		

		return Redirect::to('accounting');
	}

public function showpayoffice()
	{
		
		$pay = Employee::where('department', '=', 'office')->get();

		return View::make('users.accounting.viewpay')->withEmployee($pay);
	}

public function showpayworksite()
	{
		
		$emp2 = Employee::where('department', '=', 'worksite')->get();

		return View::make('users.accounting.viewpay2')->withEmployee($emp2);
	}
public function editpayroll($id)
	{
		$rates=Rate::all();
		$pay = Employee::where('id', '=', $id)->get();
		$pegebeg = Pagibig::all();
		$phili = Phcontr::all();
		$contri = Ssscontr::all();
		return View::make('users.accounting.computepay')->withEmployee($pay)->withRate($rates)->withPagibig($pegebeg)->withPhcontr($phili)->withSsscontr($contri);
	}
public function separation($id)
	{
		$sep = Employee::where('id', '=', $id)->get();
		$araw = Day::where('employee_id' ,'=' , $id)->get();
		return View::make('users.accounting.separation')->withEmployee($sep)->withDay($araw);
	}

public function editpaydate($paydate)
	{
		//$emp = Employee::where('paydate', '=', $paydate )->get();
		$tri = Payroll::with('employee')->where('paydate', '=', $paydate )->get();
		$peep = Payroll::where('paydate', '=', $paydate)->groupBY('paydate')->get();
		return View::make('users.accounting.monthly')->withPayroll($tri)->withPeep($peep);
		
	}
	public function empoy($id)
	{
		$polo = Separation::where('id', '=', $id)->get();
		return View::make('users.accounting.viewseparation')->withSeparation($polo);
	}



}