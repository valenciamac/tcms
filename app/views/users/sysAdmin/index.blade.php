<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Dashboards</title>
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
                     <a href="sysAdmin"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
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
            <a href="sysAdmin"><img src="{{asset('img/brand1.png')}}" class="logo"></a>

         </div>

      </div>
      <div id="masthead">
   
   <div class="container">
      
      <div class="masthead-pad">
         <div class="row">
         <div class="masthead-text">
            <h2>System Administrator</h2>
            @if($project->count())
               @if($project->count() > 1)
               <p>Your company is currently working on {{$project->count()}} projects</p>
               @else
               <p>Your company is currently working on {{$project->count()}} project</p>
               @endif
            @else
            <p>Your company has no project yet</p>
            @endif
         </div> <!-- /.masthead-text -->

         </div>
      </div>
      
   </div> <!-- /.container -->   
   
   </div>
         <div class="container mainB">
            <div ng-app class="row">
               <div class="col-md-3">
                  <?php

                  $drive_info = [];
                  $drive_letter = 'C';

                  while(true) {
                     if(is_dir($drive_letter.':')) {
                        try {
                           $total = round(disk_total_space($drive_letter.':')/1024/1024/1024,2);
                           $free = round(disk_free_space($drive_letter.':')/1024/1024/1024,2);
                           $used = $total - $free;
                           $perfree = round(($free/$total)*100,2);
                           $perused = round(($used/$total)*100,2);
                        }
                        catch(Exception $e) {
                           $total = 0;
                           $free = 0;
                           $used = 0;
                           $perfree = 0;
                           $perused = 0;
                        }

                        $drive_info[] = [
                           'drive_letter' => $drive_letter.':',
                           'total' => $total,
                           'free' => $free,
                           'used' => $used,
                           'perfree' => $perfree,
                           'perused' => $perused
                        ];
                     }
                     if($drive_letter == 'Z') {
                        break;
                     }
                     $drive_letter++;
                  }

                  ?>
                  <aside class="right">
                  <div class="divider"></div>
                  <ul class="intended sideMenu">
                     <li class="active">
                        <a href="sysAdmin"><i class="fa fa-home link"></i>Dashboard</a>
                     </li>
                     <li>
                        <a href="accounts"><i class="fa fa-user link"></i>Accounts</a>
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
               <div class="col-md-3 col-sm-6 ui-sortable">
                     <div class="widget widget-stats bg-green">
                     <div class="stats-icon stats-icon-lg"><i class="fa fa-tasks fa-fw"></i></div>
                     <div class="stats-title underline">Total Projects</div>
                     <div class="stats-number">{{$project->count()}}</div>
                     <div class="stats-link">
                     <a href="javascript:;" id="project">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                     </div>
                        </div>
                 </div>
                     <div class="col-md-3 col-sm-6 ui-sortable">
                     <div class="widget widget-stats bg-blue">
                     <div class="stats-icon stats-icon-lg"><i class="fa fa-user fa-fw"></i></div>
                     <div class="stats-title underline">Total PO this week</div>
                     <div class="stats-number">{{$po->count()}}</div>
                     <div class="stats-link">
                     <a href="javascript:;" id="weeklypo">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                     </div>
                        </div>
                 </div>
               <div class="col-md-3 col-sm-6 ui-sortable">
                     <div class="widget widget-stats bg-red">
                     <div class="stats-icon stats-icon-lg"><i class="fa fa-users fa-fw"></i></div>
                     <div class="stats-title underline">Total Employees</div>
                     <div class="stats-number">{{$emp->count()}}</div>
                     <div class="stats-link">
                     <a href="javascript:;" id="employee">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                     </div>
                        </div>
                 </div>
           
                    </div>
               </div>
               <!-- end 1st row -->
               <!-- 2nd row -->
               <div class="row">
               <div class="col-lg-9" id="maincontent">
                  @include('users.sysAdmin.project')
               </div>
               <div class="col-lg-3" >
                  <aside class="right1">
                  <ul class="indented aside-progress-stats">
                     <li>
                     <strong><a href="accounts">Total Accounts</a></strong>
                     <strong class="pull-right">{{$user->count()}}</strong>
                     </li>
                  </ul>
                     <div class="divider"></div>
                  @for($i = 0; $i < count($drive_info); $i++)
                     <ul class="indented aside-progress-stats">
                        <li>
                        <strong>Used space in {{ $drive_info[$i]['drive_letter'] }}</strong>
                        <strong class="pull-right">{{ $drive_info[$i]['perused'] }}%</strong>
                        @if($drive_info[$i]['perused'] > 75 )
                        <div class="progress progress-danger slim">
                          <div class="bar" data-percentage="{{ $drive_info[$i]['perused'] }}" style="width:{{ $drive_info[$i]['perused'] }}%;"></div>
                          </div>
                        @else
                           <div class="progress slim">
                          <div class="bar" data-percentage="{{ $drive_info[$i]['perused'] }}" style="width:{{ $drive_info[$i]['perused'] }}%;"></div>
                          </div>
                        @endif
                        </li>
                     </ul>
                  @endfor                  
                  <div class="divider"></div>
                  
                  </aside>
                  </div>
               
         </div>
         <!-- end of 2nd row -->
         </div>
</div>
         </div>
         </div>
      @include('users.includes.footer')
