<!DOCTYPE html>
	<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>:: {{ config('app.name', 'WorkBot') }}:: Admin Dashboard</title>
		<link rel="icon" href="/favicon.ico" type="image/x-icon"> <!-- Favicon-->
		<!-- project css file  -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
		<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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

		@include('concaveit_media::includes/styles')
		<script>
			jQuery(document).on('click','.initConcaveMedia',function(){
				var inputName,inputType,imageWidth,imageHeight;
				
				inputName = jQuery(this).attr('data-input-name');
				inputType = jQuery(this).attr('data-input-type');
				imageWidth = jQuery(this).attr('data-image-width');
				imageHeight = jQuery(this).attr('data-image-height');
				imageResize = jQuery(this).attr('data-resize');
				fileLocation = jQuery(this).attr('data-file-location');
				
				jQuery(this).addClass('triggeredButton');
				jQuery.ajax({
					url: "{{route('concave.gallery')}}",
						type: "get",
						data: {inputName:inputName,inputType:inputType,imageWidth:imageWidth,imageHeight:imageHeight,imageResize:imageResize,fileLocation:fileLocation} ,
						success: function (response) {
							jQuery('body').prepend(response);
						},
						error: function(jqXHR, textStatus, errorThrown) {
						console.log(textStatus, errorThrown);
						}
				});
			});
			jQuery(document).ready(function() {
				jQuery('.initConcaveMedia').each(function(key, val) {
					var widthText = jQuery(this).attr('data-image-width');
					var heightText = jQuery(this).attr('data-image-height');
					jQuery(this).after('<small style="color:red;font-style:italic;margin-left: 10px;white-space: nowrap;">Image Size (width:' + widthText + ' X height:' + heightText + ')</small>');
				});
			});

			jQuery(document).on('click','.selected_image_remove',function(){
				var removeItem = jQuery(this).attr('data-file-url');
				jQuery(this).closest('span').remove();
				jQuery('input[value="'+removeItem+'"]').remove();
			});

			jQuery( function() { jQuery( ".sortable").sortable();});

			jQuery(document).ready(function() {
				$('.select2').select2();
			});
			
		</script>
	</body>
	</html> 
