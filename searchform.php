<?php
/**
 * @package WordPress
 * @subpackage Wp_Bootstrap
 * @since Wp Bootstrap 1.0
 */
?>

<?php get_header(); ?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Search ?" value="" name="s" title="Search for:" />
		<input type="hidden" name="post_type[]" value="features" />
		<input type="hidden" name="post_type[]" value="articles" />
		<input type="hidden" name="post_type[]" value="support" />
	</label>
	<input type="submit" class="search-submit" value="Search" />
</form>
<?php get_footer(); ?>
