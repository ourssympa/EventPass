<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/venue_event_detail_view.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] ث, 16 يناير 2024 11:08:01 GMT -->
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
	<!-- Header Start-->
	<header class="header">
		<div class="header-inner">
			<nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
				<div class="container">
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="navbar-toggler-icon">
							<i class="fa-solid fa-bars"></i>
						</span>
					</button>
					<a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="index.html">
						<div class="res-main-logo">
							<img src="images/logo-icon.svg" alt="">
						</div>
						<div class="main-logo" id="logo">
							<img src="images/logo.svg" alt="">
							<img class="logo-inverse" src="images/dark-logo.svg" alt="">
						</div>
					</a>
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
									<a class="nav-link active" aria-current="page" href="index.html">Home</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Explore Events
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li><a class="dropdown-item" href="explore_events.html">Explore Events</a></li>
										<li><a class="dropdown-item" href="venue_event_detail_view.html">Venue Event Detail View</a></li>
										<li><a class="dropdown-item" href="online_event_detail_view.html">Online Event Detail View</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="pricing.html">Pricing</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Blog
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li><a class="dropdown-item" href="our_blog.html">Our Blog</a></li>
										<li><a class="dropdown-item" href="blog_detail_view.html">Blog Detail View</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Help
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li><a class="dropdown-item" href="faq.html">FAQ</a></li>
										<li><a class="dropdown-item" href="help_center.html">Help Center</a></li>
										<li><a class="dropdown-item" href="contact_us.html">Contact Us</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Pages
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li>
											<a class="dropdown-item submenu-item" href="#">Other Pages</a>
											<ul class="submenu dropdown-menu">
												<li><a class="dropdown-item pe-5" href="sign_in.html">Sign In</a></li>
												<li><a class="dropdown-item pe-5" href="sign_up.html">Sign Up</a></li>
												<li><a class="dropdown-item pe-5" href="forgot_password.html">Forgot Password</a></li>
												<li><a class="dropdown-item pe-5" href="about_us.html">About Us</a></li>
												<li><a class="dropdown-item pe-5" href="checkout.html">Checkout</a></li>
												<li><a class="dropdown-item pe-5" href="checkout_premium.html">Checkout Premium</a></li>
												<li><a class="dropdown-item pe-5" href="invoice.html">Invoice</a></li>
												<li><a class="dropdown-item pe-5" href="coming_soon.html">Coming Soon</a></li>
												<li><a class="dropdown-item pe-5" href="error_404.html">Error 404</a></li>
											</ul>
										</li>
										<li>
											<a class="dropdown-item submenu-item" href="#">Create Event</a>
											<ul class="submenu dropdown-menu">
												<li><a class="dropdown-item pe-5" href="create.html">Create</a></li>
												<li><a class="dropdown-item pe-5" href="create_venue_event.html">Create Venue Event</a></li>
												<li><a class="dropdown-item pe-5" href="create_online_event.html">Create Online Event</a></li>
											</ul>
										</li>
										<li>
											<a class="dropdown-item submenu-item" href="#">Events View</a>
											<ul class="submenu dropdown-menu">
												<li><a class="dropdown-item pe-5" href="online_event_detail_view.html">Online Event Detail View</a></li>
												<li><a class="dropdown-item pe-5" href="venue_event_detail_view.html">Venue Event Detail View</a></li>
											</ul>
										</li>
										<li><a class="dropdown-item" href="booking_confirmed.html">Booking Confirmed</a></li>
										<li><a class="dropdown-item" href="attendee_profile_view.html">Attendee Profile View</a></li>
										<li><a class="dropdown-item" href="organiser_profile_view.html">Organiser Profile View</a></li>
										<li><a class="dropdown-item" href="my_organisation_dashboard.html">Organization Dashboard</a></li>
										<li><a class="dropdown-item" href="sell_tickets_online.html">Sell Tickets Online</a></li>
										<li><a class="dropdown-item" href="refer_a_friend.html">Refer a Friend</a></li>
										<li><a class="dropdown-item" href="term_and_conditions.html">Terms & Conditions</a></li>
										<li><a class="dropdown-item" href="privacy_policy.html">Privacy Policy</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="offcanvas-footer">
							<div class="offcanvas-social">
								<h5>Follow Us</h5>
								<ul class="social-links">
									<li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
								</ul>
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
							<li class="dropdown account-dropdown">
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
										<a href="my_organisation_dashboard.html" class="link-item">My Organisation</a>
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
	<!-- Body Start-->
	<div class="wrapper">
		<div class="breadcrumb-block">

		</div>
		<div class="event-dt-block p-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="event-top-dts">

							<div class="event-top-dt">
								<h3 class="event-main-title">{{ $event->nom }}</h3>
								<div class="event-top-info-status">
									<span class="event-type-name"><i class="fa-solid fa-location-dot"></i>{{ $event->lieu }}</span>
									<span class="event-type-name details-hr">Starts on <span class="ev-event-date">{{ \Carbon\Carbon::parse($event->date)->format('j F, Y') }}</span></span>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-7 col-md-12">
						<div class="main-event-dt">
							<div class="event-img">
								<img src="{{ Asset('asset/images/event-imgs/big-2.jpg') }}" alt="">
							</div>

							<div class="main-event-content">
								<h4>À propos de cet événement</h4>
								<p>{{ $event->description }}
                                     aliquet. Donec semper tellus ac ante vestibulum, vitae varius leo mattis. In vestibulum blandit tempus. Etiam elit turpis, volutpat hendrerit varius ut, posuere a sapien. Maecenas molestie bibendum finibus. Nulla euismod neque vel sem hendrerit faucibus. Nam sit amet metus sollicitudin, luctus eros at, consectetur libero.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-12">
						<div class="main-card event-right-dt">
							<div class="bp-title">
								<h4> Details</h4>
							</div>

							<div class="event-dt-right-group mt-5">
								<div class="event-dt-right-icon">
									<i class="fa-solid fa-circle-user"></i>
								</div>
								<div class="event-dt-right-content">
									<h4>Organisé par : </h4>
									<h5>organisateur</h5>
								</div>
							</div>
							<div class="event-dt-right-group">
								<div class="event-dt-right-icon">
									<i class="fa-solid fa-calendar-day"></i>
								</div>
								<div class="event-dt-right-content">
									<h4>Date and Time</h4>
									<h5>{{ \Carbon\Carbon::parse($event->date)->format('j F, Y') }}</h5>
									<div class="add-to-calendar">

									</div>
								</div>
							</div>
							<div class="event-dt-right-group">
								<div class="event-dt-right-icon">
									<i class="fa-solid fa-location-dot"></i>
								</div>
								<div class="event-dt-right-content">
									<h4>Lieux</h4>
									<h5 class="mb-0">{{$event->lieu }}</h5>
								</div>
							</div>
							<div class="select-tickets-block">
								<h6>Select Tickets</h6>
								<div class="select-ticket-action">
									<div class="ticket-price">AUD $75.00</div>
									<div class="quantity">
										<div class="counter">
											<span class="down" onClick='decreaseCount(event, this)'>-</span>
											<input type="text" value="0">
											<span class="up" onClick='increaseCount(event, this)'>+</span>
										</div>
									</div>
								</div>
								<p>2 x pair hand painted leather earrings 1 x glass of bubbles / or coffee Individual grazing box / fruit cup</p>
								<div class="xtotel-tickets-count">
									<div class="x-title">1x Ticket(s)</div>
									<h4>AUD <span>$0.00</span></h4>
								</div>
							</div>
							<div class="booking-btn">
								<a href="checkout.html" class="main-btn btn-hover w-100">Book Now</a>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="more-events">
							<div class="main-title position-relative">
								<h3>More Events</h3>
								<a href="explore_events.html" class="view-all-link">Browse All<i class="fa-solid fa-right-long ms-2"></i></a>
							</div>
							<div class="owl-carousel moreEvents-slider owl-theme">

                                @foreach ($odersevents as $event_order )

                                <div class="item">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="{{ route('event_detail',$event_order->id) }}" class="thumbnail-img">
												<img src="{{ Asset('asset/images/event-imgs/img-1.jpg') }}" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="{{ route('event_detail',$event_order->id) }}" class="event-title">{{ $event_order->nom }}</a>
											<div class="duration-price-remaining">
												<span class="remaining"></span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>{{$event_order->lieu }}</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>{{ \Carbon\Carbon::parse($event_order->date)->format('j F, Y') }}</span>
												</div>
											</div>
										</div>
									</div>
								</div>

                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body End-->
	<!-- Footer Start-->
	<footer class="footer mt-auto">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Company</h4>
							<ul class="footer-link-list">
								<li><a href="about_us.html" class="footer-link">About Us</a></li>
								<li><a href="help_center.html" class="footer-link">Help Center</a></li>
								<li><a href="faq.html" class="footer-link">FAQ</a></li>
								<li><a href="contact_us.html" class="footer-link">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Useful Links</h4>
							<ul class="footer-link-list">
								<li><a href="create.html" class="footer-link">Create Event</a></li>
								<li><a href="sell_tickets_online.html" class="footer-link">Sell Tickets Online</a></li>
								<li><a href="privacy_policy.html" class="footer-link">Privacy Policy</a></li>
								<li><a href="term_and_conditions.html" class="footer-link">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Resources</h4>
							<ul class="footer-link-list">
								<li><a href="pricing.html" class="footer-link">Pricing</a></li>
								<li><a href="our_blog.html" class="footer-link">Blog</a></li>
								<li><a href="refer_a_friend.html" class="footer-link">Refer a Friend</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Follow Us</h4>
							<ul class="social-links">
								<li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
								<li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
								<li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
								<li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
								<li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
							</ul>
						</div>
						<div class="footer-content">
							<h4>Download Mobile App</h4>
							<div class="download-app-link">
								<a href="#" class="download-btn"><img src="images/app-store.png" alt=""></a>
								<a href="#" class="download-btn"><img src="images/google-play.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="footer-copyright-text">
							<p class="mb-0">© 2022, <strong>Barren</strong>. All rights reserved. Powered by Gambolthemes</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End-->


	<script src="{{Asset('asset/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{Asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{Asset('asset/vendor/OwlCarousel/owl.carousel.js')}}"></script>
	<script src="{{Asset('asset/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{Asset('asset/vendor/mixitup/dist/mixitup.min.js')}}"></script>
	<script src="{{Asset('asset/js/custom.js')}}"></script>
	<script src="{{Asset('asset/js/night-mode.js')}}"></script>

</body>

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/venue_event_detail_view.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] ث, 16 يناير 2024 11:08:03 GMT -->
</html>
