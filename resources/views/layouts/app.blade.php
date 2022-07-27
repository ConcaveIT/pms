<!DOCTYPE html>
	<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>:: {{ config('app.name', 'WorkBot') }}:: Admin Dashboard</title>
		<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
		<!-- project css file  -->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>

	<div id="mytask-layout" class="theme-indigo">
    		@include('layouts.sidebar')
		<div class="main px-lg-4 px-md-4">
			@include('layouts.header')
			@yield('content')
		</div>
	</div>


		<!-- Jquery Core Js -->
		<script src="assets/bundles/libscripts.bundle.js"></script>
		<!-- Plugin Js-->
		<script src="assets/bundles/apexcharts.bundle.js"></script>
		<!-- Jquery Page Js -->
		<script src="assets/js/template.js"></script>
		<script src="assets/js/page/hr.js"></script>
	</body>
	</html> 
