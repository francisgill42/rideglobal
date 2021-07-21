<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Admin | Ride Global</title>
        <link rel="icon" href="website/img/logo-tranparent.png" type="image/png">

        <meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="admin/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="admin/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="admin/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="admin/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
		<link rel="stylesheet" href="admin/assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="admin/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />



		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="admin/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="admin/assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="admin/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="admin/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="admin/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="admin/assets/vendor/modernizr/modernizr.js"></script>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="home" class="logo">
{{--						<img src="assets/images/logo.png" height="35" alt="Porto Admin" />--}}
                        <h2 class="title text-uppercase text-bold m-none">Admin Panel</h2>

                    </a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">

					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>

					<span class="separator"></span>


					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="admin/assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">User Name</span>
								<span class="role">Admin</span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
{{--								<li>--}}
{{--									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>--}}
{{--								</li>--}}
{{--								<li>--}}
{{--									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>--}}
{{--								</li>--}}
								<li>
                                    <form method="post" action="/logout">
                                        @csrf
                                        <button type="submit" role="menuitem" tabindex="-1" ><i class="fa fa-power-off"></i> Logout</button>
                                    </form>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="home">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Home</span>
										</a>
									</li>
                                    <li>
                                        <a href="showcountry">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>Country</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="showcity">
                                            <i class="fa fa-shield" aria-hidden="true"></i>
                                            <span>City</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="showhost">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                            <span>Host</span>
                                        </a>
                                    </li>

									<li>
										<a href="showrides">
											<i class="fa fa-tags" aria-hidden="true"></i>
											<span>Rides</span>
										</a>
									</li>
                                    <li>
                                        <a href="showriders">
                                            <i class="fa fa-automobile " aria-hidden="true"></i>
                                            <span>Riders</span>
                                        </a>
                                    </li>
								</ul>
							</nav>

						</div>

					</div>

				</aside>
				<!-- end: sidebar -->
