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
		<script src="{{ asset('assets/vendors/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

	</head>
	<body>
		<div id="mytask-layout" class="theme-indigo">
				@include('layouts.sidebar')
			<div class="main px-lg-4 px-md-4">
				@include('layouts.header')
				@yield('content')
			</div>
			<form id="delete-form" action="#" method="POST" class="d-none">@csrf @method('delete')</form>
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


			tinymce.init({
				selector: '.textEditor',
				height: 300,
				theme: 'modern',
				plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern code help',
				toolbar1: 'fontselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | code toc',
				image_advtab: true,
				font_formats: 'Arial Black=arial black,avant garde;Indie Flower=indie flower, cursive;Times New Roman=times new roman,times;Roboto=roboto'
			});
		</script>

	</body>
	</html> 
