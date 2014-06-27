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
            </ul>
            
        </div> <!-- /#top-nav -->
        
    </div> <!-- /.container -->
    
</div>

<div id="header">
    <div class="container">
        <a href="sysAdmin" class="brand"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
        <div id="login" style="width:50%; padding-top:20px; margin-left:25%;">
<div class="col-md-9">
                {{Form::open(array('route' => 'users.store','class'=>'form-horizontal','role'=>'form'))}}

            <div class="form-group" style="padding-top:40px;">
                <label for="fname" class="col-sm-3 control-label">First Name:&nbsp;</label>
                <div class="col-sm-9">
                <input name="fname" type="text" class="form-control" id="fname">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            </div>
            </div>
            <div class="form-group">
                <label for="lname" class="col-sm-3 control-label">Last Name:&nbsp;</label>
                <div class="col-sm-9">
                <input name="lname" type="text" class="form-control" id="lname">
                {{ $errors->first('lname', '<span class=errors>:message</span>') }}
            </div>
            </div>
            <div class="form-group">
                <label for="username" class="col-sm-3 control-label">Username:&nbsp;</label>
                <div class="col-sm-9">
                <input name="username" type="text" class="form-control" id="username">
                {{ $errors->first('username', '<span class=errors>:message</span>' ) }}
            </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password:&nbsp;</label>
                <div class="col-sm-9">
                <input name="password" type="password" class="form-control" id="password">
                {{ $errors->first('password', '<span class=errors>:message</span>') }}
            </div>
            </div>
            <div class="form-group">
                <label for="role" class="col-sm-3 control-label">role:&nbsp;</label>
                <div class="col-sm-9">
                <select name="role" class="form-control" id="role">
                    <option value="sysAdmin">System Administrator</option>
                    <option value="accounting" disabled="true">Accounting</option>
                    <option value="admin" disabled="true">Administrator</option>
                    <option value="financing" disabled="true">Financing</option>
                    <option value="purchasing" disabled="true">Purchasing</option>
                </select>
            </div>
            </div>
            <div class="form-group">

                <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:90%;">Sign in &nbsp; <i class="fa fa-play-circle"></i></button>

            </div>
        {{Form::close()}}
            </div>
        </div>
        
</div>
@include('users.includes.footer')