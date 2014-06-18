<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Dashboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

	{{HTML::style('css/css.css')}}
	{{HTML::style('css/font-awesome.css')}}
	{{HTML::style('css/bootstrap.css')}}
	{{HTML::style('css/jquery-ui-1.9.2.custom.css')}}
	{{HTML::style('css/App.css')}}
	{{HTML::style('css/custom.css')}}
	{{HTML::style('css/application.css')}}
	{{HTML::style('css/dashboard.css')}}
	{{HTML::style('css/mystyle.css')}}
	{{HTML::script('js/jquery-1.9.1.min.js')}}
	{{HTML::script('js/jquery.flot.js')}}
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
<div id="wrapper">
    <div id="topbar">
	
	<div class="container">
		
		<a href="javascript:;" id="menu-trigger" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
			<i class="icon-cog"></i>
		</a>
	
		<div id="top-nav">			
			<ul class="pull-right">
				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle hover" data-toggle="dropdown">
						<i class="fa fa-user" style="padding-right:5px;" ></i> {{ ucwords(Auth::user()->fname), '&nbsp;', ucwords(Auth::user()->lname) }}						
						<b class="caret"></b>
					</a>
					
					<ul class="dropdown-menu pull-right">
						<li><a href="logout">Logout</a></li>
					</ul> 
				</li>
			</ul>
			
		</div> <!-- /#top-nav -->
		
	</div> <!-- /.container -->
	
</div>

<div id="header">
	<div class="container">
		<a href="sysAdmin" class="brand"><img src="{{asset('img/brand.png')}}" class="logo"></a>
		<div class="row">
			<div class="col-md-3" style="color:#000;">
			@include('users/sysAdmin/adminLayouts/sidemenu')
			</div>

			<div class="col-md-9">
				@include('users/financing/layouts/financialReports')
			</div>
		</div>
		
	</div>
</div>

	
