<!DOCTYPE html>
@if ($users->count())
<html class=""><!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Login - TCMS</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
	
	{{HTML::style('css/bootstrap.css')}}
	{{HTML::style('css/font-awesome.css')}}
	{{HTML::style('css/jquery-ui-1.9.2.custom.css')}}
	{{HTML::style('css/Login.css')}}
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

<body style="background-color:#323232;">

<div id="login-container" style="min-width:1000px;">

	<div id="logo" class="hidden-xs">
			<img src="{{asset('img/logo.png')}}" alt="Logo" width="100px;">
	</div>

	<div id="login" style="width:40%; padding-top:140px; margin-left:30%;">

		<h3>Welcome to TCMS Admin.</h3>

		<h5>Please sign in to get access.</h5>

		@if (Session::has('flash_message'))
			<div class="alert alert-danger" role="alert">
				<p>{{ Session::get('flash_message') }}</p>
			</div>
		@endif

		{{Form::open(array('route' => 'sessions.store', 'name' => 'login'))}}

			<div class="form-group" style="padding-top:40px;">
				<input name="username" type="text" class="form-control loginForm" id="username" placeholder="Username">
			</div>

			<div class="form-group">
				<input name="password" type="password" class="form-control loginForm" id="password" placeholder="Password">
			</div>

			<div class="form-group">

				<button type="submit" id="login-btn" class="btn btn-block loginSubmit">Sign in &nbsp; <i class="fa fa-play-circle"></i></button>

			</div>
		{{Form::close()}}

	</div> <!-- /#login -->
 <script type="text/javascript" language="JavaScript">
   document.forms['login'].elements['username'].focus();
   </script>

</div> <!-- /#login-container -->
	
	{{HTML::script('js/jquery-ui-1.9.2.custom.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	{{HTML::script('js/App.js')}}
	{{HTML::script('js/Login.js')}}
	<!--{{HTML::script('js/skin.js')}}-->


<a id="back-to-top" href="#" style="display: none;"><i class="fa fa-chevron-up"></i></a>
@else
@include('users.create')
@endif
</body>
</html>