<?
	include_once('mycon.php');
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Gila Software</title>
		<link rel="shortcut icon" href="img/favicon-01-1.png"/>
		<link rel="stylesheet" href="vendors/bundle.css" type="text/css">
		<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="vendors/slick/slick.css" type="text/css">
		<link rel="stylesheet" href="vendors/slick/slick-theme.css" type="text/css">
		<link rel="stylesheet" href="vendors/datepicker/daterangepicker.css" type="text/css">
		<link rel="stylesheet" href="vendors/dataTable/datatables.min.css" type="text/css">
		<link rel="stylesheet" href="assets/css/app.min.css" type="text/css">
	</head>
	<body>
		<!-- Preloader -->
		<div class="preloader">
			<img class="logo" src="img/gilasoftwarelogo-original.png" alt="logo">
			<div class="preloader-icon"></div>
		</div>
		<!-- ./ Preloader -->

		<!-- Sidebar group -->
		<div class="sidebar-group">
			
		</div>
		<!-- ./ Sidebar group -->

		<!-- Layout wrapper -->
		<div class="layout-wrapper">
			<!-- Header -->
			<div class="header d-print-none">
				<div class="header-container">
					<div class="header-left">
						<ul class="navbar-nav">
							<li class="nav-item navigation-toggler">
								<a href="#" class="nav-link">
									<i class="ti-menu"></i>
								</a>
							</li>
							<li class="nav-item">
							</li>
						</ul>
					</div>

					<div class="header-right">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
									<i class="maximize" data-feather="maximize"></i>
									<i class="minimize" data-feather="minimize"></i>
								</a>
							</li>
							
						</ul>
					</div>

					<ul class="navbar-nav ml-auto">
						<li class="nav-item header-toggler">
							<a href="#" class="nav-link">
								<i class="ti-arrow-down"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- ./ Header -->

			<!-- Content wrapper -->
			<div class="content-wrapper">
			<!-- Navigation -->
			<div class="navigation">
				<!-- Logo -->
				<div class="navigation-header">
					<a class="navigation-logo" href="index.php">
						<img class="logo" src="img/gilasoftwarelogo-original.png" alt="logo" style="max-width: 100%;">
						<img class="small-logo" src="img/gilasoftwarelogo-original.png" alt="small logo" style="max-width: 100%;">
					</a>
					<a href="#" class="small-navigation-toggler"></a>
				</div>
				<!-- ./ Logo -->

				<!-- Menu wrapper -->
				<div class="navigation-menu-wrapper">
					<!-- Menu tab -->
					<div class="navigation-menu-tab">
						<ul>
							<li>
								<a href="#" data-menu-target="#dashboards">
									<span class="menu-tab-icon">
										<i class="fa fa-building" aria-hidden="true"></i>
									</span>
									<span>Gila Software</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- ./ Menu tab -->

					<!-- Menu body -->
					<div class="navigation-menu-body">
						<ul id="dashboards">
							<li class="navigation-divider">Gila Software</li>
							<li>
								<a href="index.php">
									<i class="nav-link-icon fa fa-home" aria-hidden="true"></i>
									<span>Gila Software</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- ./ Menu body -->
				</div>
				<!-- ./ Menu wrapper -->
			</div>
			<!-- ./ Navigation -->