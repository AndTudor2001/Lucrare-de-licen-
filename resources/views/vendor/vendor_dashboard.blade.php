<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('Backend-Admin/assets/images/favicon-32x32.png') }}" type="image/png" />
	<link href="{{ asset('Backend-Admin/assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />

	<!--plugins-->
	<link href="{{ asset('Backend-Admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
	<link href="{{ asset('Backend-Admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('Backend-Admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('Backend-Admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('Backend-Admin/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('Backend-Admin/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('Backend-Admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('Backend-Admin/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('Backend-Admin/assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('Backend-Admin/assets/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('Backend-Admin/assets/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('Backend-Admin/assets/css/header-colors.css') }}" />
	<!-- DataTable -->
	<link href="{{ asset('Backend-Admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<!-- DataTable-->

	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Vendor Dashboard</title>
</head>

<body>
  <!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('vendor.body.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('vendor.body.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			@yield('vendor')
		</div>
		<!--end page wrapper -->


		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('vendor.body.footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->

	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('Backend-Admin/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('Backend-Admin/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('Backend-Admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('Backend-Admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('Backend-Admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('Backend-Admin/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
	<script src="{{ asset('Backend-Admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('Backend-Admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('Backend-Admin/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('Backend-Admin/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('Backend-Admin/assets/plugins/jquery-knob/excanvas.js') }}"></script>
	<script src="{{ asset('Backend-Admin/assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{ asset('Backend-Admin/assets/js/index.js') }}"></script>
	  <script src="{{ asset('Backend-Admin/assets/js/validate.min.js') }}"></script>

<!--Datatable-->
<script src="{{ asset('Backend-Admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
<!--Datatable-->
	<!--app JS-->
	<script src="{{ asset('Backend-Admin/assets/js/app.js') }}"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>

</body>