<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '|', true, 'right' ); ?> Product Documentation</title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/fontawesome-pro-5.3.1-web/css/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo site_url(); ?>/wp-content/uploads/2014/07/hoth.jpg" />
  <?php wp_head(); ?>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/library.css" rel="stylesheet">
</head>
<body <?php body_class(); ?> id="docs">
<div class="container-fluid full <?php the_title(); ?>">
<div class="container top hidden-xs hidden-sm">
	<nav class="navbar navbar-default" role="navigation" id="desktop-nav">
		<div class="nav-container">
      <a class="nav-home" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/HotH-logo-square-50.png" height="50" width="50" alt="House-on-the-Hill Logo">House-on-the-Hill</a>
		</div>
	</nav>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<div class="library-container">
  <div class="library-menu-container">
    <?php 
      wp_nav_menu(array(
        'container_class' => 'collapse library-menu',
        'menu_class'      => 'nav nav-library-menu',
        'menu_id'         => 'library-menu',
        'theme_location'  => 'library-menu',
        'walker'          => new Cwd_wp_bootstrapwp_Walker_Nav_Menu()
      ) );        
    ?>    
  </div>
  <?php wp_reset_query(); ?> 
  <div class="library-intro">
		<h1 class="library-header" id="title"><?php the_title(); ?></h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container pad-top-bottom">
      <div class="row">
        <div class="col-md-12 pad-bottom blog-content"><h1></h1>          
          <?php the_content(); ?>          
        </div>
      </div>
    </div>
		<?php endwhile; else: endif; wp_reset_query(); ?>
	</div> 
</div>
<style>
.library-menu{
	padding-top:20px;
}

.sticky{
	position:fixed;
	top:0;
  z-index: 9999;
}
</style>



<script type="text/javascript">
jQuery(document).ready(function($){
  $(".nav-library-menu li .dropdown-menu").wrap("<div class='dropdown-wrapper'></div>");
  $(".nav-library-menu").wrap("<div class='dropdown-wrapper'></div>");
});

jQuery(function() {
  // whenever we hover over a menu item that has a submenu
  $("ul.nav-library-menu li.dropdown").on("mouseover", function() {
    var $menuItem = $(this),
      $submenuWrapper = $("> .dropdown-wrapper", $menuItem);

    // grab the menu item's position relative to its positioned parent
    var menuItemPos = $menuItem.position();

    // place the submenu in the correct position relevant to the menu item
    $submenuWrapper.css({
      top: menuItemPos.top,
      left: menuItemPos.left + Math.round($menuItem.outerWidth() * 0.75)
    });
  });
});

/* Create Sticky Nav */
var navbar = document.querySelector(".library-menu");
var sticky = navbar.offsetTop;
window.onscroll = function() {stickyNav()};
function stickyNav() {
  if ((window.pageYOffset + 20) >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>


<?php wp_footer(); ?>
</body>
</html>