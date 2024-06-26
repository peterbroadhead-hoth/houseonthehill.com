<?php get_header(); ?>
<div class="case-study-container">
	<div class="case-study-header">
		<div class="header">
			<h1>How customers made our House their Home</h1>
			<p>Read our customers experiences on working with us here at HotH<br> and how we helped to improve their services.</p>
		</div>
	</div>
	<div class="case-study">
		<div class="col-md-12">
		<?php
		    $features_loop = new WP_Query( array(
		    'post_type' => 'casestudy',
		        'posts_per_page' => 3
		    ) );
		if ( $features_loop->have_posts() ) : ?>
		<?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
		<div class="col-sm-6 col-md-3">
			<a href="<?php the_permalink(); ?>">
				<div class="img">
					<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
				</div>
				<div class="caption">
					<h3><?php the_title();?></h3>
					<p>
						<?php
							$excerpt = get_the_excerpt();
							echo string_limit_words($excerpt,25);
						?>...
					</p>
				</div>
			</a>
		</div>
		<?php endwhile; else:?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
		</div>
	</div>

	<div class="df-quote">
		<div class="text">
			<h2>"HotH is laser focused on Service Management, where many other platforms try to be all things to all men.  It’s a great product, I think this largely reflects the great people at HotH, everybody I have spoken to is business-like, pleasant and easy to work with."</h2>
			<p>Stuart Williams, <span>Head of Operations – FourNet</span></p>
		</div>
	</div>

	<div class="case-study two">
		<div class="col-md-12">
		<?php
		    $features_loop = new WP_Query( array(
		    'post_type' => 'casestudy',
		        'posts_per_page' => 40
		    ) );
		if ( $features_loop->have_posts() ) : ?>
		<?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
		<div class="col-sm-6 col-md-3">
			<a href="<?php the_permalink(); ?>">
				<div class="img">
					<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
				</div>
				<div class="caption">
					<h3><?php the_title();?></h3>
					<p>
						<?php
							$excerpt = get_the_excerpt();
							echo string_limit_words($excerpt,25);
						?>...
					</p>
				</div>
			</a>
		</div>
		<?php endwhile; else:?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>