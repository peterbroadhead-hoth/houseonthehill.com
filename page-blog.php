<?php get_header(); ?>
<div class="blog-container">
	<div class="header">
		<div class="text">
			<h1>Keep up to date with all things HotH</h1>
			<div class="subscribe background">
				<div class="blog-subscribe">
					<p>Subscribe to our mailist</p>
					<a class="sign-up">Subscribe</a>
				</div>
			</div>
		</div>
	</div>

	<div class="blog-items">
		<?php 
			$temp = $wp_query; $wp_query= null;
			$wp_query = new WP_Query(); $wp_query->query('showposts=12' . '&paged='.$paged);
			while ($wp_query->have_posts()) : $wp_query->the_post(); 
		?>
		<div class="blog-post">
			<a href="<?php the_permalink(); ?>">
				<div class="blog-post-contents">
					<div class="img"><?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
					</div>
					<div class="caption">
						<h3><?php the_title();?></h3>
						<!--<p>
							<?php
								$excerpt = get_the_excerpt();
								echo string_limit_words($excerpt,20);
							?>
						</p>-->
					</div>
				</div>
			</a>
		</div>
		<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>