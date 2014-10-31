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
                     <li><a href="../../../logout">Logout</a></li>
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
            <a href="../../../purchasing"><i class="fa fa-home link"></i>Dashboard</a>
         </li>
         <li class="">
            <a href="../../prspo"><i class="fa fa-file link"></i>PRS</a>
         </li>
         <li class="active">
            <a href="rfp"><i class="fa fa-home link"></i>Payment</a>
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
<table class="table table-bordered">
	<thead>
	<tr>
		<th>P.O. Number</th>
		<th>D.R. Number</th>
		<th>S.I. Number</th>
		<th>C.I. Number</th>
		<th>S.O. Number</th>
		<th>Others</th>
		<th>Description</th>
		<th>Amount</th>
	</tr>
	</thead>
	<tbody>
  <?php
  $all = 0;
  ?>
		@foreach($po as $opo)
    <?php 
$summarysi = 0;
$summarysoi = 0;
$summaryci = 0;
$summarydr = 0;
?>
		<tr>
			<td>{{$opo->po}}
			</td>
			<td>
			@if($opo->dr->count())
         
           @foreach($opo->dr as $dr)
          
           @foreach($dr->drinv as $dri)
           <?php
            $totaldr =  $dri->qty * $dri->price;

            $sumdr = $summarydr+$totaldr;
            $summarydr = $sumdr;
            ?>
			
         @endforeach
         ADV<input type="hidden" name="dr" readonly value="ADV">
         @endforeach
        @else
       -
			@endif
			</td>
			<td>
			@if($opo->si->count())
           @foreach($opo->si as $si)
           
           @foreach($si->invoiceitem as $inv)
           <?php
            $totalsi =  $inv->iqty * $inv->iprice;

            $sumsi = $summarysi+$totalsi;
            $summarysi = $sumsi;
            ?>
         @endforeach
         
         @endforeach
         ADV<input type="hidden" name="si" readonly value="ADV">
         @else
         -
			@endif
			</td>
			<td>
			@if($opo->ci->count())
          @foreach($opo->ci as $ci)
          
           @foreach($ci->ciitem as $cii)
           <?php
            $totalci =  $cii->iqty * $cii->iprice;

            $sumci = $summaryci+$totalci;
            $summaryci = $sumci;
            ?>
         @endforeach
         @endforeach
			ADV<input type="hidden" name="ci" readonly value="ADV">
			@endif
			</td>
			<td>
			@if($opo->so->count())
         @foreach($opo->so as $so)
           
           @foreach($so->soitem as $soi)
           <?php
            $totalsoi =  $soi->iqty * $soi->iprice;

            $sumsoi = $summarysoi+$totalsoi;
            $summarysoi = $sumsoi;
            ?>
         @endforeach
         @endforeach
			ADV<input type="hidden" name="so" readonly value="ADV">
			@endif
			</td>
			<td>-<input type="hidden" name="others" readonly value="-"></td>
			<td>{{$opo->prs}}<input type="hidden" name="ms" readonly value="{{$opo->prs}}"></td>
			<td>

   <?php

   $summary = 0;
       ?>
   <?php
            $total =  $summarysi+$summarysoi+$summarydr+$summaryci;

            $sum = $summary+$total;
            $summary = $sum;
           
        $totalpo =  $summary;

            $sumpo = $all+$totalpo;
            $all = $sumpo;
 ?>
		Php {{number_format($summary,2)}}
				<input type="hidden" name="amount" readonly value="">
			</td>
			</tr>
		@endforeach
<tr>
	<td colspan="7"></td>
   
	<td>Php {{number_format($all,2)}}</td>
</tr>
		
	</tbody>
</table>   
         
</div>
</div>
</div>
</div>
   @include('users.includes.footer')
