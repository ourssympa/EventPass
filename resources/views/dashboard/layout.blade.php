<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/my_organisation_dashboard_my_team.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] ث, 16 يناير 2024 11:09:19 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Barren - Simple Online Event Ticketing System</title>

		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">

		<!-- Stylesheets -->
		<link rel="preconnect" href="../../../../fonts.googleapis.com/index.html">
		<link rel="preconnect" href="../../../../fonts.gstatic.com/index.html" crossorigin>
		<link href="../../../../fonts.googleapis.com/css25e50.css?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
		<link href='{{Asset('asset/vendor/unicons-2.0.1/css/unicons.css')}}' rel='stylesheet'>
		<link href="{{Asset('asset/css/style.css')}}" rel="stylesheet">
		<link href="{{Asset('asset/css/vertical-responsive-menu.min.css')}}" rel="stylesheet">
		<link href="{{Asset('asset/css/datepicker.min.css')}}" rel="stylesheet">
		<link href="{{Asset('asset/css/responsive.css')}}" rel="stylesheet">
		<link href="{{Asset('asset/css/night-mode.css')}}" rel="stylesheet">

		<!-- Vendor Stylesheets -->
		<link href="{{Asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
		<link href="{{Asset('asset/vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{Asset('asset/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
		<link href="{{Asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{Asset('asset/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">

	</head>

<body class="d-flex flex-column h-100">


	<header class="header">
		<div class="header-inner">
			<nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0 ps-lg-0 pe-2">
				<div class="container-fluid ps-0">

					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<div class="offcanvas-logo" id="offcanvasNavbarLabel">
								<img src="images/logo-icon.svg" alt="">
							</div>
							<button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
								<i class="fa-solid fa-xmark"></i>
							</button>
						</div>
						<div class="offcanvas-body">
							<div class="offcanvas-top-area">
								<div class="create-bg">
									<a href="create.html" class="offcanvas-create-btn">
										<i class="fa-solid fa-calendar-days"></i>
										<span>Create Event</span>
									</a>
								</div>
							</div>
							<ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
								<li class="nav-item">
									<a class="nav-link" href="organiser_profile_view.html">
										<i class="fa-solid fa-right-left me-2"></i>My Home
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="explore_events.html">
										<i class="fa-solid fa-compass me-2"></i>Explore Events
									</a>
								</li>
							</ul>
						</div>
						<div class="offcanvas-footer">
							<div class="offcanvas-social">
								<h5>Follow Us</h5>
								<ul class="social-links">
									<li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
									</li><li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
									</li><li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
									</li><li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
									</li><li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
								</li></ul>
							</div>
						</div>
					</div>
					<div class="right-header order-2">
						<ul class="align-self-stretch">
							<li>
								<a href="create.html" class="create-btn btn-hover">
									<i class="fa-solid fa-calendar-days"></i>
									<span>Create Event</span>
								</a>
							</li>
							<li class="dropdown account-dropdown order-3">
								<a href="#" class="account-link" role="button" id="accountClick" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="images/profile-imgs/img-13.jpg" alt="">
									<i class="fas fa-caret-down arrow-icon"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-account dropdown-menu-end" aria-labelledby="accountClick">
									<li>
										<div class="dropdown-account-header">
											<div class="account-holder-avatar">
												<img src="images/profile-imgs/img-13.jpg" alt="">
											</div>
											<h5>John Doe</h5>
											<p>johndoe@example.com</p>
										</div>
									</li>
									<li class="profile-link">
										<a href="organiser_profile_view.html" class="link-item">My Profile</a>
										<a href="sign_in.html" class="link-item">Sign Out</a>
									</li>
								</ul>
							</li>
							<li>
								<div class="night_mode_switch__btn">
									<div id="night-mode" class="fas fa-moon fa-sun"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="overlay"></div>
		</div>
	</header>
	<!-- Header End-->
	<!-- Left Sidebar Start -->
	<nav class="vertical_nav">
		<div class="left_section menu_left" id="js-menu">
			<div class="left_section">
				<ul>
					<li class="menu--item">
						<a href="my_organisation_dashboard.html" class="menu--link" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-gauge menu--icon"></i>
							<span class="menu--label">Dashboard</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="{{ route('evenement.index') }}" class="menu--link" title="Events" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-calendar-days menu--icon"></i>
							<span class="menu--label">Evenements</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="{{ route('categorie.index') }}" class="menu--link" title="Promotion" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-rectangle-ad menu--icon"></i>
							<span class="menu--label">Categorie</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="my_organisation_dashboard_contact_lists.html" class="menu--link" title="Contact List" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-regular fa-address-card menu--icon"></i>
							<span class="menu--label">Ventes</span>
						</a>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper wrapper-body">
		<div class="dashboard-body">
			<div class="container-fluid">
				<div class="row">

					@yield('section')
				</div>
			</div>
		</div>
	</div>
	<!-- Body End -->

	<script src="{{Asset('asset/js/vertical-responsive-menu.min.js')}}"></script>
	<script src="{{Asset('asset/js/datepicker.min.js')}}"></script>
	<script src="{{Asset('asset/js/i18n/datepicker.en.js')}}"></script>
    <script src="{{Asset('asset/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{Asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{Asset('asset/vendor/OwlCarousel/owl.carousel.js')}}"></script>
	<script src="{{Asset('asset/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{Asset('asset/vendor/mixitup/dist/mixitup.min.js')}}"></script>
	<script src="{{Asset('asset/js/custom.js')}}"></script>
	<script src="{{Asset('asset/js/night-mode.js')}}"></script>


</body>

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/my_organisation_dashboard_my_team.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] ث, 16 يناير 2024 11:09:19 GMT -->
</html>
