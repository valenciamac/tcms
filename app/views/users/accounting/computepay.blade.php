<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>View Employee</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
      {{HTML::style('css/bootstrap.min.css')}}
      {{HTML::style('css/jquery-ui-1.9.2.custom.css')}}
      {{HTML::style('css/jquery-ui.css')}}
      {{HTML::style('css/application.css')}}
      {{HTML::style('css/datepicker.css')}}
      {{HTML::style('css/font-awesome.css')}}
      {{HTML::style('css/mystyle.css')}}
      {{HTML::style('css/mycalc.css')}}
      {{HTML::script('js/angular.min.js')}}
{{HTML::script('js/angular.min.js')}}
<body>
   <div id="wrapper">
   <div id="topbar">
      <div class="container">
         <a href="javascript:;" id="menu-trigger" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
         <i class="icon-cog"></i>
         </a>
         <div id="top-nav">
            <ul class="pull-right">
               <li class="dropdown">
                  <a href="sysAdmin"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
               </li>
               <li class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle hover" data-toggle="dropdown">
                  <i class="fa fa-user" style="padding-right:5px;" ></i> {{ ucwords(Auth::user()->fname), '&nbsp;', ucwords(Auth::user()->lname) }}                       
                  <b class="caret hover"></b>
                  </a>
                  <ul class="dropdown-menu pull-right">
                     <li><a href="../logout">Logout</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <!-- /#top-nav -->
      </div>
      <!-- /.container -->
   </div>
   <div id="header">
   <div class="container">
   <a href="sysAdmin"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
   </div>
   </div>
   <div id="masthead">
   
   <div class="container">
      
      <div class="masthead-pad">
         
         <div class="masthead-text">
            <h2>Employee</h2>
            <p>You have {{$employee->count()}} Employee registered in this system</p>
         </div> <!-- /.masthead-text -->
         
      </div>
      
   </div> <!-- /.container -->   
   
</div>
<div class="container mainB">
            <div ng-app class="row">
               <div class="col-md-3">
        <aside class="right">

                  <div class="divider"></div>
                  <ul class="intended sideMenu">
                      <li class="">
            <a href="../accounting"><i class="fa fa-home link"></i>Dashboard</a>
        </li>
       
        <li class="active">
            <a href="../viewpay"><i class="fa fa-money link"></i>Payroll</a>
        </li>
        <li>
            <a href="../rates"><i class="fa fa-file link"></i>Rates and Contribution</a>
        </li>
        <li class="">
            <a href="../salary"><i class="fa fa-user link"></i>View Salary</a>
        </li>
          <li>
            <a href="../cashvouchers"><i class="fa fa-file link"></i>Voucher</a>
         </li>
         <li>
            <a href="../purchases"><i class="fa fa-file link"></i>Report</a>
         </li>
                  </ul>
                  
                  <div class="divider"></div>
                  <div id="datepicker">
                  <div class="datepicker datepicker-inline">
                  </div>
                  </div>
                  </aside> 
               </div>
               <div class="col-lg-9">
               <div class="row">
                <div class="col-lg-9">
                  @include('users.accounting.layouts.computepayroll')
               </div>
               <div class="col-lg-3">
               <aside class="right"> 
               <div class="divider"></div>
               <div id="calculator">
  <!-- Screen and clear key -->
  <div class="top">
    <span class="clear">C</span>
    <div class="screen"></div>
  </div>
  
  <div class="keys">
    <!-- operators and other keys -->
    <span>7</span>
    <span>8</span>
    <span>9</span>
    <span class="operator">+</span>
    <span>4</span>
    <span>5</span>
    <span>6</span>
    <span class="operator">-</span>
    <span>1</span>
    <span>2</span>
    <span>3</span>
    <span class="operator">÷</span>
    <span>0</span>
    <span>.</span>
    <span class="eval">=</span>
    <span class="operator">x</span>
  </div>
</div>
<div class="divider"></div>

</aside>
               </div>

                 </div>
         <!-- end of 2nd row -->
         </div>
</div>
         </div>
         </div>
      @include('users.includes.footer')