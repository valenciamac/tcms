
<?php
use Carbon\Carbon;
Route::get('/', ['as' => 'home', function()
{
	return Redirect::to(Auth::user()->role);

}])->before('auth');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::get('create', ['as' => 'create', function()
{
	return View::make('users.sysAdmin.createUser');

}])->before('auth|sysAdmin');

Route::get('admin', ['as' => 'admin', function()
{

	return View::make('users.admin.index');	

}])->before('auth|admin');

Route::get('adminPO', ['as' => 'adminPO', function()
{
	return View::make('users.admin.purchases');	
}])->before('auth|admin');
Route::resource('mrs', 'mrsController');
Route::get('mrs', ['uses' => 'mrsController@index'])->before('auth|admin');
Route::get('getmrs', function()
	{

	$mrs = Mrs::with('project')->get();

	return $mrs;
	})->before('auth|admin');
Route::get('project/{id}/delete', ['uses' => 'ProjectsController@destroy'])->before('auth|sysAdmin');
Route::resource('invoice', 'InvoiceController');
Route::resource('additem', 'additemController');
Route::resource('adddesc', 'adddescController');
Route::get('invoice/{po}', ['uses' => 'InvoiceController@show']);

Route::get('pur', function()
{
	return Po::orderBy('po', 'DESC')->get();
})->before('auth|admin');

Route::resource('addtemplate', 'addtemplateController');

Route::get('project/{id}/addtemplate', ['uses' => 'addtemplateController@create'])->before('auth|sysAdmin');

Route::get('accounts', ['as' => 'accounts', 'uses' => 'AccountsController@show' ])->before('auth|sysAdmin');

Route::get('sysAdmin', ['as' => 'sysAdmin' , function()
{
	

	return View::make('users.sysAdmin.index');
			
}])->before('auth|sysAdmin');

Route::get('accounting', ['as' => 'accounting' , function()
{
	
	return View::make('users.accounting.index');	

}])->before('auth|accounting');

Route::get('purchasing', ['as' => 'purchasing' , function()
{

	return View::make('users.purchasing.index');	

}])->before('auth|purchasing');

Route::get('financing', ['as' => 'financing' , function()
{

	return View::make('users.financing.index');	

}])->before('auth|financing');

// Financing Routes..
Route::get('financing', ['as' => 'financing' , function()
{

	return View::make('users.financing.index');	

}])->before('auth|financing');

Route::get('monthlyGraph', ['as' => 'monthlyGraph' , function()
{

	return View::make('users.financing.monthlyGraph');	

}])->before('auth|financing');

Route::get('yearlyGraph', ['as' => 'yearlyGraph' , function()
{

	return View::make('users.financing.yearlyGraph');	

}])->before('auth|financing');

Route::get('financing',['as' => 'financing', 'uses' => 'FinanceMonthlyController@monthly'])->before('auth|financing');

Route::get('monthlyGraph',['as' => 'monthlyGraph', 'uses' => 'FinanceMonthlyController@monthly'])->before('auth|financing');

Route::get('financeMonthlyRefresh', ['as' => 'financeMonthlyRefresh', 'uses' => 'FinanceMonthlyController@refresh'])->before('auth|financing');

Route::get('yearlyGraph',['as' => 'yearlyGraph', 'uses' => 'FinanceYearlyController@annual'])->before('auth|financing');

Route::get('financeYearlyRefresh', ['as' => 'financeYearlyRefresh', 'uses' => 'FinanceYearlyController@refresh'])->before('auth|financing');

Route::get('financialReports', ['as' => 'financialReports', function()
{
	return View::make('users.financing.financialReports');
}])->before('auth|financing');

Route::get('financialReports',['as' => 'financialReports', 'uses' => 'FinanceController@show'])->before('auth|financing');
Route::get('financialReportsTotal',['as' => 'financialReportsTotal', 'uses' => 'FinanceController@run'])->before('auth|financing');

Route::get('incomeSummary', ['as' => 'incomeSummary', function()
{
	return View::make('users.financing.incomeSummary');
}])->before('auth|financing');

Route::get('incomeSummary',['as' => 'incomeSummary', 'uses' => 'IncomeSummaryController@chooseYear'])->before('auth|financing');
Route::get('incomeSummaryAdd',['as' => 'incomeSummaryAdd', 'uses' => 'IncomeSummaryAddController@create'])->before('auth|financing');
Route::get('incomeSummarySubmit',['as' => 'incomeSummaryAdd', 'uses' => 'IncomeSummaryAddController@store'])->before('auth|financing');
Route::get('incomeSummaryTotal',['as' => 'incomeSummaryTotal', 'uses' => 'IncomeSummaryController@run'])->before('auth|financing');
// Route::resource('incomeSummaryAdd', 'IncomeSummaryAddController');

