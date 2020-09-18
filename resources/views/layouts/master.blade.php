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
		<link rel="stylesheet" href="{{ asset('/plugins/summernote/summernote-bs4.css') }}">
		<link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body class="sidebar-mini layout-fixed text-sm accent-navy">
		<div class="wrapper" id="app">
			<nav class="main-header navbar navbar-expand text-sm navbar-dark navbar-navy">
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
				<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
					<i class="fas fa-comments"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<a href="#" class="dropdown-item">
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
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
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
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
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
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fas fa-bell"></i>
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

				</ul>
			</nav>
			<aside class="main-sidebar elevation-4 sidebar-light-navy">
				<a href="#" class="brand-link text-sm navbar-navy text-light">
					<img src="{{ asset('/img/San_Pedro_College_logo.png') }}" alt="AdminLTE Logo" class="brand-image"
						style="opacity: .8">
					<span class="brand-text font-weight-bold ">San Pedro College</span>
				</a>
				<div class="sidebar os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition os-host-overflow os-host-overflow-y">
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
							<img src="{{ asset('/img/AdminLTELogo.png') }}" class="img-circlel" alt="User Image">
						</div>
						<div class="info">
							<a href="#" class="d-block">{{ auth::user()->name }}</a>
						</div>
					</div>
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat nav-compact nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<router-link to="/dashboard" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
							</router-link>
						</li>
						@can('isAdmin')
						<li class="nav-item">
							<router-link to="/users" class="nav-link">
								<i class="nav-icon fas fa-user-tie"></i>
								<p>Users</p>
							</router-link>
						</li>
						@endcan
						@can('isStudent')
							<li class="nav-item">
								<router-link to="/payment-history" class="nav-link">
									<i class="nav-icon fas fa-money-bill-wave"></i>
									<p>Balance/Payment History</p>
								</router-link>
							</li>
							<li class="nav-item">
								<router-link to="/student-grade" class="nav-link">
									<i class="nav-icon fas fa-medal"></i>
									<p>Grades</p>
								</router-link>
							</li>
							<li class="nav-item">
								<router-link to="/student-section" class="nav-link">
									<i class="nav-icon fas fa-calendar-alt"></i>
									<p>Schedules</p>
								</router-link>
							</li>
							<li class="nav-item">
								<router-link to="/user-profile" class="nav-link">
									<i class="nav-icon fas fa-id-card-alt"></i>
									<p>Profile</p>
								</router-link>
							</li>
						@endcan
						@can('isRegistrar')
							<li class="nav-item">
								<router-link to="/Program" class="nav-link">
									<i class="nav-icon fas fa-book"></i>
									<p>Programs</p>
								</router-link>
							</li>
							<li class="nav-item">
								<router-link to="/Subject" class="nav-link">
									<i class="nav-icon fas fa-book"></i>
									<p>Subjects</p>
								</router-link>
							</li>
							<li class="nav-item">
								<router-link to="/Student" class="nav-link">
									<i class="nav-icon fas fa-book"></i>
									<p>Students</p>
								</router-link>
							</li>
							<li class="nav-item">
								<router-link to="/Curriculum" class="nav-link">
									<i class="nav-icon fas fa-swatchbook"></i>
									<p>Curriculum</p>
								</router-link>
							</li>
						@endcan
						@can('isAdmission')
							<li class="nav-item">
								<router-link to="/admission-applicant-list" class="nav-link">
									<i class="nav-icon fas fa-user-check"></i>
									<p>Applicants</p>
								</router-link>
							</li>
						@endcan
						@can('isHumanResource')
							<li class="nav-item">
								<router-link to="/Department" class="nav-link">
									<i class="nav-icon fas fa-swatchbook"></i>
									<p>Department</p>
								</router-link>
							</li>
						@endcan
						<li class="nav-item">
							<a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								<i class="nav-icon fas fa-power-off"></i>
								<p>Logout</p>
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</li>
					</nav>
				</div>
			</aside>
			<div class="content-wrapper">
				<router-view></router-view>
				<vue-progress-bar></vue-progress-bar>
			</div>

			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>

			<footer class="main-footer">
				<strong>Copyright &copy; 2014-2019 <a href="#">AdminLTE.io</a>.</strong>
				All rights reserved.
				<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.0.5
				</div>
			</footer>
		</div>
		<script src="{{ asset('../plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
		<script src="/js/app.js"></script>
		<script>
		</script>
	</body>
</html>
