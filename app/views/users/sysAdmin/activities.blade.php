<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Activities</title>
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
                     <a href="sysAdmin"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
                  </li>
                  <li class="dropdown">
                     <a href="javascript:;" class="dropdown-toggle hover" data-toggle="dropdown">
                     <i class="fa fa-user" style="padding-right:5px;" ></i> {{ ucwords(Auth::user()->fname), '&nbsp;', ucwords(Auth::user()->lname) }}                       
                     <b class="caret hover"></b>
                     </a>
                     <ul class="dropdown-menu pull-right">
                        <li class="drop"><a href="create">Create new user</a></li>
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
            <a href="sysAdmin"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
            </div>
            </div>
            <div class="container mainB">
            <div class="row">
               <div class="col-md-3">
                  <ul class="sideMenu">
                     <li>
                        <a href="sysAdmin"><i class="fa fa-home"></i>Dashboard</a>
                     </li>
                     <li>
                        <a href="project"><i class="fa fa-archive"></i>Projects</a>
                     </li>
                     <li>
                        <a href="inventory"><i class="fa fa-archive"></i>Inventory</a>
                     </li>
                     <li>
                        <a href="accounts"><i class="fa fa-user"></i>Accounts</a>
                     </li>
                     <li class="active">
                        <a href="activities"><i class="fa fa-archive"></i>Activities</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-6" >
                  @include('users.sysAdmin.adminLayouts.acts')
               </div>
            </div>
         </div>
      </div>
      @include('users.includes.footer')