<?php

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


Route::get('accounts', ['as' => 'accounts', 'uses' => 'AccountsController@show' ])->before('auth|sysAdmin');

Route::get('sysAdmin', ['as' => 'sysAdmin' , function()
{
	$monthly = FinanceReports::all();

	return View::make('users.sysAdmin.index')
			->with('rMonth', $monthly->lists('month'))
			->with('rIncome', $monthly->lists('income'))
			->with('rExpenses', $monthly->lists('expenses'));;	

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

Route::get('monthlyGraph', ['as' => 'monthlyGraph' , function()
{

	return View::make('users.financing.monthlyGraph');	

}])->before('auth|financing');

Route::get('yearlyGraph', ['as' => 'yearlyGraph' , function()
{

	return View::make('users.financing.yearlyGraph');	

}])->before('auth|financing');
Route::get('printfr', ['as' => 'printfr', function()
{
	return View::make('users.financing.printfr');
}])->before('auth|financing');

Route::get('printfr',['as' => 'printfr', 'uses' => 'FinanceController@printShow'])->before('auth|financing');
Route::get('financing',['as' => 'financing', 'uses' => 'FinanceReportsController@monthly'])->before('auth|financing');

Route::get('monthlyGraph',['as' => 'monthlyGraph', 'uses' => 'FinanceReportsController@monthly'])->before('auth|financing');

Route::get('yearlyGraph',['as' => 'yearlyGraph', 'uses' => 'FinanceYearlyReportsController@annual'])->before('auth|financing');

Route::get('financialReports', ['as' => 'financialReports', function()
{
	return View::make('users.financing.financialReports');
}])->before('auth|financing');

Route::get('financialReports',['as' => 'financialReports', 'uses' => 'FinanceController@show'])->before('auth|financing');


Route::get('purchaseOrder', ['as' => 'purchaseOrder' , function()
{

	return View::make('users.purchasing.purchaseOrder');	

}])->before('auth|purchasing');

Route::get('accounts/{id}', ['uses' => 'AccountsController@edit' ])->before('auth|sysAdmin');
Route::get('accounts/{id}/update', ['uses' => 'AccountsController@update' ])->before('auth|sysAdmin');
Route::get('accounts/{id}/delete', ['uses' => 'AccountsController@destroy' ])->before('auth|sysAdmin');

Route::resource('sessions', 'SessionsController');
Route::resource('users', 'UsersController');
Route::resource('profiles', 'ProfilesController');
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
Route::get('purchase/{id}', ['uses' => 'PoController@edit' ])->before('auth|purchasing');
Route::get('purchase/{id}/update', ['uses' => 'PoController@update' ])->before('auth|purchasing');
Route::get('purchase/{id}/delete', ['uses' => 'PoController@destroy' ])->before('auth|purchasing');
Route::get('view2', ['as' => 'view2', 'uses' => 'ItemController@show' ])->before('auth|purchasing');
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

Route::get('activities', function()
{
	return View::make('users.sysAdmin.activities');

})->before('auth|sysAdmin');

Route::get('save', function()
{
	$activity = Activity::with('user')->orderBy('id', 'DESC')->get();

	return $activity;
})->before('auth|sysAdmin');

Route::get('employ', ['as' => 'employ' , function()
{

	return View::make('users.accounting.employ');	

}])->before('auth|accounting');

Route::get('employ2', ['as' => 'employ2' , function()
{

	return View::make('users.accounting.employ2');	

}])->before('auth|accounting');

Route::resource('employee', 'EmployeeController');

Route::get('employ2', ['as' => 'employ2', 'uses' => 'EmployeeController@show' ])->before('auth|accounting');

Route::get('payroll', ['as' => 'payroll', 'uses' => 'EmployeeController@shows' ])->before('auth|accounting');

Route::get('viewpay', ['as' => 'viewpay', 'uses' => 'EmployeeController@showpayoffice' ])->before('auth|accounting');

Route::get('viewpay2', ['as' => 'viewpay2', 'uses' => 'EmployeeController@showpayworksite' ])->before('auth|accounting');
Route::get('{id}', ['uses' => 'EmployeeController@editpayroll' ])->before('auth|accounting');

Route::get('{id}/update', ['uses' => 'EmployeeController@update' ])->before('auth|accounting');

Route::get('{id}/delete', ['uses' => 'EmployeeController@destroy' ])->before('auth|accounting');
Route::resource('payroll', 'PayrollController');

Route::get('vouchers', ['as' => 'vouchers' , function()
{

	return View::make('users.accounting.vouchers');	

}])->before('auth|accounting');

Route::get('reports', function()
{
    	JasperPHP::process(
        storage_path() . '/report2.jasper', //Input file 
        storage_path() . '/report2', //Output file without extension
        array("pdf","rtf"), //Output format
        array("php_version" => phpversion()), //Parameters array
        Config::get('database.connections.mysql') //DB connection array
        )->execute();

});

Route::get('mark', ['uses' => 'PoController@item'])->before('auth|purchasing');