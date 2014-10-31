<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Add Item</title>
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
                  <a href="purchasing"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
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
    <a href="purchasing"><img src="{{asset('img/brand1.png')}}" class="logo logo-link"></a>
   </div>
   </div>
   <div class="container mainB">
   <div class="row">
   <div class="col-md-3">
       <aside class="right">
      <div class="divider"></div>
      <ul class="intended sideMenu">
         <li class="">
            <a href="purchasing"><i class="fa fa-home link"></i>Dashboard</a>
         </li>
         <li class="">
            <a href="prspo"><i class="fa fa-file link"></i>PRS</a>
         </li>
         <li class="active">
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
   <div class="col-md-7">

        @if($rfp->count())
          <table class="table table-striped">
            <thead>
              <tr>
                <th>RFP Number</th>
                <th>Payee</th>
                <th>Reason</th>
                <th>View</th>
              </tr>
            </thead>
            <tbody>
             
               @foreach($rfp as $r)
                <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->payee}}</td>
                <td>{{$r->reason}}</td>
                <td><a href="rfp/{{$r->id}}" class="btn btn-primary btn-full-width">View Details</a></td>
                 </tr>
              @endforeach

            </tbody>
          </table>
          @else
          <center><label>No payment requests yet.</label></center>
         @endif
</div>
<div class="col-md-2">
  <aside class="notright">
      <div class="divider"></div>
      <label style="color:#fff;">Request Items From:</label>
      <div class="intended sideMenu">
         <div class="main-search">
         {{Form::open(array('route' => 'rfp.store','class'=>'form-horizontal','role'=>'form'))}}
         <div class="main-search"><!-- 
            <label for="main-search"><i class="fa fa-search"></i></label>
                      <input id="main-search" type="text" placeholder="Search..."> -->
                  </div>
                      <select name="rfpname" class="form-control select">
                        @foreach($suppliers as $supp)
                           <option value="{{$supp->supplier_name}}">{{$supp->supplier_name}}</option>
                        @endforeach
                     </select>
                      <select name="project" class="form-control select">
                        @foreach($proj as $pro)
                           <option value="{{$pro->project_name}}">{{$pro->project_name}}</option>
                        @endforeach
                     </select>
                     <div class="aside-buttons">
                     @if($suppliers->count())
                     @if($proj->count())
                     <button type="submit" class="btn btn-primary">Request</button>
                     @endif
                     @endif
                     </div>
          {{Form::close()}}
                  </div>
      </div>
      <div class="divider"></div>
      </aside>
</div>
</div>
</div>
</div>
   @include('users.includes.footer')
