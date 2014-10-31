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
            <a href="../purchasing"><i class="fa fa-home link"></i>Dashboard</a>
         </li>
         <li class="">
            <a href="../prspo"><i class="fa fa-file link"></i>PRS</a>
         </li>
         <li class="active">
            <a href="../rfp"><i class="fa fa-home link"></i>Request For Payment</a>
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
<h3>RFP details</h3>
   <table class="table table-striped">
     <thead>
        <tr>
       <th>Rfp#</th>
       <th>Project</th>
       <th>Supplier</th>
       <th>Reason</th>
       <th>Date requested</th>
       </tr>
       <tbody>
         <tr>
           <td>{{$rfp->id}}</td>
           <td>{{$rfp->project->project_name}}</td>
           <td>{{$rfp->payee}}</td>
           <td>{{$rfp->reason}}</td>
           <td>{{$rfp->created_at->diffForHumans()}}</td>
         </tr>
       </tbody>
     </thead>
   </table>
<h3>PO details</h3>
   <table class="table table-striped">
     <thead>
        <tr>
       <th>PO#</th>
       <th>Project</th>
       <th>Supplier</th>
       <th>Deliver to</th>
       <th>Date created</th>
       </tr>
       <tbody>
       @foreach($po as $p)
         <tr>
           <td>{{$p->po}}</td>
           <td>{{$p->project->project_name}}</td>
           <td>{{$p->suppler_name}}</td>
           <td>{{$p->deliverTo}}</td>
           <td>{{$p->created_at->diffForHumans()}}</td>
         </tr>
      @endforeach
       </tbody>
     </thead>
   </table>
</div>
<div class="col-md-2">
  
</div>
</div>
</div>
</div>
   @include('users.includes.footer')
