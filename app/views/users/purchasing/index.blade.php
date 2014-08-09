@include('users.includes.head')
<script type="text/javascript">
   var set=0;
   ver=parseInt(navigator.appVersion);
   ie4=(ver>3  && navigator.appName!="Netscape")?1:0;
   function play() 
   {
    if (ie4) 
        document.all['BGSOUND_ID'].src='sound1.wav';
   }
   function setv()
   {
    var hr2    = document.getElementById('hour2').value;
    var min2   = document.getElementById('min2').value;
    var sec2   = document.getElementById('sec2').value;
    if(hr2<10)
     hr2='0'+hr2;
    if(min2<10)
     min2='0'+min2;
    if(sec2<10)
     sec2='0'+sec2;
    document.getElementById('d2').value=hr2+'*'+min2+'*'+sec2;
    set=1;
    document.getElementById('msg').innerHTML='Alarm is ON';
   }
   function dis()
   {
    var dat= new Date();
   
    var hr=dat.getHours();
    var min=dat.getMinutes();
    var sec=dat.getSeconds();
    if(hr<10)
     hr='0'+hr;
    if(min<10)
     min='0'+min;
    if(sec<10)
     sec='0'+sec;
    document.getElementById('hour').value=hr;
    document.getElementById('min').value=min;
    document.getElementById('sec').value=sec; 
    var dat2v=document.getElementById('d2').value;
    var dats =hr+'*'+min+'*'+sec;
    if(dat2v==dats && set)
    {
      play();
      alert("Hey Its time to Go!");  
      set=0;
      document.getElementById('msg').innerHTML='Alarm is OFF';
    }
    setTimeout("dis()",500);
   }
   function prtsel(x)
   {
      for(var i=0;i<x;i++)
        document.write("<option value="+i+">"+i+"</option>");
   }
</script>
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
         <li class="active">
            <a href="purchasing"><i class="fa fa-home"></i>Dashboard</a>
         </li>
         <li>
            <a href="purchaseOrder"><i class="fa fa-user"></i>Purchase Order</a>
         </li>
         <li class="">
            <a href="payment"><i class="fa fa-home"></i>Request For Payment</a>
         </li>
      </ul>
   </div>
   @include('users.purchasing.layouts.body')
   @include('users.includes.footer')