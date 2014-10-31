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
                  <a href="../sysAdmin"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
               </li>
               <li class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle hover" data-toggle="dropdown">
                  <i class="fa fa-user" style="padding-right:5px;" ></i> {{ ucwords(Auth::user()->fname), '&nbsp;', ucwords(Auth::user()->lname) }}                       
                  <b class="caret hover"></b>
                  </a>
                  <ul class="dropdown-menu pull-right">
                     <li class="drop"><a href="create">Create new user</a></li>
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
   <div class="brand">
      <a href="../sysAdmin"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
   </div>
   </div>
   </div>
   <div class="container mainB">
   <div class="row">
   <div class="col-md-3">
      <ul class="sideMenu">
         <li>
            <a href="../sysAdmin"><i class="fa fa-home"></i>Dashboard</a>
         </li>
         <li class="active">
            <a href="../project"><i class="fa fa-archive"></i>Projects</a>
         </li>
         <li>
            <a href="../inventory"><i class="fa fa-archive"></i>Inventory</a>
         </li>
         <li>
            <a href="../accounts"><i class="fa fa-user"></i>Accounts</a>
         </li>
         <li>
            <a href="../activities"><i class="fa fa-archive"></i>Activities</a>
         </li>
      </ul>
   </div>
   <div class="col-md-7">
   @include('users.sysAdmin.adminLayouts.projectsaddItems')
   </div>
   <div class="col-md-2">
      <div class="itemheader">
         <div class="headerlabel">
         
         @foreach($project as $addproject)<!-- 
            <a href="{{$addproject->id}}/addtemplate" class="headerplus">
            <i class="fa fa-plus"></i></a> -->

            <!-- Button trigger modal -->
            <a href="#" class="headerplus" data-toggle="modal" data-target="#myModal">
               ADD NEW TEMPLATE <i class="fa fa-plus"></i>
            </a>
            </div>
            </div>
            <div class="itemcontainer">

            @if ($template->count())
            <div class="notemp">
               <label>Add this items</label>
            </div>
               @foreach ($template as $item)
                  
                  <a href="../additem/{{$item->id}}" class="btn btn-primary item">{{$item->tempname}}</a>
                  
               @endforeach
            @else
            <div class="notemp">
               <label>No template Available</label>
            </div>
            @endif
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create a Template</h4>
                  </div>
                  <div class="modal-body">
                  {{Form::open(array('route' => 'addtemplate.store','class'=>'form-horizontal','role'=>'form'))}}
                    <input name="tempname" class="form-control" type="text" placeholder="template name">
                    {{Form::close()}}
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
         @endforeach
         </div>
      </div>
   </div>
   </div>
   </div>
   </div>
   @include('users.includes.footer')