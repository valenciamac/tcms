<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Projects</title>
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
   <div class="brand">
      <a href="sysAdmin"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
      </div>
   </div>
   </div>
   <div class="container mainB">
   <div class="row">
   <div class="col-md-3">
      <ul class="sideMenu">
         <li>
            <a href="sysAdmin"><i class="fa fa-home"></i>Dashboard</a>
         </li>
         <li class="active">
            <a href="project"><i class="fa fa-archive"></i>Projects</a>
         </li>
         <li>
            <a href="accounts"><i class="fa fa-user"></i>Accounts</a>
         </li>
         <li>
            <a href="#"><i class="fa fa-archive"></i>Inventory</a>
         </li>
         <li>
            <a href="activities"><i class="fa fa-archive"></i>Activities</a>
         </li>
      </ul>
   </div>
 <div class="col-md-9" >
   
   <!-- content here -->
   <div class="panel-group" id="accordion">

        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#adduser">
          Add New Project
        </a>
    <div id="adduser" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
         {{Form::open(array('route' => 'project.store','class'=>'form-horizontal','role'=>'form'))}}
            <div class="form-group">
             <label for="ProjectName" class="col-sm-2 control-label">Project Name:&nbsp;</label>
             <div class="col-sm-10">
               <input type="text" class="form-control" id="ProjectName" placeholder="" name="projectName">
             </div>
           </div>
           <div class="form-group">
             <label for="ProjectLocation" class="col-sm-2 control-label">Project Location:&nbsp;</label>
             <div class="col-sm-10">
               <input type="text" class="form-control" id="ProjectLocation" placeholder="" name="projectLocation">
             </div>
           </div>
         
           <div class="submit">
            <button type="submit" class="btn btn-primary pull-right">Save Project</button>
            </div>
         {{Form::close()}}

         </div>
         </div><hr>
         </div>

@include('users.sysAdmin.adminLayouts.addProject')
</div>
</div>
</div>
</div>
   @include('users.includes.footer')