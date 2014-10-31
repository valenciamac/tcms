<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Purchase Requisition Slip</title>
@include('users.includes.head')
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
                  <a href="purchasing"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
               </li>
               <li class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle hover" data-toggle="dropdown">
                  <i class="fa fa-user" style="padding-right:5px;" ></i> {{ ucwords(Auth::user()->fname), '&nbsp;', ucwords(Auth::user()->lname) }}                  
                  <b class="caret hover"></b>
                  </a>
                  @include('users.purchasing.layouts.topbar') 
               </li>
            </ul>
         </div>
         <!-- /#top-nav -->
      </div>
      <!-- /.container -->
   </div>
   <div id="header">
   <div class="container">
      <a href="purchasing"><img src="{{asset('img/brand1.png')}}" class="logo logo-link"></a>
      </div>
      </div>
      <div id="masthead">
   
   <div class="container">
      
      <div class="masthead-pad">
         <div class="row">
         <div class="masthead-text">
            <h2>Purchasing Department</h2>
            <p>You have a total of {{$prs->count()}} Purchase Requests this week.</p> 
         </div> <!-- /.masthead-text -->

         </div>
      </div>
      
   </div> <!-- /.container -->   
   
</div>
<div class="container mainB">
   <div class="row">
   <div class="col-md-3">
      <aside class="right">
      <div class="divider"></div>
      <ul class="intended sideMenu">
         <li>
            <a href="purchasing"><i class="fa fa-home link"></i>Dashboard</a>
         </li>
         <li class="active">
            <a href="prspo"><i class="fa fa-file link"></i>PRS</a>
         </li>
         <li class="">
            <a href="rfp"><i class="fa fa-home link"></i>Request For Payment</a>
         </li>
      </ul>
      <div class="divider"></div>
         <div id="datepicker">
         <div class="datepicker datepicker-inline">
         </div>
         </div>
      </aside>
   </div>
   <div class="col-md-9">
   @include('users.purchasing.layouts.prsbody')
   </div>
   </div>
   </div>
   </div>
   @include('users.includes.footer')
   