<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Create new user</title>
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
                <a href="sysAdmin"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle hover" data-toggle="dropdown">
                        <i class="fa fa-user" style="padding-right:5px;" ></i> {{ ucwords(Auth::user()->fname), '&nbsp;', ucwords(Auth::user()->lname) }}                       
                        <b class="caret hover"></b>
                    </a>
                    
                    <ul class="dropdown-menu pull-right">
                        <li class="drop"><a href="create">Create new user</a></li>
                        <li><a href="logout">Logout</a></li>
                    </ul> 
                </li>

            </ul>
            
        </div> <!-- /#top-nav -->
        
    </div> <!-- /.container -->
    
</div>

<div id="header">
    <div class="container">
        <a href="sysAdmin" class="brand"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
        <div class="row">

<div id="login-container">

	<div id="login" class="row">
		<div class="container" style="color:#1f1f1f;">
		{{Form::open(array('route' => 'users.store','class'=>'form-horizontal','role'=>'form'))}}

			<div class="form-group" style="padding-top:40px;">
				<label for="fname" class="col-sm-3 control-label">First Name:&nbsp;</label>
				<div class="col-sm-9">
				<input name="fname" type="text" class="form-control" id="fname">
			</div>
			</div>
			<div class="form-group">
				<label for="lname" class="col-sm-3 control-label">Last Name:&nbsp;</label>
				<div class="col-sm-9">
				<input name="lname" type="text" class="form-control" id="lname">
			</div>
			</div>
			<div class="form-group">
				<label for="username" class="col-sm-3 control-label">Username:&nbsp;</label>
				<div class="col-sm-9">
				<input name="username" type="text" class="form-control" id="username">
			</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-3 control-label">Password:&nbsp;</label>
				<div class="col-sm-9">
				<input name="password" type="password" class="form-control" id="password">
			</div>
			</div>
			<div class="form-group">
				<label for="role" class="col-sm-3 control-label">role:&nbsp;</label>
				<div class="col-sm-9">
				<select name="role" class="form-control" id="role">
					<option value="sysAdmin">System Administrator</option>
					<option value="accounting">Accounting</option>
					<option value="admin">Administrator</option>
					<option value="financing">Financing</option>
					<option value="purchasing">Purchasing</option>
				</select>
			</div>
			</div>
			<div class="form-group">

				<button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:90%;">Sign in &nbsp; <i class="fa fa-play-circle"></i></button>

			</div>
		{{Form::close()}}
		</div>
	</div> <!-- /#login -->


</div> <!-- /#login-container -->
</div>
</div>
@include('users.includes.footer')