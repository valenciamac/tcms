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
                  @include('users.purchasing.layouts.topbar') 
               </li>
            </ul>
         </div>
         <!-- /#top-nav -->
      </div>
      <!-- /.container -->
   </div>
   <div id="header">
   <div class="container">
   <a href="purchasing" class="brand"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
   <div class="row">
   <div class="col-md-3">
      <ul class="sideMenu">
         <li class="">
            <a href="purchasing"><i class="fa fa-home"></i>Dashboard</a>
         </li>
         <li>
            <a href="purchaseOrder"><i class="fa fa-user"></i>Purchase Order</a>
         </li>
         <li class="active">
            <a href="payment"><i class="fa fa-user"></i>Create RFP</a>
         </li>
      </ul>
   </div>
   @include('users.purchasing.layouts.edit4')
   @include('users.includes.footer')	