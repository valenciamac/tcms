<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Dashboard</title>
      @include('users.includes.head')
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
      <a href="admin" class="brand"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
      <div class="row">
      <div class="col-md-3">
         <ul class="sideMenu">
            <li class="active">
               <a href="admin"><i class="fa fa-home"></i>Dashboard</a>
            </li>
            <li>
               <a href="mrs"><i class="fa fa-home"></i>MRS</a>
            </li>
            <li>
               <a href="adminPO"><i class="fa fa-user"></i>Purchases</a>
            </li>
            <li>
               <a href="inventory"><i class="fa fa-user"></i>Inventory</a>
            </li>
         </ul>
      </div>
      @include('users.admin.layouts.body')
      @include('users.includes.footer')