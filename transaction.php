<?php
include 'include/phpscripts/DB.php';
include 'include/phpscripts/create_transaction.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
		Made by Alaa,
		23-05-2017
	============================================= -->
	<title>Transaction</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="index.html"><div>Home</div></a>
								<ul>
									<li><a href="index-corporate.html"><div>Home - Corporate</div></a>
										<ul>
											<li><a href="index-corporate.html"><div>Corporate - Layout 1</div></a></li>
											<li><a href="index-corporate-2.html"><div>Corporate - Layout 2</div></a></li>
											<li><a href="index-corporate-3.html"><div>Corporate - Layout 3</div></a></li>
											<li><a href="index-corporate-4.html"><div>Corporate - Layout 4</div></a></li>
										</ul>
									</li>
									<li><a href="index-portfolio.html"><div>Home - Portfolio</div></a>
										<ul>
											<li><a href="index-portfolio.html"><div>Portfolio - Layout 1</div></a></li>
											<li><a href="index-portfolio-2.html"><div>Portfolio - Layout 2</div></a></li>
											<li><a href="index-portfolio-3.html"><div>Portfolio - Masonry</div></a></li>
											<li><a href="index-portfolio-4.html"><div>Portfolio - AJAX</div></a></li>
										</ul>
									</li>
									<li><a href="index-blog.html"><div>Home - Blog</div></a>
										<ul>
											<li><a href="index-blog.html"><div>Blog - Layout 1</div></a></li>
											<li><a href="index-blog-2.html"><div>Blog - Layout 2</div></a></li>
											<li><a href="index-blog-3.html"><div>Blog - Layout 3</div></a></li>
										</ul>
									</li>
									<li><a href="index-shop.html"><div>Home - Shop</div></a>
										<ul>
											<li><a href="index-shop.html"><div>Shop - Layout 1</div></a></li>
											<li><a href="index-shop-2.html"><div>Shop - Layout 2</div></a></li>
										</ul>
									</li>
									<li><a href="index-magazine.html"><div>Home - Magazine</div></a>
										<ul>
											<li><a href="index-magazine.html"><div>Magazine - Layout 1</div></a></li>
											<li><a href="index-magazine-2.html"><div>Magazine - Layout 2</div></a></li>
											<li><a href="index-magazine-3.html"><div>Magazine - Layout 3</div></a></li>
										</ul>
									</li>
									<li><a href="landing.html"><div>Home - Landing Page</div></a>
										<ul>
											<li><a href="landing.html"><div>Landing Page - Layout 1</div></a></li>
											<li><a href="landing-2.html"><div>Landing Page - Layout 2</div></a></li>
											<li><a href="landing-3.html"><div>Landing Page - Layout 3</div></a></li>
											<li><a href="landing-4.html"><div>Landing Page - Layout 4</div></a></li>
											<li><a href="landing-5.html"><div>Landing Page - Layout 5</div></a></li>
										</ul>
									</li>
									<li><a href="index-fullscreen-image.html"><div>Home - Full Screen</div></a>
										<ul>
											<li><a href="index-fullscreen-image.html"><div>Full Screen - Image</div></a></li>
											<li><a href="index-fullscreen-slider.html"><div>Full Screen - Slider</div></a></li>
											<li><a href="index-fullscreen-video.html"><div>Full Screen - Video</div></a></li>
										</ul>
									</li>
									<li><a href="index-onepage.html"><div>Home - One Page</div></a>
										<ul>
											<li><a href="index-onepage.html"><div>One Page - Default</div></a></li>
											<li><a href="index-onepage-2.html"><div>One Page - Submenu</div></a></li>
											<li><a href="index-onepage-3.html"><div>One Page - Dots Style</div></a></li>
										</ul>
									</li>
									<li><a href="index-wedding.html"><div>Home - Wedding</div></a></li>
									<li><a href="index-restaurant.html"><div>Home - Restaurant</div></a></li>
									<li><a href="index-events.html"><div>Home - Events</div></a></li>
									<li><a href="index-parallax.html"><div>Home - Parallax</div></a></li>
									<li><a href="index-app-showcase.html"><div>Home - App Showcase</div></a></li>
									<li><a href="index-boxed.html"><div>Home - Boxed Layout</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Features</div></a>
								<ul>
									<li><a href="#"><div><i class="icon-stack"></i>Sliders</div></a>
										<ul>
											<li><a href="slider-revolution.html"><div>Revolution Slider</div></a>
												<ul>
													<li><a href="rs-demo-premium-concept.html"><div>Premium Templates</div></a></li>
													<li><a href="slider-revolution.html"><div>Full Screen</div></a></li>
													<li><a href="slider-revolution-fullwidth.html"><div>Full Width</div></a></li>
													<li><a href="slider-revolution-kenburns.html"><div>Kenburns Effect</div></a></li>
													<li><a href="slider-revolution-html5-videos.html"><div>HTML5 Video</div></a></li>
												</ul>
											</li>
											<li><a href="slider-canvas.html"><div>Canvas Slider</div></a>
												<ul>
													<li><a href="slider-canvas.html"><div>Full Width</div></a></li>
													<li><a href="slider-canvas-fade.html"><div>Fade Transition</div></a></li>
													<li><a href="slider-canvas-autoplay.html"><div>Autoplay Feature</div></a></li>
													<li><a href="slider-canvas-video-event.html"><div>Custom Video Event</div></a></li>
													<li><a href="slider-canvas-pagination.html"><div>Pagination Navigation</div></a></li>
													<li><a href="slider-canvas-3.html"><div>3 Columns</div></a></li>
													<li><a href="slider-canvas-4.html"><div>4 Columns</div></a></li>
													<li><a href="slider-canvas-5.html"><div>5 Columns</div></a></li>
												</ul>
											</li>
											<li><a href="slider-flex.html"><div>Flex Slider</div></a>
												<ul>
													<li><a href="slider-flex.html"><div>Default Layout</div></a></li>
													<li><a href="slider-flex-thumbs.html"><div>with Thumbs</div></a></li>
												</ul>
											</li>
											<li><a href="slider-owl.html"><div>Owl Slider</div></a>
												<ul>
													<li><a href="slider-owl-full.html"><div>Full Width</div></a></li>
													<li><a href="slider-owl.html"><div>Boxed Width</div></a></li>
													<li><a href="slider-owl-videos.html"><div>Video Slider</div></a></li>
												</ul>
											</li>
											<li><a href="static-parallax.html"><div>Static Media</div></a>
												<ul>
													<li><a href="static-parallax.html"><div>Static - Parallax</div></a></li>
													<li><a href="static-image.html"><div>Static - Image</div></a></li>
													<li><a href="static-thumbs-grid.html"><div>Static - Thumb Gallery</div></a></li>
													<li><a href="static-html5-video.html"><div>Static - HTML5 Video</div></a></li>
													<li><a href="static-embed-video.html"><div>Static - Embedded Video</div></a></li>
												</ul>
											</li>
											<li><a href="slider-camera.html"><div>Camera Slider</div></a></li>
											<li><a href="slider-elastic.html"><div>Elastic Slider</div></a></li>
											<li><a href="slider-nivo.html"><div>Nivo Slider</div></a></li>
										</ul>
									</li>
									<li><a href="widgets.html"><div><i class="icon-gift"></i>Widgets</div></a>
										<ul>
											<li><a href="widgets.html"><div>Links</div></a></li>
											<li><a href="widgets.html"><div>Flickr Photostream</div></a></li>
											<li><a href="widgets.html"><div>Dribbble Shots</div></a></li>
											<li><a href="widgets.html"><div>Instagram Feed</div></a></li>
											<li><a href="widgets.html"><div>Posts List</div></a></li>
											<li><a href="widgets.html"><div>Twitter Feed</div></a></li>
											<li><a href="widgets.html"><div>Tabbed Widgets</div></a></li>
											<li><a href="widgets.html"><div>Carousel</div></a></li>
											<li><a href="widgets.html"><div>Subscribers</div></a></li>
											<li><a href="widgets.html"><div>Social Icons</div></a></li>
											<li><a href="widgets.html"><div>Testimonials</div></a></li>
											<li><a href="widgets.html"><div>Quick Contact</div></a></li>
											<li><a href="widgets.html"><div>Tags Cloud</div></a></li>
											<li><a href="widgets.html"><div>Video Embeds</div></a></li>
											<li><a href="widgets.html"><div>Raw Text/HTML</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-umbrella"></i>Headers</div></a>
										<ul>
											<li><a href="header-light.html"><div>Light Version</div></a></li>
											<li><a href="header-dark.html"><div>Dark Version</div></a></li>
											<li><a href="header-transparent.html"><div>Transparent</div></a></li>
											<li><a href="header-semi-transparent.html"><div>Semi Transparent</div></a>
												<ul>
													<li><a href="header-semi-transparent.html"><div>Light Version</div></a></li>
													<li><a href="header-semi-transparent-dark.html"><div>Dark Version</div></a></li>
												</ul>
											</li>
											<li><a href="header-side-left.html"><div>Left Side Header</div></a>
												<ul>
													<li><a href="header-side-left.html"><div>Fixed Position</div></a></li>
													<li><a href="header-side-left-open.html"><div>OnClick Open</div></a></li>
													<li><a href="header-side-left-open-push.html"><div>Push Content</div></a></li>
												</ul>
											</li>
											<li><a href="header-side-right.html"><div>Right Side Header</div></a>
												<ul>
													<li><a href="header-side-right.html"><div>Fixed Position</div></a></li>
													<li><a href="header-side-right-open.html"><div>OnClick Open</div></a></li>
													<li><a href="header-side-right-open-push.html"><div>Push Content</div></a></li>
												</ul>
											</li>
											<li><a href="header-floating.html"><div>Floating Version</div></a></li>
											<li><a href="static-sticky.html"><div>Static Sticky</div></a></li>
											<li><a href="responsive-sticky.html"><div>Responsive Sticky</div></a></li>
											<li><a href="logo-changer.html"><div>Alternate Logos</div></a></li>
											<li><a href="alternate-mobile-menu.html"><div>Alternate Mobile Menu</div></a></li>
										</ul>
									</li>
									<li><a href="side-panel.html"><div><i class="icon-line-layout"></i>Side Panel</div></a>
										<ul>
											<li><a href="side-panel-left-overlay.html"><div>Left Overlay</div></a></li>
											<li><a href="side-panel-left-push.html"><div>Left Push</div></a></li>
											<li><a href="side-panel-right-overlay.html"><div>Right Overlay</div></a></li>
											<li><a href="side-panel.html"><div>Right Push</div></a></li>
											<li><a href="side-panel-light.html"><div>Light Background</div></a></li>
										</ul>
									</li>
									<li><a href="mega-menu.html"><div><i class="icon-line-columns"></i>Mega Menu</div></a></li>
									<li><a href="#"><div><i class="icon-align-justify2"></i>Menu Styles</div></a>
										<ul>
											<li><a href="header-light.html"><div>Menu - Style 1</div></a></li>
											<li><a href="menu-2.html"><div>Menu - Style 2</div></a></li>
											<li><a href="menu-3.html"><div>Menu - Style 3</div></a></li>
											<li><a href="menu-4.html"><div>Menu - Style 4</div></a></li>
											<li><a href="menu-5.html"><div>Menu - Style 5</div></a></li>
											<li><a href="menu-6.html"><div>Menu - Style 6</div></a></li>
											<li><a href="menu-7.html"><div>Menu - Style 7</div></a></li>
											<li><a href="menu-8.html"><div>Menu - Style 8</div></a></li>
											<li><a href="menu-9.html"><div>Menu - Style 9</div></a></li>
											<li><a href="menu-10.html"><div>Menu - Overlay</div></a></li>
											<li><a href="split-menu.html"><div>Menu - Split Layout</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-ok-sign"></i>Page Titles</div></a>
										<ul>
											<li><a href="page.html"><div>Left Align</div></a></li>
											<li><a href="page-title-right.html"><div>Right Align</div></a></li>
											<li><a href="page-title-center.html"><div>Center Align</div></a></li>
											<li><a href="page-titledark.html"><div>Dark Style</div></a></li>
											<li><a href="page-title-pattern.html"><div>Pattern Background</div></a></li>
											<li><a href="page-title-parallax.html"><div>Parallax Background</div></a>
												<ul>
													<li><a href="page-title-parallax.html"><div>Default Header</div></a></li>
													<li><a href="page-title-parallax-header.html"><div>Transparent Header</div></a></li>
												</ul>
											</li>
											<li><a href="page-title-video.html"><div>HTML5 Video</div></a></li>
											<li><a href="page-title-nobg.html"><div>No Background</div></a></li>
											<li><a href="page-title-mini.html"><div>Mini Version</div></a></li>
										</ul>
									</li>
									<li><a href="contact.html"><div><i class="icon-envelope-alt"></i>Contact Pages</div></a>
										<ul>
											<li><a href="contact.html">Contact 1</a></li>
											<li><a href="contact-2.html">Contact 2</a></li>
											<li><a href="contact-3.html">Contact 3</a></li>
											<li><a href="contact-4.html">Contact 4</a></li>
											<li><a href="contact-5.html">Contact 5</a></li>
											<li><a href="contact-6.html">Contact 6</a></li>
											<li><a href="contact-7.html">Contact 7</a></li>
										</ul>
									</li>
									<li><a href="#footer" data-scrollto="#footer"><div><i class="icon-th"></i>Footers</div></a>
										<ul>
											<li><a href="sticky-footer.html"><div>Sticky Footer</div></a></li>
											<li><a href="#footer" data-scrollto="#footer"><div>Footer - Layout 1</div></a></li>
											<li><a href="footer-2.html#footer"><div>Footer - Layout 2</div></a></li>
											<li><a href="footer-3.html#footer"><div>Footer - Layout 3</div></a></li>
											<li><a href="footer-4.html#footer"><div>Footer - Layout 4</div></a></li>
											<li><a href="footer-5.html#footer"><div>Footer - Layout 5</div></a></li>
											<li><a href="footer-6.html#footer"><div>Footer - Layout 6</div></a></li>
											<li><a href="footer-7.html#footer"><div>Footer - Layout 7</div></a></li>
										</ul>
									</li>
									<li><a href="#"><div><i class="icon-calendar3"></i>Events</div></a>
										<ul>
											<li><a href="events-calendar.html"><div>Full Width Calendar</div></a></li>
											<li><a href="events-list.html"><div>Events List</div></a>
												<ul>
													<li><a href="events-list.html"><div>Right Sidebar</div></a></li>
													<li><a href="events-list-left-sidebar.html"><div>Left Sidebar</div></a></li>
													<li><a href="events-list-both-sidebar.html"><div>Both Sidebar</div></a></li>
													<li><a href="events-list-fullwidth.html"><div>Full Width</div></a></li>
													<li><a href="events-list-parallax.html"><div>Parallax List</div></a></li>
												</ul>
											</li>
											<li><a href="event-single.html"><div>Single Event</div></a>
												<ul>
													<li><a href="event-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
													<li><a href="event-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
													<li><a href="event-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
													<li><a href="event-single.html"><div>Full Width</div></a></li>
												</ul>
											</li>
											<li><a href="event-single-full-width-image.html"><div>Single Event - Full</div></a>
												<ul>
													<li><a href="event-single-full-width-image.html"><div>Parallax Image</div></a></li>
													<li><a href="event-single-full-width-map.html"><div>Google Map</div></a></li>
													<li><a href="event-single-full-width-slider.html"><div>Slider Gallery</div></a></li>
													<li><a href="event-single-full-width-video.html"><div>HTML5 Video</div></a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="modal-onload.html"><div><i class="icon-line-expand"></i>Modal OnLoad</div></a>
										<ul>
											<li><a href="modal-onload.html"><div>Simple Layout</div></a></li>
											<li><a href="modal-onload-iframe.html"><div>Video iFrame</div></a></li>
											<li><a href="modal-onload-subscribe.html"><div>Subscription Form</div></a></li>
											<li><a href="modal-onload-common-height.html"><div>Common Height</div></a></li>
											<li><a href="modal-onload-cookie.html"><div>Cookies Enabled</div></a></li>
										</ul>
									</li>
									<li><a href="coming-soon.html"><div><i class="icon-time"></i>Coming Soon</div></a>
										<ul>
											<li><a href="coming-soon.html"><div>Simple Layout</div></a></li>
											<li><a href="coming-soon-2.html"><div>Parallax Image</div></a></li>
											<li><a href="coming-soon-3.html"><div>HTML5 Video</div></a></li>
										</ul>
									</li>
									<li><a href="profile.html"><div><i class="icon-user"></i>User Profile</div></a></li>
								</ul>
							</li>
							<li class="mega-menu"><a href="#"><div>Pages</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Introduction</div></a>
											<ul>
												<li><a href="about.html"><div>About Us</div></a></li>
												<li><a href="about-2.html"><div>About Us - Layout 2</div></a></li>
												<li><a href="about-me.html"><div>About Me</div></a></li>
												<li><a href="team.html"><div>Team Members</div></a></li>
												<li><a href="jobs.html"><div>Careers</div></a></li>
												<li><a href="side-navigation.html"><div>Side Navigation</div></a></li>
												<li><a href="page-submenu.html"><div>Page Submenu</div></a></li>
												<li><a href="sitemap.html"><div>Sitemap</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Utility</div></a>
											<ul>
												<li><a href="services.html"><div>Services - Layout 1</div></a></li>
												<li><a href="services-2.html"><div>Services - Layout 2</div></a></li>
												<li><a href="services-3.html"><div>Services - Layout 3</div></a></li>
												<li><a href="faqs.html"><div>FAQs - Layout 1</div></a></li>
												<li><a href="faqs-2.html"><div>FAQs - Layout 2</div></a></li>
												<li><a href="faqs-3.html"><div>FAQs - Layout 3</div></a></li>
												<li><a href="faqs-4.html"><div>FAQs - Layout 4</div></a></li>
												<li><a href="maintenance.html"><div>Maintenance Page</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Layout Grids</div></a>
											<ul>
												<li><a href="full-width.html"><div>Full Width</div></a></li>
												<li><a href="full-width-wide.html"><div>Full Width - Wide</div></a></li>
												<li><a href="right-sidebar.html"><div>Right Sidebar</div></a></li>
												<li><a href="left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="both-right-sidebar.html"><div>Both Right Sidebar</div></a></li>
												<li><a href="both-left-sidebar.html"><div>Both Left Sidebar</div></a></li>
												<li><a href="blank-page.html"><div>Blank Page</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Miscellaneous</div></a>
											<ul>
												<li><a href="login-register.html"><div>Login/Register</div></a></li>
												<li><a href="login-register-2.php"><div>Login/Register - Style 2</div></a></li>
												<li><a href="login-register-3.html"><div>Login/Register - Style 3</div></a></li>
												<li><a href="login-1.html"><div>Login - Style 1</div></a></li>
												<li><a href="login-2.html"><div>Login - Style 2</div></a></li>
												<li><a href="404.html"><div>404 - Simple Layout</div></a></li>
												<li><a href="404-2.html"><div>404 - Parallax Image</div></a></li>
												<li><a href="404-3.html"><div>404 - HTML5 Video</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="#"><div>Portfolio</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Grids</div></a>
											<ul>
												<li><a href="portfolio-1.html"><div>1 Column</div></a></li>
												<li><a href="portfolio-2.html"><div>2 Columns</div></a></li>
												<li><a href="portfolio-3.html"><div>3 Columns</div></a></li>
												<li><a href="portfolio.html"><div>4 Columns</div></a></li>
												<li><a href="portfolio-5.html"><div>5 Columns</div></a></li>
												<li><a href="portfolio-6.html"><div>6 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
											<ul>
												<li><a href="portfolio-mixed-masonry.html"><div>Mixed Columns</div></a></li>
												<li><a href="portfolio-2-masonry.html"><div>2 Columns</div></a></li>
												<li><a href="portfolio-3-masonry.html"><div>3 Columns</div></a></li>
												<li><a href="portfolio-masonry.html"><div>4 Columns</div></a></li>
												<li><a href="portfolio-5-masonry.html"><div>5 Columns</div></a></li>
												<li><a href="portfolio-6-masonry.html"><div>6 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Loading Styles</div></a>
											<ul>
												<li><a href="portfolio.html"><div>jQuery Filter</div></a></li>
												<li><a href="portfolio-jpagination.html"><div>jQuery Pagination</div></a></li>
												<li><a href="portfolio-infinity-scroll.html"><div>Infinity Scroll</div></a></li>
												<li><a href="portfolio-ajax.html"><div>AJAX In Page</div></a></li>
												<li><a href="portfolio-ajax-in-modal.html"><div>AJAX In Modal</div></a></li>
												<li><a href="portfolio-filter-styles.html"><div>Filter Styles</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Single Project</div></a>
											<ul>
												<li><a href="portfolio-single-extended.html"><div>Extended Item</div></a></li>
												<li><a href="portfolio-single-fullwidth.html"><div>Parallax Image</div></a></li>
												<li><a href="portfolio-single-gallery-full.html"><div>Slider Gallery</div></a></li>
												<li><a href="portfolio-single-video-fullwidth-left-sidebar.html"><div>HTML5 Video</div></a></li>
												<li><a href="portfolio-single-thumbs-right-sidebar.html"><div>Masonry Thumbs</div></a></li>
												<li><a href="portfolio-single-video-both-sidebar.html"><div>Embed Video</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li class="mega-menu-title"><a href="#"><div>Layouts</div></a>
											<ul>
												<li><a href="portfolio-nomargin.html"><div>Default</div></a></li>
												<li><a href="portfolio-1-alt-right-sidebar.html"><div>Right Sidebar</div></a></li>
												<li><a href="portfolio-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="portfolio-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="portfolio-fullwidth-notitle.html"><div>100% Width</div></a></li>
												<li><a href="portfolio-parallax.html"><div>Parallax</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li class="mega-menu"><a href="#"><div>Blog</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Default</div></a>
											<ul>
												<li><a href="blog.html"><div>Right Sidebar</div></a></li>
												<li><a href="blog-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="blog-full-width.html"><div>Full Width</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Timeline</div></a>
											<ul>
												<li><a href="blog-timeline-right-sidebar.html"><div>Right Sidebar</div></a></li>
												<li><a href="blog-timeline-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-timeline.html"><div>Full Width</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Masonry</div></a>
											<ul>
												<li><a href="blog-masonry.html"><div>4 Columns</div></a></li>
												<li><a href="blog-masonry-3.html"><div>3 Columns</div></a></li>
												<li><a href="blog-masonry-2.html"><div>2 Columns</div></a></li>
												<li><a href="blog-masonry-full.html"><div>100% Width</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Grid</div></a>
											<ul>
												<li><a href="blog-grid.html"><div>4 Columns</div></a></li>
												<li><a href="blog-grid-3.html"><div>3 Columns</div></a></li>
												<li><a href="blog-grid-2.html"><div>2 Columns</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Small Thumbs</div></a>
											<ul>
												<li><a href="blog-small-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-small.html"><div>Right Sidebar</div></a></li>
												<li><a href="blog-small-both-sidebar.html"><div>Both Sidebar</div></a></li>
												<li><a href="blog-small-full-width.html"><div>Full Width</div></a></li>
												<li><a href="blog-small-alt.html"><div>Alternate Layout</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Item Splitting</div></a>
											<ul>
												<li><a href="blog-grid.html"><div>Pagination</div></a></li>
												<li><a href="blog-masonry.html"><div>Infinite Scroll</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-3">
										<li class="mega-menu-title"><a href="#"><div>Single</div></a>
											<ul>
												<li><a href="blog-single.html"><div>Default Layout</div></a></li>
												<li><a href="blog-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
												<li><a href="blog-single-full.html"><div>Full Width</div></a></li>
												<li><a href="blog-single-small.html"><div>Small Image</div></a></li>
												<li><a href="blog-single-split-right-sidebar.html"><div>Split Layout</div></a></li>
											</ul>
										</li>
										<li class="mega-menu-title"><a href="#"><div>Comments Module</div></a>
											<ul>
												<li><a href="blog-single-left-sidebar.html#comments"><div>Facebook Comments</div></a></li>
												<li><a href="blog-single-small.html#comments"><div>Disqus Comments</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							<li><a href="shop.html"><div>Shop</div></a>
								<ul>
									<li><a href="shop.html"><div>4 Columns</div></a></li>
									<li><a href="shop-3.html"><div>3 Columns</div></a>
										<ul>
											<li><a href="shop-3.html"><div>Full Width</div></a></li>
											<li><a href="shop-3-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-2.html"><div>2 Columns</div></a>
										<ul>
											<li><a href="shop-2-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-2-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-1.html"><div>1 Columns</div></a>
										<ul>
											<li><a href="shop-1.html"><div>Full Width</div></a></li>
											<li><a href="shop-1-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-1-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-1-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-category-parallax.html"><div>Categories - Parallax</div></a></li>
									<li><a href="shop-combination-filter.html"><div>Combination Filter</div></a></li>
									<li><a href="shop-single.html"><div>Single Product</div></a>
										<ul>
											<li><a href="shop-single.html"><div>Full Width</div></a></li>
											<li><a href="shop-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="cart.html"><div>Cart</div></a></li>
									<li><a href="checkout.html"><div>Checkout</div></a></li>
								</ul>
							</li>
							<li class="mega-menu"><a href="#"><div>Shortcodes</div></a>
								<div class="mega-menu-content clearfix">
									<ul class="mega-menu-column col-5">
										<li><a href="animations.html"><div><i class="icon-magic"></i>Animations</div></a></li>
										<li><a href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a></li>
										<li><a href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a></li>
										<li><a href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a></li>
										<li><a href="clients.html"><div><i class="icon-apple"></i>Clients</div></a></li>
										<li><a href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a></li>
										<li><a href="counters.html"><div><i class="icon-time"></i>Counters</div></a></li>
										<li><a href="component-datatable.html"><div><i class="icon-table"></i>Data Tables</div></a></li>
										<li><a href="component-datepicker.html"><div><i class="icon-calendar3"></i>Date &amp; Time Pickers</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a></li>
										<li><a href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a></li>
										<li><a href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a></li>
										<li><a href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a></li>
										<li><a href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a></li>
										<li><a href="labels-badges.html"><div><i class="icon-plus-sign"></i>Labels</div></a></li>
										<li><a href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a></li>
										<li><a href="component-editable.html"><div><i class="icon-edit"></i>Editable Fields</div></a></li>
										<li><a href="component-uploads.html"><div><i class="icon-line-upload"></i>File Uploads</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="lists-panels.html"><div><i class="icon-th-list"></i>Lists &amp; Panels</div></a></li>
										<li><a href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a></li>
										<li><a href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a></li>
										<li><a href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a></li>
										<li><a href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a></li>
										<li><a href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a></li>
										<li><a href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a></li>
										<li><a href="component-range-slider.html"><div><i class="icon-line-move"></i>Range Slider</div></a></li>
										<li><a href="component-ratings.html"><div><i class="icon-star3"></i>Star Ratings</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a></li>
										<li><a href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a></li>
										<li><a href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a></li>
										<li><a href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a></li>
										<li><a href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a></li>
										<li><a href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a></li>
										<li><a href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a></li>
										<li><a href="component-select-picker.html"><div><i class="icon-select"></i>Select Picker</div></a></li>
										<li><a href="component-select-box.html"><div><i class="icon-line-columns"></i>Select Boxes</div></a></li>
									</ul>
									<ul class="mega-menu-column col-5">
										<li><a href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a></li>
										<li><a href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a></li>
										<li><a href="tables.html"><div><i class="icon-table"></i>Tables</div></a></li>
										<li><a href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a></li>
										<li><a href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a></li>
										<li><a href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a></li>
										<li><a href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a></li>
										<li><a href="component-radios-switches.html"><div><i class="icon-line-square-check"></i>Radios &amp; Switches</div></a></li>
										<li><a href="component-typeahead.html"><div><i class="icon-type"></i>Input Typeahead</div></a></li>
									</ul>
								</div>
							</li>
						</ul>

						<!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		<!--============================================= &ndash;&gt;-->
		<section id="page-title">

			<!--<div class="container clearfix">-->
				<!--<h1>My Account</h1>-->
				<!--<ol class="breadcrumb">-->
					<!--<li><a href="#">Home</a></li>-->
					<!--<li><a href="#">Pages</a></li>-->
					<!--<li class="active">Login</li>-->
				<!--</ol>-->
			<!--</div>-->

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 70%;">


							<!--transaction from-->
							<div class="tab-content clearfix" id="tab-register">
								<div class="panel panel-default nobottommargin">
									<div class="panel-body" style="padding: 40px;">
										<h3>Create a new transaction </h3>

										<form id="register-form" name="register-form" class="nobottommargin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

											<hr>
											<p><h3> Sender </h3> </p>
											<!-- Sender-->
											<hr>

											<div class="col_full">
												<label>Name in English:</label>
												<input type="text" name="Sender_eName" value="" class="form-control" required />
											</div>

											<div class="col_full">
												<label>Name in Arabic:</label>
												<input type="text" name="Sender_aName" value="" class="form-control" required />
											</div>

											<div class="col_full">
												<label>Email Address:</label>
												<input type="text"  name="Sender_Email" value="" class="form-control" required />
											</div>

											<div class="col_full">
												<label>Phone:</label>
												<input type="text"  name="Sender_Phone" value="" class="form-control" required />
											</div>

											<div class="col_full">
												<label>Street Name:</label>
												<input type="text"  name="Sender_StreetName" value="" class="form-control" required/>
											</div>

											<div class="col_full">
												<label>House Number:</label>
												<input type="text"  name="Sender_HouseNumber" value="" class="form-control" required/>
											</div>


											<div class="col_full">
												<label>Postcode:</label>
												<input type="text"  name="Sender_Postcode" value="" class="form-control" required />
											</div>

											<div class="col_full">
												<label>City:</label>
												<input type="text"  name="Sender_City" value="" class="form-control" required/>
											</div>

											<div class="col_full">
												<label>Country:</label>
												<select style="width:215px;" name="Sender_Country" required id="Sender_Country">
													<option value="">-- select one --</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="Albania">Albania</option>
													<option value="Algeria">Algeria</option>
													<option value="American Samoa">American Samoa</option>
													<option value="Andorra">Andorra</option>
													<option value="Angola">Angola</option>
													<option value="Anguilla">Anguilla</option>
													<option value="Antartica">Antarctica</option>
													<option value="Antigua and Barbuda">Antigua and Barbuda</option>
													<option value="Argentina">Argentina</option>
													<option value="Armenia">Armenia</option>
													<option value="Aruba">Aruba</option>
													<option value="Australia">Australia</option>
													<option value="Austria">Austria</option>
													<option value="Azerbaijan">Azerbaijan</option>
													<option value="Bahamas">Bahamas</option>
													<option value="Bahrain">Bahrain</option>
													<option value="Bangladesh">Bangladesh</option>
													<option value="Barbados">Barbados</option>
													<option value="Belarus">Belarus</option>
													<option value="Belgium">Belgium</option>
													<option value="Belize">Belize</option>
													<option value="Benin">Benin</option>
													<option value="Bermuda">Bermuda</option>
													<option value="Bhutan">Bhutan</option>
													<option value="Bolivia">Bolivia</option>
													<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
													<option value="Botswana">Botswana</option>
													<option value="Bouvet Island">Bouvet Island</option>
													<option value="Brazil">Brazil</option>
													<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
													<option value="Brunei Darussalam">Brunei Darussalam</option>
													<option value="Bulgaria">Bulgaria</option>
													<option value="Burkina Faso">Burkina Faso</option>
													<option value="Burundi">Burundi</option>
													<option value="Cambodia">Cambodia</option>
													<option value="Cameroon">Cameroon</option>
													<option value="Canada">Canada</option>
													<option value="Cape Verde">Cape Verde</option>
													<option value="Cayman Islands">Cayman Islands</option>
													<option value="Central African Republic">Central African Republic</option>
													<option value="Chad">Chad</option>
													<option value="Chile">Chile</option>
													<option value="China">China</option>
													<option value="Christmas Island">Christmas Island</option>
													<option value="Cocos Islands">Cocos (Keeling) Islands</option>
													<option value="Colombia">Colombia</option>
													<option value="Comoros">Comoros</option>
													<option value="Congo">Congo</option>
													<option value="Congo">Congo, the Democratic Republic of the</option>
													<option value="Cook Islands">Cook Islands</option>
													<option value="Costa Rica">Costa Rica</option>
													<option value="Cota D'Ivoire">Cote d'Ivoire</option>
													<option value="Croatia">Croatia (Hrvatska)</option>
													<option value="Cuba">Cuba</option>
													<option value="Cyprus">Cyprus</option>
													<option value="Czech Republic">Czech Republic</option>
													<option value="Denmark">Denmark</option>
													<option value="Djibouti">Djibouti</option>
													<option value="Dominica">Dominica</option>
													<option value="Dominican Republic">Dominican Republic</option>
													<option value="East Timor">East Timor</option>
													<option value="Ecuador">Ecuador</option>
													<option value="Egypt">Egypt</option>
													<option value="El Salvador">El Salvador</option>
													<option value="Equatorial Guinea">Equatorial Guinea</option>
													<option value="Eritrea">Eritrea</option>
													<option value="Estonia">Estonia</option>
													<option value="Ethiopia">Ethiopia</option>
													<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
													<option value="Faroe Islands">Faroe Islands</option>
													<option value="Fiji">Fiji</option>
													<option value="Finland">Finland</option>
													<option value="France">France</option>
													<option value="France Metropolitan">France, Metropolitan</option>
													<option value="French Guiana">French Guiana</option>
													<option value="French Polynesia">French Polynesia</option>
													<option value="French Southern Territories">French Southern Territories</option>
													<option value="Gabon">Gabon</option>
													<option value="Gambia">Gambia</option>
													<option value="Georgia">Georgia</option>
													<option value="Germany">Germany</option>
													<option value="Ghana">Ghana</option>
													<option value="Gibraltar">Gibraltar</option>
													<option value="Greece">Greece</option>
													<option value="Greenland">Greenland</option>
													<option value="Grenada">Grenada</option>
													<option value="Guadeloupe">Guadeloupe</option>
													<option value="Guam">Guam</option>
													<option value="Guatemala">Guatemala</option>
													<option value="Guinea">Guinea</option>
													<option value="Guinea-Bissau">Guinea-Bissau</option>
													<option value="Guyana">Guyana</option>
													<option value="Haiti">Haiti</option>
													<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
													<option value="Holy See">Holy See (Vatican City State)</option>
													<option value="Honduras">Honduras</option>
													<option value="Hong Kong">Hong Kong</option>
													<option value="Hungary">Hungary</option>
													<option value="Iceland">Iceland</option>
													<option value="India">India</option>
													<option value="Indonesia">Indonesia</option>
													<option value="Iran">Iran (Islamic Republic of)</option>
													<option value="Iraq">Iraq</option>
													<option value="Ireland">Ireland</option>
													<option value="Israel">Israel</option>
													<option value="Italy">Italy</option>
													<option value="Jamaica">Jamaica</option>
													<option value="Japan">Japan</option>
													<option value="Jordan">Jordan</option>
													<option value="Kazakhstan">Kazakhstan</option>
													<option value="Kenya">Kenya</option>
													<option value="Kiribati">Kiribati</option>
													<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
													<option value="Korea">Korea, Republic of</option>
													<option value="Kuwait">Kuwait</option>
													<option value="Kyrgyzstan">Kyrgyzstan</option>
													<option value="Lao">Lao People's Democratic Republic</option>
													<option value="Latvia">Latvia</option>
													<option value="Lebanon">Lebanon</option>
													<option value="Lesotho">Lesotho</option>
													<option value="Liberia">Liberia</option>
													<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
													<option value="Liechtenstein">Liechtenstein</option>
													<option value="Lithuania">Lithuania</option>
													<option value="Luxembourg">Luxembourg</option>
													<option value="Macau">Macau</option>
													<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
													<option value="Madagascar">Madagascar</option>
													<option value="Malawi">Malawi</option>
													<option value="Malaysia">Malaysia</option>
													<option value="Maldives">Maldives</option>
													<option value="Mali">Mali</option>
													<option value="Malta">Malta</option>
													<option value="Marshall Islands">Marshall Islands</option>
													<option value="Martinique">Martinique</option>
													<option value="Mauritania">Mauritania</option>
													<option value="Mauritius">Mauritius</option>
													<option value="Mayotte">Mayotte</option>
													<option value="Mexico">Mexico</option>
													<option value="Micronesia">Micronesia, Federated States of</option>
													<option value="Moldova">Moldova, Republic of</option>
													<option value="Monaco">Monaco</option>
													<option value="Mongolia">Mongolia</option>
													<option value="Montserrat">Montserrat</option>
													<option value="Morocco">Morocco</option>
													<option value="Mozambique">Mozambique</option>
													<option value="Myanmar">Myanmar</option>
													<option value="Namibia">Namibia</option>
													<option value="Nauru">Nauru</option>
													<option value="Nepal">Nepal</option>
													<option value="Netherlands">Netherlands</option>
													<option value="Netherlands Antilles">Netherlands Antilles</option>
													<option value="New Caledonia">New Caledonia</option>
													<option value="New Zealand">New Zealand</option>
													<option value="Nicaragua">Nicaragua</option>
													<option value="Niger">Niger</option>
													<option value="Nigeria">Nigeria</option>
													<option value="Niue">Niue</option>
													<option value="Norfolk Island">Norfolk Island</option>
													<option value="Northern Mariana Islands">Northern Mariana Islands</option>
													<option value="Norway">Norway</option>
													<option value="Oman">Oman</option>
													<option value="Pakistan">Pakistan</option>
													<option value="Palau">Palau</option>
													<option value="palestine">Palestine</option>
													<option value="Panama">Panama</option>
													<option value="Papua New Guinea">Papua New Guinea</option>
													<option value="Paraguay">Paraguay</option>
													<option value="Peru">Peru</option>
													<option value="Philippines">Philippines</option>
													<option value="Pitcairn">Pitcairn</option>
													<option value="Poland">Poland</option>
													<option value="Portugal">Portugal</option>
													<option value="Puerto Rico">Puerto Rico</option>
													<option value="Qatar">Qatar</option>
													<option value="Reunion">Reunion</option>
													<option value="Romania">Romania</option>
													<option value="Russia">Russian Federation</option>
													<option value="Rwanda">Rwanda</option>
													<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
													<option value="Saint LUCIA">Saint LUCIA</option>
													<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
													<option value="Samoa">Samoa</option>
													<option value="San Marino">San Marino</option>
													<option value="Sao Tome and Principe">Sao Tome and Principe</option>
													<option value="Saudi Arabia">Saudi Arabia</option>
													<option value="Senegal">Senegal</option>
													<option value="Seychelles">Seychelles</option>
													<option value="Sierra">Sierra Leone</option>
													<option value="Singapore">Singapore</option>
													<option value="Slovakia">Slovakia (Slovak Republic)</option>
													<option value="Slovenia">Slovenia</option>
													<option value="Solomon Islands">Solomon Islands</option>
													<option value="Somalia">Somalia</option>
													<option value="South Africa">South Africa</option>
													<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
													<option value="Span">Spain</option>
													<option value="SriLanka">Sri Lanka</option>
													<option value="St. Helena">St. Helena</option>
													<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
													<option value="Sudan">Sudan</option>
													<option value="Suriname">Suriname</option>
													<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
													<option value="Swaziland">Swaziland</option>
													<option value="Sweden">Sweden</option>
													<option value="Switzerland">Switzerland</option>
													<option value="Syria">Syrian Arab Republic</option>
													<option value="Taiwan">Taiwan, Province of China</option>
													<option value="Tajikistan">Tajikistan</option>
													<option value="Tanzania">Tanzania, United Republic of</option>
													<option value="Thailand">Thailand</option>
													<option value="Togo">Togo</option>
													<option value="Tokelau">Tokelau</option>
													<option value="Tonga">Tonga</option>
													<option value="Trinidad and Tobago">Trinidad and Tobago</option>
													<option value="Tunisia">Tunisia</option>
													<option value="Turkey">Turkey</option>
													<option value="Turkmenistan">Turkmenistan</option>
													<option value="Turks and Caicos">Turks and Caicos Islands</option>
													<option value="Tuvalu">Tuvalu</option>
													<option value="Uganda">Uganda</option>
													<option value="Ukraine">Ukraine</option>
													<option value="United Arab Emirates">United Arab Emirates</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="United States">United States</option>
													<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
													<option value="Uruguay">Uruguay</option>
													<option value="Uzbekistan">Uzbekistan</option>
													<option value="Vanuatu">Vanuatu</option>
													<option value="Venezuela">Venezuela</option>
													<option value="Vietnam">Viet Nam</option>
													<option value="Virgin Islands (British)">Virgin Islands (British)</option>
													<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
													<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
													<option value="Western Sahara">Western Sahara</option>
													<option value="Yemen">Yemen</option>
													<option value="Yugoslavia">Yugoslavia</option>
													<option value="Zambia">Zambia</option>
													<option value="Zimbabwe">Zimbabwe</option>
												</select>
											</div>

											<div class="col_full">
												<label>Nationality:</label>
												<select name="Sender_Nationality"  required id="Sender_Nationality" style="width:215px;">
													<option value="">-- select one --</option>
													<option value="afghan">Afghan</option>
													<option value="albanian">Albanian</option>
													<option value="algerian">Algerian</option>
													<option value="american">American</option>
													<option value="andorran">Andorran</option>
													<option value="angolan">Angolan</option>
													<option value="antiguans">Antiguans</option>
													<option value="argentinean">Argentinean</option>
													<option value="armenian">Armenian</option>
													<option value="australian">Australian</option>
													<option value="austrian">Austrian</option>
													<option value="azerbaijani">Azerbaijani</option>
													<option value="bahamian">Bahamian</option>
													<option value="bahraini">Bahraini</option>
													<option value="bangladeshi">Bangladeshi</option>
													<option value="barbadian">Barbadian</option>
													<option value="barbudans">Barbudans</option>
													<option value="batswana">Batswana</option>
													<option value="belarusian">Belarusian</option>
													<option value="belgian">Belgian</option>
													<option value="belizean">Belizean</option>
													<option value="beninese">Beninese</option>
													<option value="bhutanese">Bhutanese</option>
													<option value="bolivian">Bolivian</option>
													<option value="bosnian">Bosnian</option>
													<option value="brazilian">Brazilian</option>
													<option value="british">British</option>
													<option value="bruneian">Bruneian</option>
													<option value="bulgarian">Bulgarian</option>
													<option value="burkinabe">Burkinabe</option>
													<option value="burmese">Burmese</option>
													<option value="burundian">Burundian</option>
													<option value="cambodian">Cambodian</option>
													<option value="cameroonian">Cameroonian</option>
													<option value="canadian">Canadian</option>
													<option value="cape verdean">Cape Verdean</option>
													<option value="central african">Central African</option>
													<option value="chadian">Chadian</option>
													<option value="chilean">Chilean</option>
													<option value="chinese">Chinese</option>
													<option value="colombian">Colombian</option>
													<option value="comoran">Comoran</option>
													<option value="congolese">Congolese</option>
													<option value="costa rican">Costa Rican</option>
													<option value="croatian">Croatian</option>
													<option value="cuban">Cuban</option>
													<option value="cypriot">Cypriot</option>
													<option value="czech">Czech</option>
													<option value="danish">Danish</option>
													<option value="djibouti">Djibouti</option>
													<option value="dominican">Dominican</option>
													<option value="dutch">Dutch</option>
													<option value="east timorese">East Timorese</option>
													<option value="ecuadorean">Ecuadorean</option>
													<option value="egyptian">Egyptian</option>
													<option value="emirian">Emirian</option>
													<option value="equatorial guinean">Equatorial Guinean</option>
													<option value="eritrean">Eritrean</option>
													<option value="estonian">Estonian</option>
													<option value="ethiopian">Ethiopian</option>
													<option value="fijian">Fijian</option>
													<option value="filipino">Filipino</option>
													<option value="finnish">Finnish</option>
													<option value="french">French</option>
													<option value="gabonese">Gabonese</option>
													<option value="gambian">Gambian</option>
													<option value="georgian">Georgian</option>
													<option value="german">German</option>
													<option value="ghanaian">Ghanaian</option>
													<option value="greek">Greek</option>
													<option value="grenadian">Grenadian</option>
													<option value="guatemalan">Guatemalan</option>
													<option value="guinea-bissauan">Guinea-Bissauan</option>
													<option value="guinean">Guinean</option>
													<option value="guyanese">Guyanese</option>
													<option value="haitian">Haitian</option>
													<option value="herzegovinian">Herzegovinian</option>
													<option value="honduran">Honduran</option>
													<option value="hungarian">Hungarian</option>
													<option value="icelander">Icelander</option>
													<option value="indian">Indian</option>
													<option value="indonesian">Indonesian</option>
													<option value="iranian">Iranian</option>
													<option value="iraqi">Iraqi</option>
													<option value="irish">Irish</option>
													<option value="israeli">Israeli</option>
													<option value="italian">Italian</option>
													<option value="ivorian">Ivorian</option>
													<option value="jamaican">Jamaican</option>
													<option value="japanese">Japanese</option>
													<option value="jordanian">Jordanian</option>
													<option value="kazakhstani">Kazakhstani</option>
													<option value="kenyan">Kenyan</option>
													<option value="kittian and nevisian">Kittian and Nevisian</option>
													<option value="kuwaiti">Kuwaiti</option>
													<option value="kyrgyz">Kyrgyz</option>
													<option value="laotian">Laotian</option>
													<option value="latvian">Latvian</option>
													<option value="lebanese">Lebanese</option>
													<option value="liberian">Liberian</option>
													<option value="libyan">Libyan</option>
													<option value="liechtensteiner">Liechtensteiner</option>
													<option value="lithuanian">Lithuanian</option>
													<option value="luxembourger">Luxembourger</option>
													<option value="macedonian">Macedonian</option>
													<option value="malagasy">Malagasy</option>
													<option value="malawian">Malawian</option>
													<option value="malaysian">Malaysian</option>
													<option value="maldivan">Maldivan</option>
													<option value="malian">Malian</option>
													<option value="maltese">Maltese</option>
													<option value="marshallese">Marshallese</option>
													<option value="mauritanian">Mauritanian</option>
													<option value="mauritian">Mauritian</option>
													<option value="mexican">Mexican</option>
													<option value="micronesian">Micronesian</option>
													<option value="moldovan">Moldovan</option>
													<option value="monacan">Monacan</option>
													<option value="mongolian">Mongolian</option>
													<option value="moroccan">Moroccan</option>
													<option value="mosotho">Mosotho</option>
													<option value="motswana">Motswana</option>
													<option value="mozambican">Mozambican</option>
													<option value="namibian">Namibian</option>
													<option value="nauruan">Nauruan</option>
													<option value="nepalese">Nepalese</option>
													<option value="new zealander">New Zealander</option>
													<option value="ni-vanuatu">Ni-Vanuatu</option>
													<option value="nicaraguan">Nicaraguan</option>
													<option value="nigerien">Nigerien</option>
													<option value="north korean">North Korean</option>
													<option value="northern irish">Northern Irish</option>
													<option value="norwegian">Norwegian</option>
													<option value="omani">Omani</option>
													<option value="pakistani">Pakistani</option>
													<option value="palauan">Palauan</option>
													<option value="Palestinian">Palestinian</option>
													<option value="panamanian">Panamanian</option>
													<option value="papua new guinean">Papua New Guinean</option>
													<option value="paraguayan">Paraguayan</option>
													<option value="peruvian">Peruvian</option>
													<option value="polish">Polish</option>
													<option value="portuguese">Portuguese</option>
													<option value="qatari">Qatari</option>
													<option value="romanian">Romanian</option>
													<option value="russian">Russian</option>
													<option value="rwandan">Rwandan</option>
													<option value="saint lucian">Saint Lucian</option>
													<option value="salvadoran">Salvadoran</option>
													<option value="samoan">Samoan</option>
													<option value="san marinese">San Marinese</option>
													<option value="sao tomean">Sao Tomean</option>
													<option value="saudi">Saudi</option>
													<option value="scottish">Scottish</option>
													<option value="senegalese">Senegalese</option>
													<option value="serbian">Serbian</option>
													<option value="seychellois">Seychellois</option>
													<option value="sierra leonean">Sierra Leonean</option>
													<option value="singaporean">Singaporean</option>
													<option value="slovakian">Slovakian</option>
													<option value="slovenian">Slovenian</option>
													<option value="solomon islander">Solomon Islander</option>
													<option value="somali">Somali</option>
													<option value="south african">South African</option>
													<option value="south korean">South Korean</option>
													<option value="spanish">Spanish</option>
													<option value="sri lankan">Sri Lankan</option>
													<option value="stateless">Stateless</option>
													<option value="sudanese">Sudanese</option>
													<option value="surinamer">Surinamer</option>
													<option value="swazi">Swazi</option>
													<option value="swedish">Swedish</option>
													<option value="swiss">Swiss</option>
													<option value="syrian">Syrian</option>
													<option value="taiwanese">Taiwanese</option>
													<option value="tajik">Tajik</option>
													<option value="tanzanian">Tanzanian</option>
													<option value="thai">Thai</option>
													<option value="togolese">Togolese</option>
													<option value="tongan">Tongan</option>
													<option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
													<option value="tunisian">Tunisian</option>
													<option value="turkish">Turkish</option>
													<option value="tuvaluan">Tuvaluan</option>
													<option value="ugandan">Ugandan</option>
													<option value="ukrainian">Ukrainian</option>
													<option value="uruguayan">Uruguayan</option>
													<option value="uzbekistani">Uzbekistani</option>
													<option value="venezuelan">Venezuelan</option>
													<option value="vietnamese">Vietnamese</option>
													<option value="welsh">Welsh</option>
													<option value="yemenite">Yemenite</option>
													<option value="zambian">Zambian</option>
													<option value="zimbabwean">Zimbabwean</option>
												</select>
											</div>

											<div class="col_full">
												<label>Bank Account:</label>
												<input type="text"  name="Sender_BankAccount" value="" class="form-control" required/>
											</div>

											<div class="col_full">
												<label>ID Number:</label>
												<input type="text"  name="Sender_IDNumber" value="" class="form-control" required/>
											</div>

											<div class="col_full">
												<label>ID Expiry Date:</label>
												<input type="text"  name="Sender_Expiary" value="" class="form-control" required/>
											</div>

											<hr>
											<p><h3> Receiver </h3> </p>
											<!-- Receiver-->
											<hr>

											<div class="col_full">
												<label>Name in English:</label>
												<input type="text" name="Receiver_eName" value="" class="form-control" required />
											</div>

											<div class="col_full">
												<label>Name in Arabic:</label>
												<input type="text" name="Receiver_aName" value="" class="form-control" required />
											</div>

											<div class="col_full">
												<label>Email Address:</label>
												<input type="text"  name="Receiver_Email" value="" class="form-control" required />
											</div>

											<div class="col_full">
												<label>Phone:</label>
												<input type="text"  name="Receiver_Phone" value="" class="form-control" required />
											</div>

											<div class="col_full">
												<label>Street Name:</label>
												<input type="text"  name="Receiver_StreetName" value="" class="form-control" />
											</div>

											<div class="col_full">
												<label>House Number:</label>
												<input type="text"  name="Receiver_HouseNumber" value="" class="form-control" />
											</div>


											<div class="col_full">
												<label>Postcode:</label>
												<input type="text"  name="Receiver_Postcode" value="" class="form-control"  />
											</div>

											<div class="col_full">
												<label>City:</label>
												<input type="text"  name="Receiver_City" value="" class="form-control" required/>
											</div>

											<div class="col_full">
												<label>Country:</label>
												<select style="width:215px;" name="Receiver_Country" required id="Receiver_Country">
													<option value="">-- select one --</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="Albania">Albania</option>
													<option value="Algeria">Algeria</option>
													<option value="American Samoa">American Samoa</option>
													<option value="Andorra">Andorra</option>
													<option value="Angola">Angola</option>
													<option value="Anguilla">Anguilla</option>
													<option value="Antartica">Antarctica</option>
													<option value="Antigua and Barbuda">Antigua and Barbuda</option>
													<option value="Argentina">Argentina</option>
													<option value="Armenia">Armenia</option>
													<option value="Aruba">Aruba</option>
													<option value="Australia">Australia</option>
													<option value="Austria">Austria</option>
													<option value="Azerbaijan">Azerbaijan</option>
													<option value="Bahamas">Bahamas</option>
													<option value="Bahrain">Bahrain</option>
													<option value="Bangladesh">Bangladesh</option>
													<option value="Barbados">Barbados</option>
													<option value="Belarus">Belarus</option>
													<option value="Belgium">Belgium</option>
													<option value="Belize">Belize</option>
													<option value="Benin">Benin</option>
													<option value="Bermuda">Bermuda</option>
													<option value="Bhutan">Bhutan</option>
													<option value="Bolivia">Bolivia</option>
													<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
													<option value="Botswana">Botswana</option>
													<option value="Bouvet Island">Bouvet Island</option>
													<option value="Brazil">Brazil</option>
													<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
													<option value="Brunei Darussalam">Brunei Darussalam</option>
													<option value="Bulgaria">Bulgaria</option>
													<option value="Burkina Faso">Burkina Faso</option>
													<option value="Burundi">Burundi</option>
													<option value="Cambodia">Cambodia</option>
													<option value="Cameroon">Cameroon</option>
													<option value="Canada">Canada</option>
													<option value="Cape Verde">Cape Verde</option>
													<option value="Cayman Islands">Cayman Islands</option>
													<option value="Central African Republic">Central African Republic</option>
													<option value="Chad">Chad</option>
													<option value="Chile">Chile</option>
													<option value="China">China</option>
													<option value="Christmas Island">Christmas Island</option>
													<option value="Cocos Islands">Cocos (Keeling) Islands</option>
													<option value="Colombia">Colombia</option>
													<option value="Comoros">Comoros</option>
													<option value="Congo">Congo</option>
													<option value="Congo">Congo, the Democratic Republic of the</option>
													<option value="Cook Islands">Cook Islands</option>
													<option value="Costa Rica">Costa Rica</option>
													<option value="Cota D'Ivoire">Cote d'Ivoire</option>
													<option value="Croatia">Croatia (Hrvatska)</option>
													<option value="Cuba">Cuba</option>
													<option value="Cyprus">Cyprus</option>
													<option value="Czech Republic">Czech Republic</option>
													<option value="Denmark">Denmark</option>
													<option value="Djibouti">Djibouti</option>
													<option value="Dominica">Dominica</option>
													<option value="Dominican Republic">Dominican Republic</option>
													<option value="East Timor">East Timor</option>
													<option value="Ecuador">Ecuador</option>
													<option value="Egypt">Egypt</option>
													<option value="El Salvador">El Salvador</option>
													<option value="Equatorial Guinea">Equatorial Guinea</option>
													<option value="Eritrea">Eritrea</option>
													<option value="Estonia">Estonia</option>
													<option value="Ethiopia">Ethiopia</option>
													<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
													<option value="Faroe Islands">Faroe Islands</option>
													<option value="Fiji">Fiji</option>
													<option value="Finland">Finland</option>
													<option value="France">France</option>
													<option value="France Metropolitan">France, Metropolitan</option>
													<option value="French Guiana">French Guiana</option>
													<option value="French Polynesia">French Polynesia</option>
													<option value="French Southern Territories">French Southern Territories</option>
													<option value="Gabon">Gabon</option>
													<option value="Gambia">Gambia</option>
													<option value="Georgia">Georgia</option>
													<option value="Germany">Germany</option>
													<option value="Ghana">Ghana</option>
													<option value="Gibraltar">Gibraltar</option>
													<option value="Greece">Greece</option>
													<option value="Greenland">Greenland</option>
													<option value="Grenada">Grenada</option>
													<option value="Guadeloupe">Guadeloupe</option>
													<option value="Guam">Guam</option>
													<option value="Guatemala">Guatemala</option>
													<option value="Guinea">Guinea</option>
													<option value="Guinea-Bissau">Guinea-Bissau</option>
													<option value="Guyana">Guyana</option>
													<option value="Haiti">Haiti</option>
													<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
													<option value="Holy See">Holy See (Vatican City State)</option>
													<option value="Honduras">Honduras</option>
													<option value="Hong Kong">Hong Kong</option>
													<option value="Hungary">Hungary</option>
													<option value="Iceland">Iceland</option>
													<option value="India">India</option>
													<option value="Indonesia">Indonesia</option>
													<option value="Iran">Iran (Islamic Republic of)</option>
													<option value="Iraq">Iraq</option>
													<option value="Ireland">Ireland</option>
													<option value="Israel">Israel</option>
													<option value="Italy">Italy</option>
													<option value="Jamaica">Jamaica</option>
													<option value="Japan">Japan</option>
													<option value="Jordan">Jordan</option>
													<option value="Kazakhstan">Kazakhstan</option>
													<option value="Kenya">Kenya</option>
													<option value="Kiribati">Kiribati</option>
													<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
													<option value="Korea">Korea, Republic of</option>
													<option value="Kuwait">Kuwait</option>
													<option value="Kyrgyzstan">Kyrgyzstan</option>
													<option value="Lao">Lao People's Democratic Republic</option>
													<option value="Latvia">Latvia</option>
													<option value="Lebanon">Lebanon</option>
													<option value="Lesotho">Lesotho</option>
													<option value="Liberia">Liberia</option>
													<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
													<option value="Liechtenstein">Liechtenstein</option>
													<option value="Lithuania">Lithuania</option>
													<option value="Luxembourg">Luxembourg</option>
													<option value="Macau">Macau</option>
													<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
													<option value="Madagascar">Madagascar</option>
													<option value="Malawi">Malawi</option>
													<option value="Malaysia">Malaysia</option>
													<option value="Maldives">Maldives</option>
													<option value="Mali">Mali</option>
													<option value="Malta">Malta</option>
													<option value="Marshall Islands">Marshall Islands</option>
													<option value="Martinique">Martinique</option>
													<option value="Mauritania">Mauritania</option>
													<option value="Mauritius">Mauritius</option>
													<option value="Mayotte">Mayotte</option>
													<option value="Mexico">Mexico</option>
													<option value="Micronesia">Micronesia, Federated States of</option>
													<option value="Moldova">Moldova, Republic of</option>
													<option value="Monaco">Monaco</option>
													<option value="Mongolia">Mongolia</option>
													<option value="Montserrat">Montserrat</option>
													<option value="Morocco">Morocco</option>
													<option value="Mozambique">Mozambique</option>
													<option value="Myanmar">Myanmar</option>
													<option value="Namibia">Namibia</option>
													<option value="Nauru">Nauru</option>
													<option value="Nepal">Nepal</option>
													<option value="Netherlands">Netherlands</option>
													<option value="Netherlands Antilles">Netherlands Antilles</option>
													<option value="New Caledonia">New Caledonia</option>
													<option value="New Zealand">New Zealand</option>
													<option value="Nicaragua">Nicaragua</option>
													<option value="Niger">Niger</option>
													<option value="Nigeria">Nigeria</option>
													<option value="Niue">Niue</option>
													<option value="Norfolk Island">Norfolk Island</option>
													<option value="Northern Mariana Islands">Northern Mariana Islands</option>
													<option value="Norway">Norway</option>
													<option value="Oman">Oman</option>
													<option value="Pakistan">Pakistan</option>
													<option value="Palau">Palau</option>
													<option value="palestine">Palestine</option>
													<option value="Panama">Panama</option>
													<option value="Papua New Guinea">Papua New Guinea</option>
													<option value="Paraguay">Paraguay</option>
													<option value="Peru">Peru</option>
													<option value="Philippines">Philippines</option>
													<option value="Pitcairn">Pitcairn</option>
													<option value="Poland">Poland</option>
													<option value="Portugal">Portugal</option>
													<option value="Puerto Rico">Puerto Rico</option>
													<option value="Qatar">Qatar</option>
													<option value="Reunion">Reunion</option>
													<option value="Romania">Romania</option>
													<option value="Russia">Russian Federation</option>
													<option value="Rwanda">Rwanda</option>
													<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
													<option value="Saint LUCIA">Saint LUCIA</option>
													<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
													<option value="Samoa">Samoa</option>
													<option value="San Marino">San Marino</option>
													<option value="Sao Tome and Principe">Sao Tome and Principe</option>
													<option value="Saudi Arabia">Saudi Arabia</option>
													<option value="Senegal">Senegal</option>
													<option value="Seychelles">Seychelles</option>
													<option value="Sierra">Sierra Leone</option>
													<option value="Singapore">Singapore</option>
													<option value="Slovakia">Slovakia (Slovak Republic)</option>
													<option value="Slovenia">Slovenia</option>
													<option value="Solomon Islands">Solomon Islands</option>
													<option value="Somalia">Somalia</option>
													<option value="South Africa">South Africa</option>
													<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
													<option value="Span">Spain</option>
													<option value="SriLanka">Sri Lanka</option>
													<option value="St. Helena">St. Helena</option>
													<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
													<option value="Sudan">Sudan</option>
													<option value="Suriname">Suriname</option>
													<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
													<option value="Swaziland">Swaziland</option>
													<option value="Sweden">Sweden</option>
													<option value="Switzerland">Switzerland</option>
													<option value="Syria">Syrian Arab Republic</option>
													<option value="Taiwan">Taiwan, Province of China</option>
													<option value="Tajikistan">Tajikistan</option>
													<option value="Tanzania">Tanzania, United Republic of</option>
													<option value="Thailand">Thailand</option>
													<option value="Togo">Togo</option>
													<option value="Tokelau">Tokelau</option>
													<option value="Tonga">Tonga</option>
													<option value="Trinidad and Tobago">Trinidad and Tobago</option>
													<option value="Tunisia">Tunisia</option>
													<option value="Turkey">Turkey</option>
													<option value="Turkmenistan">Turkmenistan</option>
													<option value="Turks and Caicos">Turks and Caicos Islands</option>
													<option value="Tuvalu">Tuvalu</option>
													<option value="Uganda">Uganda</option>
													<option value="Ukraine">Ukraine</option>
													<option value="United Arab Emirates">United Arab Emirates</option>
													<option value="United Kingdom">United Kingdom</option>
													<option value="United States">United States</option>
													<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
													<option value="Uruguay">Uruguay</option>
													<option value="Uzbekistan">Uzbekistan</option>
													<option value="Vanuatu">Vanuatu</option>
													<option value="Venezuela">Venezuela</option>
													<option value="Vietnam">Viet Nam</option>
													<option value="Virgin Islands (British)">Virgin Islands (British)</option>
													<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
													<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
													<option value="Western Sahara">Western Sahara</option>
													<option value="Yemen">Yemen</option>
													<option value="Yugoslavia">Yugoslavia</option>
													<option value="Zambia">Zambia</option>
													<option value="Zimbabwe">Zimbabwe</option>
												</select>
											</div>

											<div class="col_full">
												<label>Amount:</label>
												<input type="text"  name="Amount" value="" class="form-control" required/>
											</div>

											<div class="col_full">
												<label>Current Currency:</label>
												<select id="Current_Currency" style="width:215px;" onchange="var1(this)" name='Current_Currency' required>
													<option disabled="disabled" selected>Select Currency</option>
													<option value='AED' title='United Arab Emirates Dirham'>AED (United Arab Emirates Dirham)</option>
													<option value='EUR' title='Euro'>EUR (Euro)</option>
													<option value='SAR' title='Saudi Riyal'>SAR (Saudi Riyal)</option>
													<option value='SYP' title='Syrian Pound'>SYP (Syrian Pound)</option>
													<option value='USD' title='United States Dollar'>USD (United States Dollar)</option>
												</select>
											</div>

											<div class="col_full">
												<label>Payment Currency:</label>
												<select id="Payment_Currency" style="width:215px;" onchange="var2(this)" name='Payment_Currency' required>
													<option disabled="disabled" selected>Select Currency</option>
													<option value='AED' title='United Arab Emirates Dirham'>AED (United Arab Emirates Dirham)</option>
													<option value='EUR' title='Euro'>EUR (Euro)</option>
													<option value='SAR' title='Saudi Riyal'>SAR (Saudi Riyal)</option>
													<option value='SYP' title='Syrian Pound'>SYP (Syrian Pound)</option>
													<option value='USD' title='United States Dollar'>USD (United States Dollar)</option>
												</select>
											</div>

											<div class="col_full">
												<label>Exchange Rate:</label>
												<input type="text"  name="ExRa" value="" class="form-control" readonly required/>
											</div>

											<div class="col_full">
												<label>Rate:</label>
												<input type="text"  name="Rate" value="" class="form-control" readonly required/>
											</div>

											<div class="col_full">
												<label>Reason :</label>
												<input type="text"  name="Reason" value="" class="form-control" required/>
											</div>

											<div class="col_full">
												<label>Comment:</label>
												<input type="text"  name="Comment" value="" class="form-control" />
											</div>

											<div class="col_full">
												<label>Total amount to take:</label>
												<input type="text"  name="Totalt" value="" class="form-control" readonly required/>
											</div>

											<div class="col_full">
												<label>Total amount to pay:</label>
												<input type="text"  name="Totalg" value="" class="form-control" readonly required/>
											</div>

											<div class="col_full nobottommargin">
												<button class="button button-3d button-black nomargin" id="Submit" name="Submit" value="register">Next Step</button>
											</div>

										</form>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!--Scripts-->
	<script>

        $('#Amount').change(function() {

            $var = Number($(this).val());

            if ($var > 0 && $var <= 150){
                $rate = 10;
                $total = $var + $rate;
            }

            else if  ($var >= 151 && $var <= 400){
                $rate = $var * 0.08;
                $total = $var + $rate;
            }
            else if ($var >= 401 && $var <= 1000){
                $rate = $var * 0.07;
                $total = $var + $rate;
            }
            else if ($var >= 1001 && $var <= 3000){
                $rate = $var * 0.06;
                $total = $var + $rate;
            }
            else if ($var >= 3001 && $var <= 7000) {
                $rate = $var * 0.05;
                $total = $var + $rate;
            }
            else if ($var >= 7001 && $var < 10000){
                $rate = $var * 0.04;
                $total = $var + $rate;
            }
            else{
                $total = 0;
            }

            $('#Rate').val($rate);
        });

        $("#ExRa").click(function(){

            var e = document.getElementById("Current_Currency");
            var value1 = e.options[e.selectedIndex].value;

            var f = document.getElementById("Payment_Currency");
            var value2 = f.options[f.selectedIndex].value;



            if (value1+value2 == 'AEDEUR'){
                var id = 0;
            }
            else if  (value1+value2 == 'AEDSAR'){
                var id = 1;
            }
            else if (value1+value2 == 'AEDSYP'){
                var id = 2;
            }
            else if (value1+value2 == 'AEDUSD'){
                var id = 3;
            }
            else if (value1+value2 == 'EURAED'){
                var id = 4;
            }
            else if (value1+value2 == 'EURSAR'){
                var id = 5;
            }
            else if (value1+value2 == 'EURSYP'){
                var id = 6;
            }
            else if (value1+value2 == 'EURUSD'){
                var id = 7;
            }
            else if (value1+value2 == 'SARAED'){
                var id = 8;
            }
            else if  (value1+value2 == 'SAREUR'){
                var id = 9;
            }
            else if (value1+value2 == 'SARSYP'){
                var id = 10;
            }
            else if (value1+value2 == 'SARUSD'){
                var id = 11;
            }
            else if (value1+value2 == 'SYPAED'){
                var id = 12;
            }
            else if (value1+value2 == 'SYPEUR'){
                var id = 13;
            }
            else if (value1+value2 == 'SYPSAR'){
                var id = 14;
            }
            else if (value1+value2 == 'SYPUSD'){
                var id = 15;
            }
            else if (value1+value2 == 'USDAED'){
                var id = 16;
            }
            else if (value1+value2 == 'USDEUR'){
                var id = 17;
            }
            else if (value1+value2 == 'USDSAR'){
                var id = 18;
            }
            else if (value1+value2 == 'USDSYP'){
                var id = 19;
            }


            $.ajax({
                type: 'POST',
                url: 'agentscripts/exchange.php',
                data: 'id=testdata',
                dataType: 'json',
                cache: false,
                success: function(result) {
                    $value = result[id]['ID'];

//                            $('#content1').html(result[0]);
                }
            });


            $("#ExRa").val($value);
        });

        $("#Totalt").click(function(){
            $('#Totalt').val($total);

        });

        $("#Totalg").click(function(){

            $chvar = Number($("#ExRa").val());
            $amtotal = $var * $chvar;
            $('#Totalg').val($amtotal);

        });
	</script>
	<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/masking-input.js" data-autoinit="true"></script>

	<!-- End Scripts-->


		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="images/footer-widget-logo.png" alt="" class="footer-logo">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Headquarters:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">

								<h4>Blogroll</h4>

								<ul>
									<li><a href="http://codex.wordpress.org/">Documentation</a></li>
									<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
									<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
									<li><a href="http://wordpress.org/support/">Support Forums</a></li>
									<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
									<li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
									<li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
								</ul>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4>Recent Posts</h4>

								<div id="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Total Downloads</h5>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Clients</h5>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>