Route::get('financialReports/printfin', function()
{
	JasperPHP::process(
        storage_path() . '/F_Report.jasper', //Input file 
        storage_path() . '/F_Report', //Output file without extension
        array("pdf"), //Output format
        array(), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = date("Y-m-d H.i.s");
	    rename(storage_path() . '/F_Report.pdf', storage_path() . '/financial_reports_'.$name.'.pdf');
	    File::move(storage_path() . '/financial_reports_'.$name.'.pdf', storage_path() . '/../../public/reports/financial_reports_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/financial_reports_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download(
    	storage_path() . '/../../public/reports/financial_reports_'.$name.'.pdf', 
    	'financial_reports_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'financial_reports_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)
    );
})->before('auth|financing');

Route::get('incomeSummary/printfin', function()
{
	JasperPHP::process(
        storage_path() . '/Income_Summary_Report.jasper', //Input file 
        storage_path() . '/Income_Summary_Report', //Output file without extension
        array("pdf"), //Output format
        array(), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = date("Y-m-d H.i.s");
	    rename(storage_path() . '/Income_Summary_Report.pdf', storage_path() . '/income_summary_reports_'.$name.'.pdf');
	    File::move(storage_path() . '/income_summary_reports_'.$name.'.pdf', storage_path() . '/../../public/reports/income_summary_reports_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/income_summary_reports_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download(
    	storage_path() . '/../../public/reports/income_summary_reports_'.$name.'.pdf', 
    	'income_summary_reports_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'income_summary_reports_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)
    );
})->before('auth|financing');

// Route::get('incomeSummary/{year}/printfin', function($pickedYear)
// {
// 	JasperPHP::process(
//         storage_path() . '/Income_Summary_Report.jasper', //Input file 
//         storage_path() . '/Income_Summary_Report', //Output file without extension
//         array("pdf"), //Output format
//         array(
//         	'pickedYear' => $pickedYear
//         ), //Parameters array
//         Config::get('database.connections.mysql') //DB connection array
//         )->execute();
// 	    $name = date("Y-m-d H.i.s");
// 	    rename(storage_path() . '/Income_Summary_Report.pdf', storage_path() . '/income_summary_reports_'.$name.'.pdf');
// 	    File::move(storage_path() . '/income_summary_reports_'.$name.'.pdf', storage_path() . '/../../public/reports/income_summary_reports_'.$name.'.pdf');

// 	    $file = storage_path() . '/../../public/reports/income_summary_reports_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
// 		return Response::download(
//     	storage_path() . '/../../public/reports/income_summary_reports_'.$name.'.pdf', 
//     	'income_summary_reports_'.$name.'.pdf', 
//     	array(
//     		'Content-type:application/pdf',
//     		'Content-Disposition: inline; filename="' . 'income_summary_reports_'.$name.'.pdf' . '"',
//     		'Content-Transfer-Encoding: binary',
//     		'Accept-Ranges: bytes'
//     	)
//     );
// })->before('auth|financing');

Route::get('incomeSummary/uly', function()
{
	$alls = IncomeSummary::all();

	// $date = $all->created_at;

	return View::make('users.financing.year', compact('alls'));


})->before('auth|financing');

Route::get('incomeSummary/uly/{year}', function($year)
{
	// $year = new IncomeSummary;
	// $year->iname = Input::get('name');
	// $year->po_po = Input::get('po_po');
	// $year->desc = Input::get('desc');
	// $year->price = Input::get('price');
	// $year->qty = Input::get('qty');
	// $success = $year->save();

	// $year = IncomeSummary::all();
	// $year->created_at = Input::get('created_at');
	// $pickYear = $year->created_at;

	return $year;

	// return View::make('users.financing.wala');

	// $pickedYear = IncomeSummary::where('created_at', '=' , $pickYear)->get();

	// return Redirect::route('incomeSummary.show', ['pickYear' => $pickYear])->withIncomeSummary($pickedYear);

})->before('auth|financing');

Route::get('financing/asd', function()
{
	$total = CostPurchase::all();

	return View::make('users.financing.asd', compact('total'));

})->before('auth|financing');






Route::get('purchaseOrder', ['as' => 'purchaseOrder' , function()
{
	return View::make('users.purchasing.purchaseOrder');	
}])->before('auth|purchasing');

