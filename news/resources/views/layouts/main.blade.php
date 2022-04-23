<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>{{setting('site.title')}} </title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Bootstrap  -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/bootstrap.css') }}" >

	<!-- Theme Style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/style.css') }}">

	<!-- Colors -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/colors/color1.css') }}" id="colors">
   
	<!-- Animation Style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/animate.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	 
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>

	<!-- Favicon and touch icons  -->
	<link href="{{ asset('assets/icon/apple-touch-icon-144-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="144x144">
	<link href="{{ asset('assets/icon/apple-touch-icon-114-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="114x114">
	<link href="{{ asset('assets/icon/apple-touch-icon-72-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="72x72">
	<link href="{{ asset('assets/icon/apple-touch-icon-57-precomposed.png') }}" rel="apple-touch-icon-precomposed">
	<link href="{{ asset('assets/icon/favicon.png') }}" rel="shortcut icon">

	<!--[if lt IE 9]>
		<script src="{{ asset('assets/javascript/html5shiv.js ') }}"></script>
		<script src="{{ asset('assets/javascript/respond.min.js ') }}"></script>
	<![endif]-->
</head>
<body>
    
    @include('layouts.header')

    @yield('content');

    @include('layouts.footer')

	
	<!-- Javascript -->
	<script type="text/javascript" src="{{ asset('assets/javascript/jquery.min.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/bootstrap.min.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/jquery.easing.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/matchMedia.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/jquery-waypoints.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/jquery.flexslider.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/jquery.transit.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/jquery.leanModal.min.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/jquery.tweet.min.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/jquery.cookie.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/switcher.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/jquery.doubletaptogo.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/smoothscroll.js ') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/main.js ') }}"></script>
</body>

</html>