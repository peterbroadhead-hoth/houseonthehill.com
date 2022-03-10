<?php get_header(); ?>

<div class="testimonials">
	<div class="testimonials-container">
		<div class="testimonials-header-container">
			<div class="testimonials-header">
				<div class="info">
					<h2>Quick question, why House-on-the-Hill?</h2>
					<p>See what our customers say about us.</p>
				</div>
			</div>
		</div>

		<div class="container-fluid pad-small">
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
											<p class="quote">"</p>
									  <?php the_content();?>
										<p class="contact"><?php the_title(); ?></p>
									</div>
								
					<?php endwhile; else:?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>	
		</div>
	</div>
</div>
<?php get_footer(); ?>