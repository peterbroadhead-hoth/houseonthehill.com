<?php 
/**
 * Enqueues scripts and styles for front end.
 *
 * @since Wp Bootstrap 1.0
 *
 * @return void
 */
function cwd_wp_bootstrap_scripts_styles() {
  wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),'3.0.0', true );
  wp_enqueue_style('bootstrapwp', get_template_directory_uri() . '/css/bootstrap.min.css', false ,'3.0.0');  // Loads our main stylesheet.
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array('bootstrapwp') , rand());
}
add_action('wp_enqueue_scripts', 'cwd_wp_bootstrap_scripts_styles');

// Auto update Plugins
add_filter('auto_update_plugin', '__return_true');

// Adds Menus Section
if ( ! function_exists( 'cwd_wp_bootstrapwp_theme_setup' ) ):
  function cwd_wp_bootstrapwp_theme_setup() {
    // Adds the main menu
    register_nav_menus( array(
      'main-menu' => 'Main Menu',
      'footer-menu' => __( 'Footer Menu' ),
      'mobile-menu' => __( 'Mobile Menu' ),
      'library-menu' => __( 'Library Menu' ),

    ) );
  }
endif;
add_action( 'after_setup_theme', 'cwd_wp_bootstrapwp_theme_setup' );

require_once 'inc/nav.php'; 


// Adds Page Features Images (Thumbnails)
add_theme_support( 'post-thumbnails' );

// Excerpts Word Limit
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

// Popular Blog Posts
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Register Testimonial and SupportDesk Feature Post types
function codex_custom_init() {

  register_post_type(
    'testimonials', array(
      'labels' => array('name' => __( 'Testimonials' ), 'singular_name' => __( 'Testimonial' ) ),
      'public' => true,
      'has_archive' => true,
      'taxonomies' => array('categories'), 
      'supports' => array('title', 'editor', 'thumbnail'),
      'show_in_graphql' => true,
      'hierarchical' => true,
      'graphql_single_name' => 'testimonial',
      'graphql_plural_name' => 'testimonials',
    )
  );

  register_post_type(
    'features', array(
      'labels' => array('name' => __( 'Features' ), 'singular_name' => __( 'Feature' ) ),
      'public' => true,
      'has_archive' => true,
      'taxonomies' => array('solution', 'post_tag'), 
      'supports' => array('title', 'editor', 'thumbnail'),
      'show_in_graphql' => true,
      'hierarchical' => true,
      'graphql_single_name' => 'feature',
      'graphql_plural_name' => 'features',
    )
  );
  
  register_post_type(
    'docs', array(
      'labels' => array('name' => __( 'Documentation' ), 'singular_name' => __( 'Documentation' ) ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'taxonomies' => array('docs'),
      'show_in_graphql' => true,
      'hierarchical' => true,
      'graphql_single_name' => 'doc',
      'graphql_plural_name' => 'docs',
    )
  );

    register_post_type(
    'casestudy', array(
      'labels' => array('name' => __( 'Case Studies' ), 'singular_name' => __( 'Case Study' ) ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'taxonomies' => array('solution'),
      'show_in_graphql' => true,
      'hierarchical' => true,
      'graphql_single_name' => 'case',
      'graphql_plural_name' => 'cases',
    )
  );

}

add_action( 'init', 'codex_custom_init' );



// Add Custom Taxonomies
function add_custom_taxonomies() {
  register_taxonomy('solution', 'post', array(
    'hierarchical' => true,
    'labels' => array(
      'name' => _x( 'Solution', 'taxonomy general name' ),
      'singular_name' => _x( 'Solution', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Solutions' ),
      'all_items' => __( 'All Solutions' ),
      'parent_item' => __( 'Parent Solution' ),
      'parent_item_colon' => __( 'Parent Solution:' ),
      'edit_item' => __( 'Edit Solution' ),
      'update_item' => __( 'Update Solution' ),
      'add_new_item' => __( 'Add New Solution' ),
      'new_item_name' => __( 'New Solution Name' ),
      'menu_name' => __( 'Solutions' ),
    ),
    'rewrite' => array(
      'slug' => 'solutions', 
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));

  register_taxonomy('suppcat', 'post', array(
    'hierarchical' => true,
    'labels' => array(
      'name' => _x( 'Support Category', 'taxonomy general name' ),
      'singular_name' => _x( 'Support Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Support Category' ),
      'all_items' => __( 'All Support Categories' ),
      'parent_item' => __( 'Parent Support Category' ),
      'parent_item_colon' => __( 'Parent Support Category:' ),
      'edit_item' => __( 'Edit Support Category' ),
      'update_item' => __( 'Update Support Category' ),
      'add_new_item' => __( 'Add New Support Category' ),
      'new_item_name' => __( 'New Support Category Name' ),
      'menu_name' => __( 'Support Categories' ),
    ),
    'rewrite' => array(
      'slug' => 'support-category', 
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}

add_action( 'init', 'add_custom_taxonomies', 0 );


// Breadcrumbs!
function the_breadcrumb() {
    global $post;
    echo '<ol class="breadcrumb">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
                echo '</li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ol>';
}

// Creates Custom Tag Pages
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
	if($post_type)
	    $post_type = $post_type;
	else
	    $post_type = array('post','features','nav_menu_item');
    $query->set('post_type',$post_type);
	return $query;
    }
}

add_action('admin_menu', function() { remove_meta_box('pageparentdiv', 'chapter', 'normal');});
  add_action('add_meta_boxes', function() { add_meta_box('chapter-parent', 'Part', 'chapter_attributes_meta_box', 'chapter', 'side', 'high');});
  function chapter_attributes_meta_box($post) {
    $post_type_object = get_post_type_object($post->post_type);
    if ( $post_type_object->hierarchical ) {
      $pages = wp_dropdown_pages(array('post_type' => 'part', 'selected' => $post->post_parent, 'name' => 'parent_id', 'show_option_none' => __('(no parent)'), 'sort_column'=> 'menu_order, post_title', 'echo' => 0));
      if ( ! empty($pages) ) {
        echo $pages;
      } // end empty pages check
    } // end hierarchical check.
  }
  
    
// Renames 'Posts' to 'Blog'  
  function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blog';
    $submenu['edit.php'][5][0] = 'Blog';
    $submenu['edit.php'][10][0] = 'Add Blog Article';
    $submenu['edit.php'][16][0] = 'Blog Tags';
    echo '';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Blog';
    $labels->singular_name = 'Blog Article';
    $labels->add_new = 'Add Blog Article';
    $labels->add_new_item = 'Add Blog Article';
    $labels->edit_item = 'Edit Blog Article';
    $labels->new_item = 'Blog Article';
    $labels->view_item = 'View Blog Article';
    $labels->search_items = 'Search Blog Article';
    $labels->not_found = 'No Blog Article found';
    $labels->not_found_in_trash = 'No Blog Article found in Trash';
    $labels->all_items = 'All Blog Articles';
    $labels->menu_name = 'Blog';
    $labels->name_admin_bar = 'Blog';
}
 
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );


// Removes Comments
// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

//Hides Updates Notification
// add_action('admin_menu','wphidenag');
// function wphidenag() {
// 	remove_action( 'admin_notices', 'update_nag', 3 );
// }

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
add_filter('gutenberg_can_edit_post_type', '__return_false');

