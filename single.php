<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container pad-top-bottom">
	<div class="row">
		<div class="col-md-12 pad-bottom"><h1><?php the_title(); ?></h1></div>
		<!--<div class="col-md-2 blog-img">
			<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>-->
			<p class="blog-date"><i class="fal fa-calendar-alt"></i> <?php the_date(); ?></p>
			<a href="/blog"><i class="fal fa-chevron-left"></i> Blog</a>
		</div>
		<div class="col-md-8 blog-content white" style="padding-top:10px">
			<?php the_content(); ?>			
		</div>
		<div class="col-md-2 blog-sidebar">
			<?php get_template_part('inc/mailchimp-small'); ?>
			<h2 style="font-weight:100;margin-top:15px">Category</h2>
				<ul class="feature-categories" style="padding-left:0">
					<?php
					foreach((get_the_category()) as $category) {
					    echo '<li><a href="' . get_category_link( $category->term_id ) . '" class="' . sprintf( $category->name ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '><span class="label label-default">' . $category->name.'</span></a></li> ';
					}					
					?>
					</ul>
		</div>
	</div>
</div>
<?php endwhile; else: ?>
	<p>Test 1. Sorry, no posts matched your criteria.</p>
<?php endif; ?>	
<?php get_footer(); ?>