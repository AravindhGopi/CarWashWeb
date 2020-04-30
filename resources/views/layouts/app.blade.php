<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/customstyle.css') }}" rel="stylesheet" type="text/css">
	
	<script src="{{ asset('js/app.js') }}" ></script>
	<script src="{{ asset('js/chart.min.js') }}" ></script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/collection/components/icon/icon.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
		
	
<style>

</style>
</head>

<body class="navbar-bottom">
    <div id="app">
        <!-- Main navbar -->
        
	@include('layouts.topbar')
        <!-- /main navbar -->


        <!-- Page header -->
        <div class="page-header">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
					<span class="breadcrumb-item active">Dashboard</span>
				</div>

				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

			<div class="header-elements d-none">
				<div class="breadcrumb justify-content-center">
					<a href="#" class="breadcrumb-elements-item">
						<i class="icon-comment-discussion mr-2"></i>
						Support
					</a>

					<div class="breadcrumb-elements-item dropdown p-0">
						<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
							<i class="icon-gear mr-2"></i>
							Settings
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
							<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
							<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

			<div class="header-elements d-none mb-3 mb-md-0">
				<div class="d-flex justify-content-center">
					<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-indigo-400"></i> <span>Statistics</span></a>
					<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-indigo-400"></i> <span>Invoices</span></a>
					<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-indigo-400"></i> <span>Schedule</span></a>
				</div>
			</div>
		</div>
	</div>
        <!-- /page header -->


        <!-- Page content -->
        <div class="page-content pt-0">

		<!-- Main sidebar -->
	
		 @include('layouts.includes.sidebar')
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">
		 @include('layouts.includes.notifications')
			<!-- Content area -->
			<div class="content">

						<!-- Traffic sources -->
						<div class="card">
                <main class="py-4">
                        @yield('content')
                    </main>
						</div>
			</div>
			<!-- /content area -->
		</div>
		<!-- /main content -->

	</div>
    </div>
</body>
@include('layouts.includes.script')
@yield('js')
</html>