Route::get('accounts/{id}', ['uses' => 'AccountsController@edit' ])->before('auth|sysAdmin');
Route::get('accounts/{id}/update', ['uses' => 'AccountsController@update' ])->before('auth|sysAdmin');
Route::get('accounts/{id}/delete', ['uses' => 'AccountsController@destroy' ])->before('auth|sysAdmin');
Route::get('addproject', function()
{
	return Project::all();
})->before('auth|sysAdmin');

Route::resource('sessions', 'SessionsController');
Route::resource('users', 'UsersController');
Route::resource('item', 'ItemController');
Route::get('view', ['as' => 'view' , function()
{

	return View::make('users.purchasing.view');	

}])->before('auth|purchasing'); 
Route::get('view',['as' => 'view', 'uses' => 'PoController@show'])->before('auth|purchasing');
Route::resource('po', 'PoController');
Route::get('view2', ['as' => 'view2' , function()
{

	return View::make('users.purchasing.view2');	

}])->before('auth|purchasing'); 

Route::post('item/{po}', function()
{
	$item = new Item;
	$item->iname = Input::get('name');
	$item->po_po = Input::get('po_po');
	$item->desc = Input::get('desc');
	$item->price = Input::get('price');
	$item->qty = Input::get('qty');
	$success = $item->save();

	$po = $item->po_po;

	$items = Item::where('po_po', '=' , $po)->get();

	return Redirect::route('item.show', ['po' => $po])->withItem($items);

})->before('auth|purchasing');

Route::get('purchase/{id}', ['uses' => 'PoController@edit' ])->before('auth|purchasing');
Route::get('purchase/{id}/update', ['uses' => 'PoController@update' ])->before('auth|purchasing');
Route::get('purchase/{id}/delete', ['uses' => 'PoController@destroy' ])->before('auth|purchasing');
Route::get('view2', ['as' => 'view2', 'uses' => 'ItemController@store' ])->before('auth|purchasing');
Route::get('purchaseOrder/{id}/delete', ['uses' => 'PoController@destroy' ])->before('auth|purchasing');
Route::get('payment', ['as' => 'payment' , function()
{

	return View::make('users.purchasing.payment');	

}])->before('auth|purchasing'); 
Route::resource('request', 'RequestController');
Route::resource('rfp','RfpController');
Route::get('view3', ['as' => 'view3' , function()
{

	return View::make('users.purchasing.view3');	

}])->before('auth|purchasing'); 
Route::get('view3',['as' => 'view3', 'uses' => 'RfpController@show'])->before('auth|purchasing');
Route::get('prf/{id}', ['uses' => 'RfpController@edit' ])->before('auth|purchasing');
Route::get('prf/{id}/update', ['uses' => 'RfpController@update' ])->before('auth|purchasing');
Route::get('prf/{id}/delete', ['uses' => 'RfpController@destroy' ])->before('auth|purchasing');
Route::get('view4', ['as' => 'view4' , function()
{

	return View::make('users.purchasing.view4');	

}])->before('auth|purchasing'); 
Route::get('view4',['as' => 'view4', 'uses' => 'DetailController@show'])->before('auth|purchasing');
Route::get('info/{id}', ['uses' => 'DetailController@edit' ])->before('auth|purchasing');
Route::get('info/{id}/update', ['uses' => 'DetailController@update' ])->before('auth|purchasing');
Route::get('info/{id}/delete', ['uses' => 'DetailController@destroy' ])->before('auth|purchasing');
Route::get('product/{id}', ['uses' => 'ItemController@edit' ])->before('auth|purchasing');
Route::get('product/{id}/update', ['uses' => 'ItemController@update' ])->before('auth|purchasing');
Route::get('product/{id}/delete', ['uses' => 'ItemController@destroy' ])->before('auth|purchasing');
Route::get('public/accts', function()
{
	return User::orderBy('id', 'DESC')->get();
})->before('auth|sysAdmin');

Route::post('accts', function()
{
		$user = new User;
		$user->fname = Input::get('fname');
		$user->lname = Input::get('lname');
		$user->username = Input::get('username');
		$password = Input::get('password');
		$user->password = Hash::make($password);
		$user->role = Input::get('role');
		$success = $user->save();

		$activity = new Activity;
		$activity->user_id = Auth::user()->id;
		$activity->action = 'created new user';
		$activity->identifier = Input::get('fname');
		$activity->save();

})->before('auth|sysAdmin');
Route::resource('project', 'ProjectsController');
Route::get('project', ['uses' => 'ProjectsController@create'])->before('auth|sysAdmin');

