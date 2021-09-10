<?php 
/*
	Template Name: Single Page
*/
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php setPostViews(get_the_ID()); ?>
			 
			<h1><?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h1>
			<?php the_content(); ?>
		<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>	
		</div>
	</div>
</div>
<?php get_footer(); ?>

<style>
.Data.Protective.Measures{
    min-height: 800px !important;
    margin-left:8% !important;
}
</style>