<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="blog">
	<div class="col-md-2 blog-sidebar">
		<div class="form">
			<?php get_template_part('inc/mailchimp-small'); ?>
		</div>
	</div>

	<div class="container">
		<p>HotH blog</p>
		<div class="col-md-12 pad-bottom"><h1><?php the_title(); ?></h1></div>
		<div class="col-md-8 blog-content white" style="padding-top:10px">
			<?php the_content(); ?>			
		</div>
	</div>
</div>

<?php endwhile; else: ?>
	<p>Test 1. Sorry, no posts matched your criteria.</p>
<?php endif; ?>	

<?php get_footer(); ?>