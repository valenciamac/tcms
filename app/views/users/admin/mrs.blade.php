<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Material Requisition Slip</title>
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
                     <a href="admin"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
                  </li>
                  <li class="dropdown">
                     <a href="javascript:;" class="dropdown-toggle hover" data-toggle="dropdown">
                     <i class="fa fa-user" style="padding-right:5px;" ></i> {{ ucwords(Auth::user()->fname), '&nbsp;', ucwords(Auth::user()->lname) }}                       
                     <b class="caret hover"></b>
                     </a>
                     <ul class="dropdown-menu pull-right">
                        <li><a href="logout">Logout</a></li>
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
      <a href="admin"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
      </div>
      </div>
      <div class="container mainB">
      <div class="row">
      <div class="col-md-3">
         <aside class="right">
      <div class="divider"></div>
      <ul class="intended sideMenu">
         
            <li>
               <a href="admin"><i class="fa fa-home link"></i>Dashboard</a>
            </li>
            <li>
               <a href="adminPO"><i class="fa fa-user link"></i>Purchases</a>
            </li>
      </ul>
      <div class="divider"></div>
         <div id="datepicker">
         <div class="datepicker datepicker-inline">
         </div>
         </div>
      </aside>
      </div>
      @include('users.admin.layouts.mrsBody')
      @include('users.includes.footer')