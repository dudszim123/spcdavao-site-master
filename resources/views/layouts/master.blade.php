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
					<!-- <li class="nav-item d-none d-sm-inline-block">
						<a href="index3.html" class="nav-link">Home</a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="#" class="nav-link">Contact</a>
					</li> -->
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
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat nav-compact nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
							with font-awesome or any other icon font library -->
						<li class="nav-item">
							<router-link to="/dashboard" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</router-link>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-users"></i>
								<p>
									Students
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<router-link to="/applicants" class="nav-link">
									<i class="fas fa-dot-circle nav-icon"></i>
									<p>Applicants</p>
									<span class="badge badge-info right">6</span>
									</router-link>
								</li>
								<li class="nav-item">									<a href="#" class="nav-link">
									<i class="fas fa-dot-circle nav-icon"></i>
									<p>Advanced Elements</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
									<i class="fas fa-dot-circle nav-icon"></i>
									<p>Editors</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
									<i class="fas fa-dot-circle nav-icon"></i>
									<p>Validation</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<router-link to="/users" class="nav-link">
							<i class="nav-icon fas fa-user-tie"></i>
								<p>
									Users
								</p>
							</router-link>
						</li>
						<li class="nav-header">EXAMPLES</li>
					
						<li class="nav-item">
							<a href="#" class="nav-link">
							<i class="nav-icon fas fa-image"></i>
							<p>
								Gallery
							</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
							<i class="nav-icon fas fa-book"></i>
								<p>
									Pages
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fas fa-dot-circle nav-icon"></i>
										<p>Invoice</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
								<i class="nav-icon fas fa-power-off"></i>
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</li>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
			</aside>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<router-view></router-view>
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
		<!-- Vue script -->
		<script src="/js/app.js"></script>
	</body>
</html>
