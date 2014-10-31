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
   <a href="purchasing"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
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
            <a href="../../prspo"><i class="fa fa-file link"></i>PRS</a>
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
   <div class="col-md-9">
   @foreach($prpo as $pro)
   <h4>{{ucwords($pro->project_name)}}</h4>
   <p>{{ucwords($pro->location)}}</p>
   <table class="table table-striped">
      <thead>
        <tr>
          <th>PO#</th>
          <th>Supplier name</th>
          <th>Address</th>
          <th>Paid</th>
          <th>Complete</th>
          <th>Date created</th>
          <th>Total</th>
          <th>More Info</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $all = 0;
      ?>
   @foreach($pro->pos as $proj)
      <tr>
        <td>{{$proj->id}}</td>
        <td>{{$proj->suppler_name}}</td>
        <td>{{$proj->address}}</td>
        @if(empty($proj->complete))
        <td><span class="label label-danger">Unpaid</span></td>
      @else
         <td><span class="label label-primary">&nbsp;&nbsp;&nbsp;Paid&nbsp;&nbsp;&nbsp;</span></td>   
      @endif
      @if(empty($proj->paid))
        <td><span class="label label-danger">Not complete</span></td>
      @else
         <td><span class="label label-primary">Completed</span></td>   
      @endif   
      
      <td>{{$proj->created_at->diffForHumans()}} ({{$proj->created_at->toFormattedDateString()}})</td>
      <?php
      $summary = 0
      ?>
      @foreach($proj->item as $item)
        <?php
        $total = $item->qty * $item->price;
        $itemtotal = $summary+$total;
        $summary = $itemtotal;
        ?>
      @endforeach
      <td style="text-align:right;">{{number_format($summary,2)}}</td>
      <td><a href="../projectpo/{{$proj->proj_id}}/{{$proj->prs}}/{{$proj->id}}" class="btn btn-primary">View</a></td>
      <?php
        $ok = $summary+$all;
        $all = $ok;
      ?>
       </tr>
   @endforeach
   <tr>
   <td style="text-align:right;" colspan="7"><label>Total:</label>&nbsp;&nbsp;&nbsp;{{number_format($all,2)}}</td>
  </tr>
      </tbody>
   </table>
   @endforeach
   <a href="../purchaseOrder" class="btn btn-primary pull-right">back</a>
</div>

</div>
</div>
</div>

   @include('users.includes.footer')