Route::get('activities', function()
{
	return View::make('users.sysAdmin.activities');

})->before('auth|sysAdmin');

Route::get('save', function()
{
	$activity = Activity::with('user')->orderBy('id', 'DESC')->get();

	return $activity;
})->before('auth|sysAdmin');
Route::get('salary', function()
{
	return View::make('users.accounting.salary');


})->before('auth|accounting');
Route::get('payrollsave', function()
{
	$payroll = Payroll::with('employee')->orderBy('paydate', 'ASC')->get();

	return $payroll;
})->before('auth|accounting');

Route::post('sals', function()
{
		$employee = new Employee;
		$employee->fname = Input::get('fname');
		$employee->lname = Input::get('lname');
		$employee->mname = Input::get('mname');
		$employee->department = Input::get('department');
		$employee->position = Input::get('position');
		$employee->address = Input::get('address');
		$employee->rate = Input::get('rate');
		$employee->basic = Input::get('basic');
		$employee->days = Input::get('days');
		$success = $employee->save();

		$payroll = new Payroll;
		$payroll->employee_id = Auth::employee()->id;
		$payroll->paydate = Input::get('paydate');
		$payroll->gross = Input::get('gross');
		$payroll->phcont= Input::get('phcont');
		$payroll->phcont= Input::get('ssscont');
		$payroll->phcont= Input::get('pgibigcont');
		$payroll->income = Input::get('income');
		$payroll->save();

})->before('auth|sysAdmin');

Route::get('po', function()
{
	return Po::orderBy('po', 'DESC')->get();
})->before('auth|purchasing');

Route::get('ratesave', function()
{
	$rate = Rate::orderBy('id', 'DESC')->get();

	return $rate;
})->before('auth|accounting');

Route::get('ph', function()
{
	$phcontr = Phcontr::orderBy('id', 'ASC')->get();

	return $phcontr;
})->before('auth|accounting');

Route::get('pg', function()
{
	$pagibig = Pagibig::orderBy('id', 'ASC')->get();

	return $pagibig;
})->before('auth|accounting');

Route::get('sss', function()
{
	$ssscontr = Ssscontr::orderBy('id', 'ASC')->get();

	return $ssscontr;
})->before('auth|accounting');

Route::get('rates', ['as' => 'rates' , function()
{

	return View::make('users.accounting.rates');	

}])->before('auth|accounting');

Route::get('ratesb', ['as' => 'ratesb' , function()
{

	return View::make('users.accounting.ratesb');	

}])->before('auth|accounting');

Route::get('ratesc', ['as' => 'ratesc' , function()
{

	return View::make('users.accounting.ratesc');	

}])->before('auth|accounting');

Route::get('ratesd', ['as' => 'ratesd' , function()
{

	return View::make('users.accounting.ratesd');	

}])->before('auth|accounting');

Route::get('ratese', ['as' => 'ratese' , function()
{

	return View::make('users.accounting.ratese');	

}])->before('auth|accounting');

Route::get('ratesf', ['as' => 'ratesf' , function()
{

	return View::make('users.accounting.ratesf');	

}])->before('auth|accounting');

Route::get('ratesg', ['as' => 'ratesg' , function()
{

	return View::make('users.accounting.ratesg');	

}])->before('auth|accounting');

Route::get('rates2', ['as' => 'rates2' , function()
{

	return View::make('users.accounting.rates2');	

}])->before('auth|accounting');

Route::get('rates3', ['as' => 'rates3' , function()
{

	return View::make('users.accounting.rates3');	

}])->before('auth|accounting');

Route::get('rates', ['as' => 'rates', 'uses' => 'RateController@show' ])->before('auth|accounting');

Route::get('ratesd', ['as' => 'ratesd', 'uses' => 'HoursController@show' ])->before('auth|accounting');

Route::get('rates2', ['as' => 'rates2', 'uses' => 'PhcontrController@show' ])->before('auth|accounting');

Route::get('rates3', ['as' => 'rates3', 'uses' => 'SsscontrController@show' ])->before('auth|accounting');

Route::get('ratesf', ['as' => 'ratesf', 'uses' => 'PagibigController@show' ])->before('auth|accounting');

Route::get('rates/{id}', ['uses' => 'RateController@editrate' ])->before('auth|accounting');

Route::get('ssscontr/{id}', ['uses' => 'SsscontrController@editrate' ])->before('auth|accounting');
Route::get('ssscontr/{id}/update', ['uses' => 'SsscontrController@update' ])->before('auth|accounting');
Route::get('ssscontr/{id}/delete', ['uses' => 'SsscontrController@destroy' ])->before('auth|accounting');

