<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Dashboard</title>
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
                     <a href="admin"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
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
      <a href="admin"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
      </div>
      </div>
      <div id="masthead">
   
   <div class="container">
      
      <div class="masthead-pad">
         
         <div class="masthead-text">
            <h2>Administrator</h2>
            <p>You have accounts registered in this system</p>
         </div> <!-- /.masthead-text -->
         
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
               <a href="admin"><i class="fa fa-home link"></i>Dashboard</a>
            </li>
            <li>
               <a href="adminPO"><i class="fa fa-user link"></i>Purchases</a>
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
                     <div class="col-md-6 col-sm-6 ui-sortable">
                     <div class="widget widget-stats bg-green">
                     <div class="stats-icon stats-icon-lg"><i class="fa fa-user fa-fw"></i></div>
                     <div class="stats-title underline">Total requests this week</div>
                     <div class="stats-number">{{$mrs->count()}}</div>
                        </div>
                 </div>
               <div class="col-md-6 col-sm-6 ui-sortable">
                     <div class="widget widget-stats bg-blue">
                     <div class="stats-icon stats-icon-lg"><i class="fa fa-tasks fa-fw"></i></div>
                     <div class="stats-title underline">Total PO this week</div>
                     <div class="stats-number">{{$po->count()}}</div>
                        </div>
                 </div>
               </div>
               </div>
               <!-- end 1st row -->
               <!-- 2nd row -->
               <div class="row">
               <div class="col-lg-9">
      @include('users.admin.layouts.body')
      </div>
      <div class="col-lg-3" >
                  <aside class="right1">
                  <ul class="indented aside-progress-stats">
                  <h5>Projects
                     <strong class="pull-right">{{$proj->count()}}</strong>
                  </h5>

                  <li>
                     <strong>Project Name</strong>
                     <strong class="pull-right">Total PO</strong>
                     </li>
                     <hr class="line">
                  @foreach($proj->slice(0,5) as $pro)
                     <li>
                     <strong><a href="project">{{$pro->project_name}}</a></strong>
                     <strong class="pull-right">{{$pro->pos->count()}}</strong>
                     </li>
                  @endforeach
                  </ul>
                  </aside>
                  </div>
                   </div>
         <!-- end of 2nd row -->
         </div>
</div>
         </div>
         </div>
      @include('users.includes.footer')