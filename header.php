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
	<html <?php language_attributes(); ?>>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/fontawesome-pro-5.3.1-web/css/all.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo site_url(); ?>/wp-content/uploads/2014/07/hoth.jpg" />
	<?php wp_head(); ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1071861445"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'AW-1071861445');
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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N8MGDJH');</script>
<!-- End Google Tag Manager -->
</head>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8MGDJH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

		
<div class="hoth-header-container">
	<div class="hoth-header">
		<a class="hoth-home" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/HotH-logo-square-50.png" alt="House-on-the-Hill Logo"> <span style="margin-left:10px;">House-on-the-Hill</span></a>
		<ul>
			<li class="dropdown">
				<button onclick="myFunction()" class="dropbtn">Solutions</button>
				<div id="myDropdown" class="dropdown-content">
					<a href="/foi-request-management/">FOI, Case & Complaints Management</a>
					<a href="/it-service-management-software">IT Service Management</a>
					<a href="/customer-service-and-support/">Customer Service Management</a>
					<a href="/facilities-management/">Computer Aided Facilities Management</a>
				</div>
			</li>
			<li class="solutions"><a href="/price-plans">Solutions</a>
			<ul>
				<div class="container">
					<div class="main-menu sector">
						<h2 class="title">By Sector</h2>
							<div class="main-menu-container">
								<a href="/service-desk-software-for-public-sector/">
									<li class="foi">
										<h2>Public Sector</h2>
										<p>Deliver intuitive processes for the whole organisation with HotH</p>
									</li>
								</a>
								<a href="/foi-request-management/">
									<li class="foi">
										<h2>Local Government</h2>
										<p>Many departments reach for HotH as an enterprise tool to deliver FOI Case Management & ITSM</p>
									</li>
								</a>
								<a href="/it-service-management-software">
									<li class="itsm">
										<h2>Education</h2>
										<p>Create rich self-service portals for Students or Staff to request services, create tickets and log facilities issues</p>
									</li>
								</a>
								<a href="/customer-service-and-support/">
									<li class="csm">
										<h2>Retail Service</h2>
										<p>Fully branded helpdesk, portal, complete email integration and Knowledge articles make House-on-the-Hill a great fit for providing a great service for your customers </p>
									</li>
								</a>
								<a href="/it-service-management-software">
									<li class="itsm">
										<h2>Healthcare</h2>
										<p>Hospitals rely on House-on-the-Hill's proven ITSM & Facilities packages to deliver purpose built workflows</p>
									</li>
								</a>
								<a href="/facilities-management">
									<li class="cafm">
										<h2>Property Management</h2>
										<p>Reactive and planned jobs are managed from within HotH across your whole property portfolio. Assign to engineers, invoice clients and manage contracts</p>
									</li>
								</a>
							</div>
					</div>
					<div class="sub-menu solutions">
						<h2 class="title">By Use</h2>
						<div class="main-menu-container">
							<a href="/foi-request-management/">
									<li class="foi">
										<h2>Freedom of Information & Case Management</h2>
										<p>Automate the processing of FOI, DPA, ROPA, EIR, SAR, Information Governance & Complaints</p>
									</li>
								</a>
								<a href="/it-service-management-software/">
									<li class="itsm">
										<h2>IT Service Management</h2>
										<p>A versatile service desk solution that delivers great IT support</p>
									</li>
								</a>
								<a href="/customer-service-and-support/">
									<li class="csm">
										<h2>Customer Service Management</h2>
										<p>Support your Customers with House-on-the-Hill CSM service desk solution</p>
									</li>
								</a>
								<a href="/facilities-management/">
									<li class="cafm">
										<h2>Computer Aided Facilities Management</h2>
										<p>Software to help keep your properties well maintained and safe</p>
									</li>
								</a>
							</div>
					</div>


					<div class="sub-menu plans">
						<h2 class="title">Plans</h2>
						<a href="/price-plans/">
							<li>
								<h2>Cloud</h2>
								<p>Hosed with Microsoft Azure, we will look after your system for you. Easy upgrades when you're ready for them.</p>
							</li>
						</a>
						<a href="/price-plans/">
							<li>
								<h2>On-Site</h2>
								<p>Your house your rules. Run House-on-the-Hill on-site.</p>
							</li>
						</a>
					</div>
					<div class="foot-menu">
						<div class="contact">
							<a href="/demo">Request Demo</a><div class="vl"></div><a href="/contact-us">Contact Sales</a><div class="vl"></div><a href="/docs">Product Documentation</a><div class="vl"></div><a href="http://support.houseonthehill.com">Log In</a>
						</div>
					</div>
			</div>
			</ul>
		</li>

		<li><a href="/features">Features</a>
			<ul>
				<div class="container">
					<div class="main-menu">
						<h2 class="title">Power up your service</h2>
						<div class="main-menu-container">
							<a href="/self-service/">
								<li class="">
									<h2>Self-Service Portal</h2>
									<p>Allow your End-User's to log their own tickets</p>
								</li>
							</a>
							<a href="/workflow-engine/">
								<li class="">
									<h2>Workflow & Automation Engine</h2>
									<p>Automatically notify assignees of impending SLA breaches</p>
								</li>
							</a>
							<a href="/features/report-designer/">
								<li class="">
									<h2>Reports Designer</h2>
									<p>Build and extract real-time reports to provide critical information to your team on any data</p>
								</li>
							</a>
							<a href="/service-request-buttons/">
								<li class="">
									<h2>Service Request Buttons</h2>
									<p>Make the Service Request process quick, easy and clear</p>
								</li>
							</a>
							<a href="/drag-and-drop-dashboard-builder/">
								<li class="">
									<h2>Drag and Drop Dashboards</h2>
									<p>Customise ticket logging forms with the drag of a mouse</p>
								</li>
							</a>
							<a href="/features/">
								<li class="">
									<h2>View all features <i class="far fa-arrow-right"></i></h2>
								</li>
							</a>
						</div>
					</div>
					<div class="sub-menu">
						<h2 class="title">Latest Feature</h2>
						<div class="latest-feature">
							<?php
								$features_loop = new WP_Query( array(
								'post_type' => 'features',
										'posts_per_page' => 1
								) );
								if ( $features_loop->have_posts() ) : ?>
							<?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
								<div class="single-feature">
									<a href="<?php the_permalink(); ?>">
										<div class="description">
											<div class="img">
												<?php the_post_thumbnail() ?>
											</div>
											<h2><?php the_title();?></h2>
											<ul class="feature-categories single">
												<?php
												$terms = get_the_terms( $post->ID, 'solution' );
												if ($terms && ! is_wp_error($terms)): ?>
												<?php foreach($terms as $term): ?>
																<li><p href="<?php echo get_term_link( $term->slug, 'solution'); ?>" rel="tag" class="<?php echo $term->slug; ?>"><span class="label label-default"><?php echo $term->name; ?></span></p></li>
												<?php endforeach; ?>
												<?php endif; ?>       
											</ul>            
										</div>
									</a>
								</div>
							<?php endwhile; else:?>
							<?php endif; ?>
							<?php wp_reset_query(); ?>
						</div>
						<h2 class="title">Integrations</h2>
						<a href="/microsoft-teams-integration/">
							<li>
								<h2>Microsoft Teams</h2>
								<p>Maximize how you work in Teams with House-on-the-Hill's Teams integration</p>
							</li>
						</a>
						<a href="/features/house-chat/">
							<li>
								<h2>House Chat</h2>
								<p>Add another facet to your customer service and provide support with immediate engagement.</p>
							</li>
						</a>
						<a class="whats-new" href="/whats-new/">
							<li>
								<img width="50" style="margin-bottom: 5px;" src="/wp-content/uploads/2021/08/lightbulb.png">
								<h2>Whats New</h2>
								<p>See what developments and features our HotH team have been working on to help improve your services this year.</p>
							</li>
						</a>
					</div>
					<div class="foot-menu">
						<div class="contact">
							<a href="/demo">Request Demo</a><div class="vl"></div><a href="/contact-us">Contact Sales</a><div class="vl"></div><a href="/docs">Product Documentation</a><div class="vl"></div><a href="http://support.houseonthehill.com">Log In</a>
						</div>
					</div>
			</div>
			</ul>
		</li>

      <li><a href="/price-plans">Pricing</a></li>
      <li><a href="/contact-us">About</a>
        <ul>
        	<div class="container">
        		<div class="main-menu">
        			<h2 class="title">All about House-on-the-Hill Software</h2>
							<div class="main-menu-container">
								<a href="/about-house-on-the-hill-software">
									<li class="">
										<h2>About House-on-the-Hill</h2>
										<p>A small business running powerful service desk solutions</p>
									</li>
								</a>
								<a href="/testimonials">
									<li class="">
										<h2>Customer Testimonials</h2>
										<p>Dont just take our word for it, see what our customers say</p>
									</li>
								</a>
								<a href="/blog">
									<li class="">
										<h2>Blog</h2>
										<p>Keep up to date with all that we do at HotH</p>
									</li>
								</a>
								<a href="/casestudy">
									<li class="">
										<h2>Customer Case Studies</h2>
										<p>Read how we helped businesses make our House, their Home</p>
									</li>
								</a>
								<a href="/contact-us">
									<li class="">
										<h2>Contact House-on-the-Hill</h2>
										<p>Need help? Want a demo? Questions on our pricing? Get in touch, were ready to help</p>
									</li>
								</a>
								<a href="/careers">
									<li class="">
										<h2>Careers</h2>
										<p>Interested in joining the HotH team?</p>
									</li>
								</a>
								<a href="/social-values-statement/">
									<li class="">
										<h2>Social Values</h2>
										<p>We are proud to support charities, fund-raising events and work experience programs</p>
									</li>
								</a>
							</div>
		        </div>
		        <div class="sub-menu contact">
        			<h2 class="title">Contacts HotH</h2>
		          <li>
		          	<h2>Lets talk shop</h2>
		          	<p>Perhaps you have some trickier questions. Contact the sales team and lets find out what we can do for you.<br><a href="mailto:sales@houseonthehill.com">sales@houseonthehill.com</a></p>
		          </li>
		          <li>
		          	<h2>In a spot of bother</h2>
		          	<p>Don’t fret, contact support below and we can help.<br><a href="mailto:support@houseonthehill.com">support@houseonthehill.com</a></p>
		          </li>
		        </div>
						<div class="foot-menu">
							<div class="contact">
								<a href="/demo">Request Demo</a><div class="vl"></div><a href="/contact-us">Contact Sales</a><div class="vl"></div><a href="/docs">Product Documentation</a><div class="vl"></div><a href="http://support.houseonthehill.com">Log In</a>
							</div>
						</div>
          </div>
        </ul>
      </li>

			<!-- MOBILE TRIAL -->
    	<li class="sign-up mobile-only"><a href="https://house-on-the-hill.com/mothership/register" rel="noopener"target="_blank" class="sign-up-toggle">Free Trial</a></li>
    </ul>
    
    <ul class="sales">
    	<!--<li><a href="mailto:hello@houseonthehill.com"><i class="fal fa-envelope"></i><span style="color: #006b8e;font-size: 17px;">hello@houseonthehill.com</span></a><p class="doc header-hover">hello@houseonthehill.com</p></li>		
    	<li><a href="/docs"><i class="fal fa-book"></i><span>Product Documentation</span></a><p class="doc header-hover">Product Documentation</p></li>
    	<li><a href="/demo"><i class="fal fa-id-card"></i><span>Request a Demo</span></a><p class="demo header-hover">Request a Demo</p></li>-->
    	<li><a href="https://support.houseonthehill.com/" rel="noopener"><i class="far fa-sign-in-alt"></i><span>Log In</span></a><p class="login header-hover">Log In</p></li>
    	<li class="demo-btn"><a href="/demo"><i class="fal fa-id-card"></i><span>Book a Demo</span></a><p class="demo header-hover">Book a Demo</p></li>
    	<li class="sign-up"><a href="https://house-on-the-hill.com/mothership/register" rel="noopener"target="_blank" class="sign-up-toggle">Free Trial</a></li>
    </ul>
  </div>
</div>


<div class="mini_contact">	
	<h3><div class="img"><img src="/wp-content/themes/houseonthehill.com/images/pete-headshot.jpg" height="30" width="30" alt="Pete Headshot"></div>Schedule a Demo</h3>
	<a href="mailto:demo@houseonthehill.com">demo@houseonthehill.com</a> 
	<a href="tel:+44 (0) 161 449 7057">+44 (0) 161 528 1259</a>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>