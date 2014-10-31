<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Add MRS</title>
      @include('users.includes.head')
      {{HTML::script('js/angular.min.js')}}
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
      <a href="admin"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
      </div>
      </div>
      <div class="container mainB">
      <div class="row">
      <div class="col-md-3">
         <aside class="right">
      <div class="divider"></div>
      <ul class="intended sideMenu">
         <li>
               <a href="../admin"><i class="fa fa-home link"></i>Dashboard</a>
            </li>
            <li>
               <a href="../adminPO"><i class="fa fa-user link"></i>Purchases</a>
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
   <!-- content here -->
   @foreach($project as $proj)
   <button class="btn btn-primary" data-toggle="modal" data-target="#addmrs">
              Request Materials
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addmrs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Input MRS number</h4>
                  </div>
                  <div class="modal-body">
                    {{Form::open(array('route' => 'mrs.store','class'=>'form-horizontal','role'=>'form'))}}

                       <input type="text" class="form-control" name="mrsno">
                       <input type="hidden" readonly class="form-control" name="projid" value="{{$proj->id}}">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Proceed</button>
                    {{Form::close()}}
                  </div>
                </div>
              </div>
            </div>
   <table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th>MRS Number</th>
            <th>Item Name</th>
         </tr>
      </thead>
      <tbody>
      @foreach($mrs as $mrsitem)
      
         <tr>
            <td>{{$mrsitem->mrsno}}</td>
            <td><a href="{{$mrsitem->project->id}}/{{$mrsitem->mrsno}}" class="btn btn-primary">View Details</a></td>
        
         </tr>
         @endforeach
      </tbody>
   </table>
      </div>
   </div>
</div>
</div>
</div>
</div>
@endforeach
      @include('users.includes.footer')