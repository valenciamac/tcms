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
                  <a href="accounting"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
               </li>
               <li class="dropdown">
                  <a href="javascript;" class="dropdown-toggle hover" data-toggle="dropdown">
                  <i class="fa fa-user" style="padding-right:5px;" ></i> {{ ucwords(Auth::user()->fname), '&nbsp;', ucwords(Auth::user()->lname) }}                       
                  <b class="caret hover"></b>
                  </a>
                  @include('users.accounting.layouts.topbar') 
               </li>
            </ul>
         </div>
         <!-- /#top-nav -->
      </div>
      <!-- /.container -->
   </div>
   <div id="header">
      <div class="container">
         <a href="sysAdmin" class="brand"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
         <div class="row">
            <div class="col-md-3">
               <ul class="sideMenu">
                  <li class="active">
                     <a href="accounting"><i class="fa fa-home"></i>Dashboard</a>
                  </li>
                  <li>
                     <a href="javascript;"><i class="fa fa-user"></i>Payroll</a>
                  </li>
                  <li>
                     <a href="employee"><i class="fa fa-user"></i>Employee</a>
                  </li>
               </ul>
            </div>
            <div class="col-md-9">
               <ul class="nav nav-pills">
                  <li><a href="">Home</a></li>
                  <li class="active"><a href="layouts/addEmployee">Add Employee</a></li>
                  <li><a href="viewEmployee">View Employee Details</a></li>
                  <li><a href="updateEmployee">Update Employee Details</a></li>
               </ul>
               <h2>Add New Employee</h2>
               {{Form::open(array('route' => 'employee.store','class'=>'form-horizontal','role'=>'form'))}}
               <div class="form-group">
                  <label for="role" class="col-sm-3 control-label">Department:&nbsp;</label>
                  <div class="col-sm-9">
                     <select name="department" class="form-control" id="department">
                        <option>Office</option>
                        <option>Work Site</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="role" class="col-sm-3 control-label">Position:&nbsp;</label>
                  <div class="col-sm-9">
                     <select name="position" class="form-control" id="position">
                        <option>Accountant</option>
                        <option>Admin</option>
                        <option>Architect</option>
                        <option>Carpenter</option>
                        <option>Corporate Secretary</option>
                        <option>Driver</option>
                        <option>Electrician</option>
                        <option>Engineer</option>
                        <option>Foreman</option>
                        <option>Gen. Stockman</option>
                        <option>Labor</option>
                        <option>Maintenance</option>
                        <option>Mason</option>
                        <option>Plumber</option>
                        <option>President</option>
                        <option>Programmer</option>
                        <option>Project in-charge</option>
                        <option>Purchaser</option>
                        <option>Site</option>
                        <option>Steelman</option>
                        <option>Tile Settler</option>
                        <option>Vice President</option>
                        <option>Warehouseman</option>
                        <option>Welder</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="fname" class="col-sm-3 control-label" >First Name:&nbsp;</label>
                  <div class="col-sm-9">
                     <input name="fname" type="text" class="form-control" id="fname" value="{{ Input::old('fname') }}">
                     {{ $errors->first('fname', '<span class=errors>:message</span>') }}
                  </div>
               </div>
               <div class="form-group">
                  <label for="lname" class="col-sm-3 control-label">Last Name:&nbsp;</label>
                  <div class="col-sm-9">
                     <input old name="lname" type="text" class="form-control" id="lname" value="{{ Input::old('lname') }}">
                     {{ $errors->first('lname', '<span class=errors>:message</span>') }}
                  </div>
               </div>
               <div class="form-group">
                  <label for="lname" class="col-sm-3 control-label">Rate Per Day:&nbsp;</label>
                  <div class="col-sm-9">
                     <input old name="rate" type="text" class="form-control" id="rate" value="{{ Input::old('rate') }}">
                     {{ $errors->first('lname', '<span class=errors>:message</span>') }}
                  </div>
               </div>
               <div class="form-group">
                  <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:60%;">Save &nbsp; <i class="fa fa-save"></i></button>
               </div>
               {{Form::close()}}
            </div>
         </div>
      </div>
   </div>
   @include('users.includes.footer')