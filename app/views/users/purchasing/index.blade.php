<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Dashboard</title>
@include('users.includes.head')
{{HTML::script('js/jquery-1.9.1.min.js')}}
      <script type="text/javascript">
    $(function(){

        $('#purpage').click(function(){
            pageUrl = 'purpage';
            LoadingPages(pageUrl);

        })
        $('#purpageunpaid').click(function(){
            pageUrl = 'purpageunpaid';
            LoadingPages(pageUrl);

        })
        $('#purpagepaid').click(function(){
            pageUrl = 'purpagepaid';
            LoadingPages(pageUrl);

        })
        $('#purpageduedate').click(function(){
            pageUrl = 'purpageduedate';
            LoadingPages(pageUrl);

        })
        function LoadingPages(pageUrl)
        {
            $('#maincontent').load(pageUrl);
        }
    })
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
   <a href="purchasing"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
   </div>
   </div>
   <div id="masthead">
   
   <div class="container">
      
      <div class="masthead-pad">
         <div class="row">
         <div class="masthead-text">
            <h2>Purchasing Department</h2>
            <p>You have a total of {{$po->count()}} Purchase Orders this week.</p>
         </div> <!-- /.masthead-text -->

         </div>
      </div>
      
   </div> <!-- /.container -->   
   
</div>
   <div class="container mainB">
   <div class="row">
   <div class="col-md-3">
      <aside class="right">
      <div class="divider"></div>
      <ul class="intended sideMenu">
         <li class="active">
            <a href="purchasing"><i class="fa fa-home link"></i>Dashboard</a>
         </li>
         <li class="">
            <a href="prspo"><i class="fa fa-file link"></i>PRS</a>
         </li>
         <li class="">
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
   <div class="col-md-9">
   <!-- 1st row -->
               <div class="row">
               <div class="shortcut-area">
                     <div class="col-md-3 col-sm-6 ui-sortable">
                     <div class="widget widget-stats bg-green">
                     <div class="stats-icon stats-icon-lg"><i class="fa fa-user fa-fw"></i></div>
                     <div class="stats-title underline">Purchases</div>
                     <div class="stats-number">{{$allpo->count()}}</div>
                     <div class="stats-link">
                     <a href="javascript:;" id="purpage">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                     </div>
                        </div>
                 </div>
                     <div class="col-md-3 col-sm-6 ui-sortable">
                     <div class="widget widget-stats bg-yellow">
                     <div class="stats-icon stats-icon-lg"><i class="fa fa-user fa-fw"></i></div>
                     <div class="stats-title underline">Paid Purchases</div>
                     <div class="stats-number">{{$paids->count()}}</div>
                     <div class="stats-link">
                     <a href="javascript:;" id="purpagepaid">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                     </div>
                        </div>
                 </div>
               <div class="col-md-3 col-sm-6 ui-sortable">
                     <div class="widget widget-stats bg-blue">
                     <div class="stats-icon stats-icon-lg"><i class="fa fa-tasks fa-fw"></i></div>
                     <div class="stats-title underline">Unpaid Purchases</div>
                     <div class="stats-number">{{$unpaid->count()}}</div>
                     <div class="stats-link">
                     <a href="javascript:;" id="purpageunpaid">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                     </div>
                        </div>
                 </div>
               <div class="col-md-3 col-sm-6 ui-sortable">
                     <div class="widget widget-stats bg-red">
                     <div class="stats-icon stats-icon-lg"><i class="fa fa-users fa-fw"></i></div>
                     <div class="stats-title underline">Due Dates This Week</div>
                     <div class="stats-number">{{$due->count()}}</div>
                     <div class="stats-link">
                     <a href="javascript:;" id="purpageduedate">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                     </div>
                        </div>
                 </div>
                    </div>
               </div>
               <!-- end 1st row -->
               <div class="row">
               <div  class="col-md-9" id="maincontent">
   @include('users.purchasing.layouts.body')
</div>
<div class="col-md-3">
   
</div>
</div>
</div>
</div>
</div>
   
   @include('users.includes.footer')