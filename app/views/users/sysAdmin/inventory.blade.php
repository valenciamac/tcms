<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Inventory</title>
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
                  <a href="../sysAdmin"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
               </li>
               <li class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle hover" data-toggle="dropdown">
                  <i class="fa fa-user" style="padding-right:5px;" ></i> {{ ucwords(Auth::user()->fname), '&nbsp;', ucwords(Auth::user()->lname) }}                       
                  <b class="caret hover"></b>
                  </a>
                  <ul class="dropdown-menu pull-right">
                     <li class="drop"><a href="create">Create new user</a></li>
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
   <div class="container">\
      <a href="../sysAdmin"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
   </div>
   </div>
   <div id="masthead">
   
   <div class="container">
      
      <div class="masthead-pad">
         <div class="row">
         <div class="masthead-text">
            <h2>Inventory</h2>
            @if($inv_item->count())
            <p>You have {{$inv_item->count()}} items in this project.</p>
            @else
              <p>You have no items yet.</p>
            @endif
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
                        <a href="../sysAdmin"><i class="fa fa-home link"></i>Dashboard</a>
                     </li>
                     <li>
                        <a href="../accounts"><i class="fa fa-user link"></i>Accounts</a>
                     </li>
                     <li>
                        <a href="../employees"><i class="fa fa-user link"></i>Employees</a>
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
    @foreach($project as $addproject)

    <label class="itemlabel">
        <p>Inventory for {{ucwords($addproject->project_name)}} located in {{ucwords($addproject->location)}}</p>
         </label>
         
         @if($inv_item->count())
         <table class="table table-bordered">
            <thead>
              <tr>
                <th>Item Name</th>
                <th>Description</th>
                <th>stock</th>
              </tr>
            </thead>
            <tbody>
            @foreach($inv_item as $inventory)
              <tr>
                <td>{{ $inventory->invName }}</td>
                <td>{{ $inventory->idesc }}</td>
                <td>{{ $inventory->qty }}</td>
              </tr>
            @endforeach
            
            </tbody>
          </table>
          @else
          <div class="notemp">
            <h3><label>No Items yet</label></h3>
          </div>
          
          @endif
    @endforeach
   </div>
   </div>
   </div>
   </div>
   @include('users.includes.footer')