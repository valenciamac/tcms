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
            <a href="accounts"><i class="fa fa-user"></i>Accounts</a>
         </li>
         <li>
            <a href="#"><i class="fa fa-archive"></i>Inventory</a>
         </li>
         <li>
            <a href="../activities"><i class="fa fa-archive"></i>Activities</a>
         </li>
      </ul>
   </div>
   <div class="col-md-9">
   
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#additem">
               ADD NEW ITEM <i class="fa fa-plus"></i>
      </a>

      <!-- Modal -->
            <div class="modal fade" id="additem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Item Name</h4>
                  </div>
                  <div class="modal-body">
                  {{Form::open(array('route' => 'additem.store','class'=>'form-horizontal','role'=>'form'))}}
                     @foreach($template as $tempitem)
                          <input name="sname" class="form-control" type="text" placeholder="Item Name">
                          <input name="tempno" class="form-control" type="hidden" value="{{ $tempitem->id }}">
                     @endforeach
                    {{Form::close()}}
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
  @foreach (array_chunk($standard_item->all(), 4) as $row)
    <div class="row mainB">
      @foreach($row as $sitem)
      <div class="col-md-3">
         <table class="table table-bordered">
            <thead>
               <tr>
                  <th class="th">{{$sitem->sname}} <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#adddesc{{ $sitem->id }}"><i class="ic fa fa-plus"></i></a></th>
               </tr>
            </thead>
            <tbody>
               
               @foreach ($sitem->standard_desc as $desc)
               <tr>
               <td>{{$desc->sdesc}}</td>
               </tr>
               @endforeach
               
            </tbody>
         </table>
      </div>
      <div class="modal fade" id="adddesc{{ $sitem->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Item Description</h4>
                  </div>
                  <div class="modal-body">
                  {{Form::open(array('route' => 'adddesc.store','class'=>'form-horizontal','role'=>'form'))}}
                    
                          <input name="standardid" class="form-control" type="hidden" value="{{ $sitem->id }}">
                          <input name="sdesc" class="form-control" type="text" placeholder="Enter Item Description">
                          
                    
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
  @endforeach
  
   </div>
   </div>
   </div>
   </div>
   @include('users.includes.footer')