Route::get('pagibig/{id}', ['uses' => 'SsscontrController@edit' ])->before('auth|accounting');
Route::get('pagibig/{id}/update', ['uses' => 'SsscontrController@update' ])->before('auth|accounting');
Route::get('pagibig/{id}/delete', ['uses' => 'SsscontrController@destroy' ])->before('auth|accounting');

Route::get('phcontr/{id}', ['uses' => 'PhcontrController@editrate' ])->before('auth|accounting');

Route::get('phcontr/{id}/update', ['uses' => 'PhcontrController@update' ])->before('auth|accounting');

Route::get('phcontr/{id}/delete', ['uses' => 'PhcontrController@destroy' ])->before('auth|accounting');

Route::get('rates/{id}/update', ['uses' => 'RateController@updaterate' ])->before('auth|accounting');

Route::get('rates/{id}/delete', ['uses' => 'RateController@destroy' ])->before('auth|accounting');


Route::get('employ', ['as' => 'employ' , function()
{

	return View::make('users.accounting.employ');	

}])->before('auth|accounting');

Route::get('employ2', ['as' => 'employ2' , function()
{

	return View::make('users.accounting.employ2');	

}])->before('auth|accounting');

Route::resource('employee', 'EmployeeController');

Route::resource('rate', 'RateController');

Route::resource('phcontr', 'PhcontrController');

Route::resource('ssscontr', 'SsscontrController');
Route::resource('pagibig', 'PagibigController');
Route::resource('payroll', 'PayrollController');
Route::resource('hoursrate', 'HoursController');

Route::get('employ2', ['as' => 'employ2', 'uses' => 'EmployeeController@show' ])->before('auth|accounting');

Route::get('payroll', ['as' => 'payroll', 'uses' => 'EmployeeController@shows' ])->before('auth|accounting');

Route::get('viewpay', ['as' => 'viewpay', 'uses' => 'EmployeeController@showpayoffice' ])->before('auth|accounting');

Route::get('viewpay2', ['as' => 'viewpay2', 'uses' => 'EmployeeController@showpayworksite' ])->before('auth|accounting');
Route::get('{id}', ['uses' => 'EmployeeController@editpayroll' ])->before('auth|accounting');

Route::get('{id}/update', ['uses' => 'EmployeeController@update' ])->before('auth|accounting');

Route::get('{id}/delete', ['uses' => 'EmployeeController@destroy' ])->before('auth|accounting');


Route::get('vouchers', ['as' => 'vouchers' , function()
{

	return View::make('users.accounting.vouchers');	

}])->before('auth|accounting');


// // administrator routes
// Route::resource('purchases', 'PurchaseController');


Route::get('admin/mrs', ['uses' => 'mrsController@index'])->before('auth|admin');


Route::get('item/{po}/reports', function($po)
{
    	JasperPHP::process(
        storage_path() . '/purchase_order.jasper', //Input file 
        storage_path() . '/purchase_order', //Output file without extension
        array("pdf","rtf"), //Output format
        array(
        	'po' => $po
        ), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = $po.'_'.date("Y-m-d");
	    rename(storage_path() . '/purchase_order.pdf', storage_path() . '/purchaseOrder_'.$name.'.pdf');
	    File::move(storage_path() . '/purchaseOrder_'.$name.'.pdf', storage_path() . '/../../public/reports/purchaseOrder_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/purchaseOrder_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'purchaseOrder_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'purchaseOrder_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|purchasing');

Route::get('salary/payrollreport', function()
{
    	JasperPHP::process(
        storage_path() . '/payroll.jasper', //Input file 
        storage_path() . '/payroll', //Output file without extension
        array("pdf","rtf"), //Output format
        array(), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();
	    $name = date("Y-m-d H.i.s");
	    rename(storage_path() . '/payroll.pdf', storage_path() . '/payroll_'.$name.'.pdf');
	    File::move(storage_path() . '/payroll_'.$name.'.pdf', storage_path() . '/../../public/reports/payroll_'.$name.'.pdf');

	    $file = storage_path() . '/../../public/reports/payroll_'.$name.'.pdf';  // <- Replace with the path to your .pdf file
	
		return Response::download($file, 
    	'payroll_'.$name.'.pdf', 
    	array(
    		'Content-type:application/pdf',
    		'Content-Disposition: inline; filename="' . 'payroll_'.$name.'.pdf' . '"',
    		'Content-Transfer-Encoding: binary',
    		'Accept-Ranges: bytes'
    	)

    );
})->before('auth|accounting');