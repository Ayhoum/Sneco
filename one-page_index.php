<?php
include 'include/phpscripts/login-register.php';
$username =$_SESSION['username'];
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="Alaa & Ayham" content="" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />

	<!-- One Page Module Specific Stylesheet -->
	<link rel="stylesheet" href="one-page/onepage.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="one-page/css/et-line.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="one-page/css/fonts.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Sneco.nl    | Home</title>

</head>

<body class="stretched side-push-panel">

	<div class="body-overlay"></div>

	<div id="side-panel" class="dark">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget widget_links clearfix">

				<h4>About Sneco</h4>

				<div style="font-size: 14px; line-height: 1.7;">
					<address style="line-height: 1.7;">
                        Weesperstraat 118 H<br>
                        1112 AP, Diemen<br>
                        The Netherlands<br>
					</address>

					<div class="clear topmargin-sm"></div>

					<abbr title="Phone Number">Phone:</abbr> <br>
					<abbr title="Email Address">Email:</abbr> info@sneco.nl
				</div>

			</div>

			<div class="widget quick-contact-widget clearfix">

				<h4>Connect Socially</h4>

				<a href="#" class="social-icon si-small si-colored si-facebook" title="Facebook">
					<i class="icon-facebook"></i>
					<i class="icon-facebook"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-twitter" title="Twitter">
					<i class="icon-twitter"></i>
					<i class="icon-twitter"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-linkedin" title="LinkedIn">
					<i class="icon-linkedin"></i>
					<i class="icon-linkedin"></i>
				</a>
				<a href="#" class="social-icon si-small si-colored si-skype" title="Skype">
					<i class="icon-skype"></i>
					<i class="icon-skype"></i>
				</a>

			</div>

		</div>

	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header border-full-header dark static-sticky" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="100">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="one-page_index.php" class="standard-logo" data-dark-logo="images/sneco/logo/sneco_logo.png"><img src="images/sneco/logo/sneco_logo.png" alt="Sneco Logo"></a>
						<a href="one-page_index.php" class="retina-logo" data-dark-logo="images/sneco/logo/sneco_logo.png"><img src="images/sneco/logo/sneco_logo.png" alt="Sneco Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
							<li><a href="#" data-href="#wrapper"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-about"><div>About</div></a></li>
							<li><a href="#" data-href="#section-services"><div>Services</div></a></li>
							<li><a href="#" data-href="#section-contact"><div>Contact</div></a></li>
                            <?php if(!isset($_SESSION['logged'])) { ?>
                                <li><a href="login-register-2.php"><div> Login & Register </div></a></li>
                            <?php }
                            else { ?>
                            <li><a href="user_index.php"><div><?php echo $username; ?> </div> </a>
                                <ul>
                                    <li><a href="transaction.php"><div>Create Transactions</div></a></li>
                                    <li><a href="user_transaction.php"><div>Old Transactions</div></a></li>
                                    <li><a href="logout.php"><div>logout</div></a></li>
                                </ul>
                            </li>
                            <?php } ?>
						</ul>

						<div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="icon-reorder"></i></a></div>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-parallax full-screen force-full-screen">

			<div class="slider-parallax-inner">

				<div class="full-screen force-full-screen dark section nopadding nomargin noborder ohidden" style="background-image: url('images/sneco/No_colonies_blank_world_map.png'); background-size: cover; background-position: center center;">

					<div class="container center">
						<div class="vertical-middle">
							<div class="emphasis-title">
								<h1>
									<span class="text-rotater nocolor" data-separator="|" data-rotate="fadeIn" data-speed="6000">
										<span class="t-rotate t700 font-body opm-large-word">Sneco.nl|Worldwide.|Easy Business Services.|Trustworthy.|Motivation.</span>
									</span>
								</h1>
							</div>
							<a href="#" class="button button-border button-light button-circle" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">View our domains</a>
						</div>
					</div>

					<div class="video-wrap">
						<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
					</div>

					<a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="65" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

				</div>
			</div>

		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nopadding">

				<div id="section-about" class="center dark page-section">

					<div class="container clearfix">

						<h2 class="divcenter bottommargin font-body" style="max-width: 700px; font-size: 40px; color: #0e0e0e">A worldwide business services</h2>

						<p class="lead divcenter bottommargin" style="max-width: 800px; color: #0b0b0b">In SENCO we introduce to our clients the best service. We do our best to make our customers happy and satisfied. Our services help the customer to reach out the world while they browse the internet. </p>

						<p class="bottommargin" style="font-size: 16px;"><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70" class="more-link">Learn more <i class="icon-angle-right"></i></a></p>

						<div class="clear"></div>

					</div>

				</div>


				<div id="section-services" class="page-section notoppadding">

					<div class="section nomargin">
						<div class="container clearfix">
							<div class="divcenter center" style="max-width: 900px;">
								<h2 class="nobottommargin t300 ls1">We enjoy working on the Services &amp; Products we provide as much as you need them. This help us in delivering your Goals easily. Browse through the wide range of services we provide.</h2>
							</div>
						</div>
					</div>

					<div class="common-height clearfix">

						<div class="col-md-4 hidden-xs" style="background: url('images/services/main-bg.jpg') center center no-repeat; background-size: cover; "></div>
						<div class="col-md-8">
							<div class="max-height">
								<div class="row common-height grid-border clearfix">
									<div class="col-md-4 col-sm-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-mobile"></i></a>
											</div>
											<h3>Money transfer</h3>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-presentation"></i></a>
											</div>
											<h3>Transportation </h3>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-puzzle"></i></a>
											</div>
											<h3>Commercial Brokerage </h3>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-gears"></i></a>
											</div>
											<h3>Personal & Commercial Freight</h3>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-genius"></i></a>
											</div>
											<h3>Company Start Support</h3>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 col-padding">
										<div class="feature-box fbox-center fbox-dark fbox-plain fbox-small nobottomborder">
											<div class="fbox-icon">
												<a href="#"><i class="icon-et-hotairballoon"></i></a>
											</div>
											<h3>Industrial Support</h3>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="section dark nomargin">
						<div class="divcenter center" style="max-width: 900px;">
							<h2 class="nobottommargin t300 ls1">Like Our Services? Get an <a href="#" data-scrollto="#template-contactform" data-offset="140" data-easing="easeInOutExpo" data-speed="1250" class="button button-border button-circle button-light button-large notopmargin nobottommargin" style="position: relative; top: -3px;">Instant Quote</a></h2>
						</div>
					</div>

					<div class="section parallax nomargin dark" style="background-color: #f9f9f9; padding: 150px 0;" data-stellar-background-ratio="0.3">

						<div class="container clearfix">

							<div class="col_two_fifth nobottommargin">&nbsp;</div>

							<div class="col_three_fifth nobottommargin col_last">

								<div class="fslider testimonial testimonial-full nobgcolor noborder noshadow nopadding" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide">
												<div class="testi-content" style="color: #0e0e0e">
													<p>Money Transfer to UAE within 1 day</p>
													<div class="testi-meta">
														Mousab
														<span></span>
													</div>
												</div>
											</div>
											<div class="slide">
												<div class="testi-content" style="color: #0e0e0e">
													<p>Nice Service!</p>
													<div class="testi-meta">
														Ayham
														<span></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>

					</div>

				</div>

				<div id="section-contact" class="page-section notoppadding">

					<div class="row noleftmargin norightmargin bottommargin-lg common-height">
						<div id="headquarters-map" class="col-md-8 col-sm-6 gmap hidden-xs"></div>
						<div class="col-md-4 col-sm-6" style="background-color: #F5F5F5;">
							<div class="col-padding max-height">
								<h3 class="font-body t400 ls1">Our Headquarter</h3>

								<div style="font-size: 16px; line-height: 1.7;">
									<address style="line-height: 1.7;">
										<strong>The Netherlands:</strong><br>
                                        Weesperstraat 118 H<br>
                                        1112 AP, Diemen<br>
									</address>

									<abbr title="Phone Number"><strong>Phone:</strong></abbr> <br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@sneco.nl
								</div>
							</div>
						</div>
					</div>

					<div class="container clearfix">

						<div class="divcenter topmargin" style="max-width: 850px;">

							<div class="contact-widget">

								<div class="contact-form-result"></div>

								<form class="nobottommargin" id="template-contactform" name="template-contactform" action="one-page/include/sendemail.php" method="post">

									<div class="form-process"></div>

									<div class="col_half">
										<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Name" />
									</div>
									<div class="col_half col_last">
										<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" />
									</div>

									<div class="clear"></div>

									<div class="col_one_third">
										<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control" placeholder="Phone" />
									</div>

									<div class="col_two_third col_last">
										<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control border-form-control" placeholder="Subject" />
									</div>

									<div class="clear"></div>

									<div class="col_full">
										<textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="template-contactform-message" rows="7" cols="30" placeholder="Your Message"></textarea>
									</div>

									<div class="col_full center">
										<button class="button button-border button-circle t500 noleftmargin topmargin-sm" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
										<br>
										<small style="display: block; font-size: 13px; margin-top: 15px;">We'll do our best to get back to you within 1-2 workingdays.</small>
									</div>

									<div class="clear"></div>

									<div class="col_full hidden">
										<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
									</div>

								</form>

							</div>

						</div>

					</div>

				</div>

			</div>

            <!-- Cookie Notification Bar
    ============================================= -->
            <div id="cookie-notification" class="dark">
                <div class="container clearfix">
                    This Website uses cookies. No personal data can be followed.
                    <a href="#" class="cookie-accept cookie-noti-btn fright btn btn-danger btn-sm">Accept</a>
                </div>
            </div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark noborder">

			<div class="container center">
				<div class="footer-widgets-wrap">

					<div class="row divcenter clearfix">

						<div class="col-md-4">

							<div class="widget clearfix">
								<h4>Site Links</h4>

								<ul class="list-unstyled footer-site-links nobottommargin">
									<li><a href="#" data-scrollto="#wrapper" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Top</a></li>
									<li><a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">About</a></li>
									<li><a href="#" data-scrollto="#section-works" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Works</a></li>
									<li><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Services</a></li>
									<li><a href="#" data-scrollto="#section-blog" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Blog</a></li>
									<li><a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Contact</a></li>
								</ul>
							</div>

						</div>

						<div class="col-md-4">

							<div class="widget clearfix">
								<h4>Subscribe</h4>

								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control input-lg not-dark required email" placeholder="Your Email Address">
									<button class="button button-border button-circle button-light topmargin-sm" type="submit">Subscribe Now</button>
								</form>
							</div>

						</div>

						<div class="col-md-4">

							<div class="widget clearfix">
								<h4>Contact</h4>

								<p class="lead">Weesperstraat 118 H<br>1112 AP, Diemen</p>

								<div class="center topmargin-sm">
									<a href="#" class="social-icon inline-block noborder si-small si-facebook" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block noborder si-small si-twitter" title="Twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>

			<div id="copyrights">
				<div class="container center clearfix">
					Copyright Sneco 2017 | All Rights Reserved
				</div>
			</div>

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

	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script type="text/javascript" src="js/jquery.gmap.js"></script>

	<script type="text/javascript">

		jQuery(window).load(function(){

			var jQuerycontainer = jQuery('#portfolio');
			jQuery(window).resize(function() {
				SEMICOLON.portfolio.portfolioDescMargin();
			});
			var t = setTimeout(function(){ SEMICOLON.portfolio.portfolioDescMargin(); }, 200);



			jQuery('#headquarters-map').gMap({
				address: 'Weesperstraat 118 H,1112 AP, Diemen, The Netherlands ',
				maptype: 'ROADMAP',
				zoom: 14,
				markers: [
					{
						address: "Weesperstraat 118 H,1112 AP, Diemen, The Netherlands ",
						html: "Weesperstraat 118 H,1112 AP, Diemen, The Netherlands ",
						icon: {
							image: "images/icons/map-icon-red.png",
							iconsize: [32, 32],
							iconanchor: [14,44]
						}
					}
				],
				doubleclickzoom: false,
				controls: {
					panControl: false,
					zoomControl: false,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
				},
				styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"-100"},{"lightness":"30"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"gamma":"0.00"},{"lightness":"74"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
			});

		});

		jQuery(window).scroll( function(){
			var currentScrollSection = SEMICOLON.header.onePageCurrentSection();

			if( jQuery('#'+currentScrollSection).hasClass('dark') ) {
				jQuery('#header').addClass('dark');
				jQuery('#header-wrap').removeClass('not-dark');
			} else {
				jQuery('#header').removeClass('dark');
				jQuery('#header-wrap').addClass('not-dark');
			}

			SEMICOLON.header.logo();
		});

	</script>

</body>
</html>