<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>San Pedro College</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link href="{{ asset('/img/San_Pedro_College_logo.png') }}" rel="icon">
		<link href="{{ asset('/img/San_Pedro_College_logo.png') }}" rel="apple-touch-icon">
		 <!-- summernote -->
		 <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
		 <!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">
		
		<!-- Vue link -->
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body class="sidebar-mini layout-fixed text-sm accent-navy">

		<div class="wrapper" id="app">
		<!-- Navbar -->
			<nav class="main-header navbar navbar-expand text-sm navbar-dark navbar-navy">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
			
					<li class="nav-item d-none d-sm-inline-block">
						@if(auth::user()->type == 'Student')
							<a href="#" class="nav-link">SPC - {{ auth::user()->type }} Portal</a>
						@else
							<a href="#" class="nav-link">SPC - {{ auth::user()->type }}</a>
						@endIf
					</li>
				</ul>

				<!-- SEARCH FORM -->
				<!-- <form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
					<button class="btn btn-navbar" type="submit">
						<i class="fas fa-search"></i>
					</button>
					</div>
				</div>
				</form> -->

				<!-- Right navbar links -->
				<ul class="navbar-nav ml-auto">
				<!-- Messages Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
					<i class="fas fa-comments"></i>
					<!-- <span class="badge badge-danger navbar-badge">3</span> -->
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<a href="#" class="dropdown-item">
						<!-- Message Start -->
						<div class="media">
						<img src="/img/spc_logo.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
						<div class="media-body">
							<h3 class="dropdown-item-title">
							Brad Diesel
							<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
							</h3>
							<p class="text-sm">Call me whenever you can...</p>
							<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
						</div>
						</div>
						<!-- Message End -->
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<!-- Message Start -->
						<div class="media">
						<img src="/img/spc_logo.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
						<div class="media-body">
							<h3 class="dropdown-item-title">
							John Pierce
							<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
							</h3>
							<p class="text-sm">I got your message bro</p>
							<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
						</div>
						</div>
						<!-- Message End -->
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<!-- Message Start -->
						<div class="media">
						<img src="/img/spc_logo.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
						<div class="media-body">
							<h3 class="dropdown-item-title">
							Nora Silvester
							<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
							</h3>
							<p class="text-sm">The subject goes here</p>
							<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
						</div>
						</div>
						<!-- Message End -->
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
					</div>
				</li>
				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fas fa-bell"></i>
						<!-- <span class="badge badge-warning navbar-badge">1</span> -->
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<span class="dropdown-item dropdown-header">15 Notifications</span>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-envelope mr-2"></i> 4 new messages
						<span class="float-right text-muted text-sm">3 mins</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-users mr-2"></i> 8 friend requests
						<span class="float-right text-muted text-sm">12 hours</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-file mr-2"></i> 3 new reports
						<span class="float-right text-muted text-sm">2 days</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
						class="fas fa-th-large"></i></a>
				</li> -->
				</ul>
				<!-- asdasdas -->
			</nav>
			<!-- /.navbar -->

		<!-- Main Sidebar Container -->
			<aside class="main-sidebar elevation-4 sidebar-light-navy">
				<!-- Brand Logo -->
				<a href="#" class="brand-link text-sm navbar-navy text-light">
					<img src="{{ asset('/img/San_Pedro_College_logo.png') }}" alt="AdminLTE Logo" class="brand-image"
						style="opacity: .8">
					<span class="brand-text font-weight-bold ">San Pedro College</span>
				</a>
				<!-- Sidebar -->
				<div class="sidebar os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition os-host-overflow os-host-overflow-y">
					<!-- Sidebar user panel (optional) -->
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
							<img src="{{ asset('/img/AdminLTELogo.png') }}" class="img-circlel" alt="User Image">
						</div>
						<div class="info">
							<a href="#" class="d-block">{{ auth::user()->name }}</a>
						</div>
					</div>

					<!-- Sidebar Menu -->
					@include(partial.sideMenu);
				</div>
				<!-- /.sidebar -->
			</aside>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<router-view></router-view>
				<vue-progress-bar></vue-progress-bar>
			</div>
			<!-- /.content-wrapper -->

			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->

			<!-- Main Footer -->
			<footer class="main-footer">
				<strong>Copyright &copy; 2014-2019 <a href="#">AdminLTE.io</a>.</strong>
				All rights reserved.
				<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.0.5
				</div>
			</footer>
		</div>
		<script src="{{ asset('../plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
		<!-- Vue script -->
		<script src="/js/app.js"></script>
		<script>
		</script>
	</body>
</html>
