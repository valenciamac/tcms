<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>PRS</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
      {{HTML::style('css/bootstrap.min.css')}}
      {{HTML::style('css/jquery-ui-1.9.2.custom.css')}}
      {{HTML::style('css/jquery-ui.css')}}
      {{HTML::style('css/application.css')}}
      {{HTML::style('css/datepicker.css')}}
      {{HTML::style('css/font-awesome.css')}}
      {{HTML::style('css/mystyle.css')}}
      {{HTML::script('js/angular.min.js')}}

{{HTML::script('js/jquery-1.9.1.min.js')}}
      <script type="text/javascript">
    $(function(){

        $('#weeklypo').click(function(){
            pageUrl = 'pageweeklypo';
            LoadingPages(pageUrl);

        })
        $('#income').click(function(){
            pageUrl = 'pageincome';
            LoadingPages(pageUrl);
        })
        $('#employee').click(function(){
            pageUrl = 'pageemployee';
            LoadingPages(pageUrl);
        })
        $('#project').click(function(){
            pageUrl = 'pageprojects';
            LoadingPages(pageUrl);
        })

        function LoadingPages(pageUrl)
        {
            $('#maincontent').load(pageUrl);
        }
    })
</script>
      </head>
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
                     <a href="engineer"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
                  </li>
                  <li class="dropdown">
                     <a href="javascript:;" class="dropdown-toggle hover" data-toggle="dropdown">
                     <i class="fa fa-user" style="padding-right:5px;" ></i> {{ ucwords(Auth::user()->fname), '&nbsp;', ucwords(Auth::user()->lname) }}                       
                     <b class="caret hover"></b>
                     </a>
                     <ul class="dropdown-menu pull-right">
                        <li><a href="../../logout">Logout</a></li>
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
            <a href="engineer"><img src="{{asset('img/brand1.png')}}" class="logo"></a>

         </div>

      </div>
      <div id="masthead">
   
   <div class="container">
      
      <div class="masthead-pad">
         <div class="row">
         <div class="masthead-text">
            <h2>Engineer</h2>
          
         </div> <!-- /.masthead-text -->

         </div>
      </div>
      
   </div> <!-- /.container -->   
   
   </div>
         <div class="container mainB">
            <div ng-app class="row">
               <div class="col-md-3">
                 
                  <aside class="right">
                  <div class="divider"></div>
                  <ul class="intended sideMenu">
                     <li>
                        <a href="../../engineer"><i class="fa fa-home link"></i>Dashboard</a>
                     </li>
                     <li class="active">
                        <a href="../../prs"><i class="fa fa-user link"></i>PRS</a>
                     </li>
                  </ul>
                  
                  <div class="divider"></div>
                  <div id="datepicker">
                  <div class="datepicker datepicker-inline">
                  </div>
                  </div>
                  </aside> 
               </div>

<div class = "col-md-9">
<!-- 1st row -->
               <div class="row">
               <div class="shortcut-area">
            
           
                    </div>
               </div>
               <!-- end 1st row -->
               <!-- 2nd row -->
               <div class="row">
               <div class="col-lg-9" id="maincontent">
                  @include('users.engineer.layouts.createprs')
               </div>
               <div class="col-lg-3" >
                  
                  </div>
               
         </div>
         <!-- end of 2nd row -->
         </div>
</div>
         </div>
         </div>
      @include('users.includes.footer')
