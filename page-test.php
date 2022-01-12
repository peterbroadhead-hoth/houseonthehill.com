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
		<a class="hoth-home" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/Hoth-transparent.webp" alt="House-on-the-Hill Logo"> <span style="margin-left:10px;"><!--House-on-the-Hill--></span></a>
  <div class="dropdown">
   <button class="dropbtn">Solutions</button>
				<div id="m1" class="dropdown-content-container">
					<div id="m1" class="dropdown-content">	
						<a href="#">[PR]:4-hr Calibrated Tornado Probability</a>
						<a href="#">[PR]:4-hr Calibrated Hail Probability</a>
					</div>
				</div>
   </div>
			<a href="/features">Features</a>
   <div class="dropdown">
   <button class="dropbtn">About</button>
				<div id="m2" class="dropdown-content-container">
					<div id="m2" class="dropdown-content">	
						<a href="#">[fsdfsdfsdf</a>
						<a href="#">[PR]:4-hr Calibrated Hail Probability</a>
					</div>
				</div>
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
    $('.dropbtn').not(this).next().removeClass('show');
    $(this).next().toggleClass('show');
    $('.hoth-header-container').addClass('show');
});

$(document).on('click',function(e){
    if(!$(e.target).closest('.dropbtn').length) {  /* find closest dropbtn2 to where you have clicked but if nothing found then do this */
        $('.dropbtn').next().removeClass('show'); /* remove show class on all dropbtn2 */
        $('.hoth-header-container').removeClass('show');   /* remove show class on all hoth-container */
    }
});    

});
</script>