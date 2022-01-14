<?php 
/**
 * Default Header
 *
 * @package WordPress
 * @subpackage House on the Hill Wordpress Bootstrap 2021
 * @since Wp Bootstrap 1.0
 *
 */?>
<!DOCTYPE html>
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N8MGDJH');</script>
	<!-- End Google Tag Manager -->
	<html <?php language_attributes(); ?>>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/fontawesome-pro-5.3.1-web/css/all.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo site_url(); ?>/wp-content/uploads/2014/07/hoth.jpg" />
	<?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-5009086-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-5009086-1');
	</script>

	<!-- trackers -->

	<!-- Event snippet for G-Cloud click conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> 
	<script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-1071861445/lUtqCP6Jq4QDEMWdjf8D', 'event_callback': callback }); return false; } </script>
	<!-- Event snippet for Trial Sign Ups conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> 
	<script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-1071861445/ZO5PCI6NzNsCEMWdjf8D', 'event_callback': callback }); return false; } </script>
	<!-- Event snippet for Book a Demo conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> 
	<script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-1071861445/oBkGCKnf_YMDEMWdjf8D', 'event_callback': callback }); return false; } </script>

		
<script type="text/javascript"> _linkedin_partner_id = "2323322"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script>
<script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> 
<noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2323322&fmt=gif" /> </noscript>


</head>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8MGDJH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="hoth-header-container">
	<div class="hoth-header">
		<a class="hoth-home" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/HotH-logo-square-50.png" alt="House-on-the-Hill Logo"></a>
		<a class="hoth-home-white" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/hoth-transparent-white-50.webp" alt="House-on-the-Hill Logo"></a>
		<div class="main">	
			<div class="dropdown">
				<button class="dropbtn">Solutions <i class="fas fa-caret-down"></i></button>
				<div id="m1" class="dropdown-content-container">
					<div id="m1" class="dropdown-content">	
						<ul class="solutions">
							<div class="text" style="width: 100%">
								<h3>Choose the right solution to power your business</h3>
							</div>
							<a href="/foi-request-management/">
								<li>
									<div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/22icons/original/foi-header.jpg"></div>
									<h3>FOI, Case & Complaints Management</h3>
									<p>All your FOIs, Complaints & Requests under one digital roof.</p>
								</li>
							</a>

							<a href="/it-service-management-software/">
								<li>
									<div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/22icons/original/itsm-header.jpg"></div>
									<h3>IT Service <br>Management</h3>
									<p>Fully equipped & versatile ITIL ready service desk solution.</p>
								</li>
							</a>

							<a href="/customer-service-and-support/">
								<li>
									<div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/22icons/original/csm-header.jpg"></div>
									<h3>Customer Service <br>Management</h3>
									<p>Make customers happy and harness the power of self-service.</p>
								</li>
							</a>

							<a href="/facilities-management/">
								<li>
									<div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/22icons/original/cafm-header.jpg"></div>
									<h3>Computer Aided Facilities Management</h3>
									<p>A the tools to manage your jobs, property portfolio & engineers.</p>
								</li>
							</a>
						</ul>
					</div>
				</div>
			</div>

			<a href="/price-plans">Pricing</a>

			<a href="/features">Features</a>

			<div class="dropdown about">
				<button class="dropbtn">About <i class="fas fa-caret-down"></i></button>
				<div id="m1" class="dropdown-content-container">
					<div id="m1" class="dropdown-content">	
						<ul class="about">
						<a href="/about-house-on-the-hill-software">
									<li class="">
										<h3>About House-on-the-Hill</h3>
										<p>A small business running powerful service desk solutions</p>
									</li>
								</a>
								<a href="/testimonials">
									<li class="">
										<h3>Customer Testimonials</h3>
										<p>Dont just take our word for it, see what our customers say</p>
									</li>
								</a>
								<a href="/blog">
									<li class="">
										<h3>Blog</h3>
										<p>Keep up to date with all that we do at HotH</p>
									</li>
								</a>
								<a href="/casestudy">
									<li class="">
										<h3>Customer Case Studies</h3>
										<p>Read how we helped businesses make our House, their Home</p>
									</li>
								</a>
								<a href="/contact-us">
									<li class="">
										<h3>Contact House-on-the-Hill</h3>
										<p>Need help? Want a demo? Questions on our pricing? Get in touch, were ready to help</p>
									</li>
								</a>
								<a href="/careers">
									<li class="">
										<h3>Careers</h3>
										<p>Interested in joining the HotH team?</p>
									</li>
								</a>
								<a href="/social-values-statement/">
									<li class="">
										<h3>Social Values</h3>
										<p>We are proud to support charities, fund-raising events and work experience programs</p>
									</li>
								</a>
						</ul>
						<!--<div class="foot-menu">
							<div class="contact">
								<a href="/demo">Request Demo</a><div class="vl"></div><a href="/contact-us">Contact Sales</a><div class="vl"></div><a href="/docs">Product Documentation</a><div class="vl"></div><a href="http://support.houseonthehill.com">Log In</a>
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
		<div class="sales">
			<ul>
				<li><a href="https://support.houseonthehill.com/" rel="noopener">Log In</a></li>
				<li><a href="/demo">Book a Demo</a></li>
				<li><a class="sign-up" href="https://house-on-the-hill.com/mothership/register" rel="noopener"target="_blank">Free Trial</a></li>
			</ul>
		</div>
	</div>
</div>


<!--<div class="mini_contact">	
	<h3><div class="img"><img src="/wp-content/themes/houseonthehill.com/images/pete-headshot.jpg" height="30" width="30" alt="Pete Headshot"></div>Schedule a Demo</h3>
	<a href="mailto:demo@houseonthehill.com">demo@houseonthehill.com</a> 
	<a href="tel:+44 (0) 161 449 7057">+44 (0) 161 528 1259</a>
</div>-->

<script>
$(document).ready(function(){
$(document).on('click','.dropbtn',function(){
				if($(this).next().hasClass('show')){
					$('.hoth-header-container').removeClass('show');
				}
				else{
    	$('.hoth-header-container').addClass('show');
				}
    $('.dropbtn').not(this).next().removeClass('show');
    $(this).next().toggleClass('show');
});

$(document).on('click',function(e){
    if(!$(e.target).closest('.dropbtn').length) {  /* find closest dropbtn2 to where you have clicked but if nothing found then do this */
        $('.dropbtn').next().removeClass('show'); /* remove show class on all dropbtn2 */
        $('.hoth-header-container').removeClass('show');   /* remove show class on all hoth-container */
    }
});    

});
</script>