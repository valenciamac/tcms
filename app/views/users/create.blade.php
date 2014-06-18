<html class=""><!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Login - TCMS</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">


	{{HTML::style('css/css.css')}}
	{{HTML::style('css/font-awesome.min.css')}}
	{{HTML::style('css/bootstrap.min.css')}}
	{{HTML::style('css/jquery-ui-1.9.2.custom.css')}}
	{{HTML::style('css/App.css')}}
	{{HTML::style('css/Login.css')}}
	{{HTML::style('css/custom.css')}}
	{{HTML::script('js/jquery-1.9.1.min.js')}}
	{{HTML::script('js/jquery.cookie.js')}}
	<script type="text/javascript">
		if($.cookie("css")) {
			$("link").attr("href",$.cookie("css"));
		}
	$(document).ready(function() { 
		$("#logo a").click(function() { 
			$("link").attr("href",$(this).attr('rel'));
			$.cookie("css",$(this).attr('rel'), {expires: 365, path: '/'});
			return false;
		});
	});
	</script>
	
</head>

<body>

<div id="login-container">

	<div id="login" class="row">
		<div class="col-md-5">
		<a href="javascript;">
			<img src="{{asset('img/logo.png')}}" alt="Logo" width="200px;">
		</a>
		<h1>Please sign up</h1>

		<h5>Please sign in to get access.</h5>
		</div>
		<div class="col-md-5 pull-right ">
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
					<option value="users.sysAdmin.index">System Administrator</option>
					<option value="users.accounting.index">Accounting</option>
					<option value="users.admin.index">Administrator</option>
					<option value="users.financing.index">Financing</option>
					<option value="users.purchasing.index">Purchasing</option>
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
	
	{{HTML::script('js/jquery-ui-1.9.2.custom.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	{{HTML::script('js/App.js')}}
	{{HTML::script('js/Login.js')}}
	<!--{{HTML::script('js/skin.js')}}-->


<a id="back-to-top" href="#" style="display: none;"><i class="fa fa-chevron-up"></i></a>
</body>
</html>