<?php 
/*
	Template Name: Testimonials
*/
?>
<?php get_header(); ?>

<!--<div class="testimonials-header-container">
	<div class="testimonials-header">
		<div class="info">
			<p>Customer Testimonials</p>
			<h1>"Quick question, why House-on-the-Hill?"</h1>
		</div>
	</div>
</div>-->

<div class="container-fluid pad-small" style="background:#f4f5f6">
	<div class="row testimonials">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php
			    $features_loop = new WP_Query( array(
			    'post_type' => 'Testimonials',
			        'posts_per_page' => 40
			    ) );
			if ( $features_loop->have_posts() ) : ?>
			
			<?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
						   <div class="jumbotron">
							  <p><?php the_content();?></p>
							  <div class="contact">
								  <h3><?php the_title(); ?></h3>
								</div>
							</div>
						
			<?php endwhile; else:?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>	
</div>

<style>
	.container-fluid{
		width: 100%;
	}
.wp-post-image{
	height: 100px;
	width: auto;
	max-width: 100%
}
.jumbotron{
	background: white;
	padding: 20px;
}
.jumbotron p{
	font-size: 15px;
	margin-bottom: 10px;
}
h2, .h2{
	font-size: 15px;
}
h3, .h3{
	font-size: 15px;
}
.wp-post-image{
	height: 50px;
}
</style>



	

<?php get_footer(); ?>