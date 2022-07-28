<!DOCTYPE html>
	<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>:: {{ config('app.name', 'WorkBot') }}:: Admin Dashboard</title>
		<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
		<!-- project css file  -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</head>
	<body>
		<div id="mytask-layout" class="theme-indigo">
				@include('layouts.sidebar')
			<div class="main px-lg-4 px-md-4">
				@include('layouts.header')
				@yield('content')
			</div>
		</div>
		<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
		<script src="{{asset('assets/bundles/apexcharts.bundle.js')}}"></script>
		<script src="{{asset('assets/bundles/dataTables.bundle.js')}}"></script>
		<script src="{{asset('assets/js/template.js')}}"></script>
		@stack('script')

		<script>
			@if (session()->has('success'))
				Toast.fire({
					icon: 'success',
					title: "{{ session()->get('success') }}"
				});
			@elseif(session()->has('error'))
				Toast.fire({
					icon: 'error',
					title: "{{ session()->get('error') }}"
				});
			@endif
		</script>

	</body>
	</html> 
