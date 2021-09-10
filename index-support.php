<?php get_header(); ?>
<div class="container-fluid support-ban">
	<div class="container">
		<div class="col-md-12 ">
			<h1>Help's at Hand</h1>
			<h3>Welcome to House-on-the-Hill's Support centre</h3>
			<form class="navbar-form navbar-left feat-search" role="search" id="searchform" method="get" action="/index.php">
				<div class="col-xs-9">
					<div class="form-group">
						<input name="s" id="s"  type="text" class="form-control" placeholder="Search...">
						<?php $query_types = get_query_var('post_type'); ?>
						<input type="hidden" name="post_type[]" value="support" <?php if (in_array('articles', $query_types)) { echo 'checked="checked"'; } ?> />	
					</div>
				</div>
				<div class="col-xs-3">
					<button type="submit" class="btn btn-warning" style="border-radius:4px"><span class="glyphicon glyphicon-search"></span></button>
				</div>							
			</form>
		</div>
	</div>
</div>
<div class="container-fluid pad-small text-center">
	<div class="col-md-10 text-left">
	<h3>Feature Guides</h3>
	<p>Initial Setup - Stuff you need to know about to set up and begin using the system.</p>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="col-sm-6 col-md-3">
			<a href="<?php the_permalink(); ?>">
				<div class="thumbnail support-thumbnail">
					<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
					<div class="caption">
						<h3><?php the_title();?></h3>
						<p>
							<?php
								$excerpt = get_the_excerpt();
								echo string_limit_words($excerpt,20);
							?>...
						</p>
						<ul class="feature-categories">
						<?php
						$terms = get_the_terms( $post->ID, 'support' );
						if ($terms && ! is_wp_error($terms)): ?>
						    <?php foreach($terms as $term): ?>
							        <li><a href="<?php echo get_term_link( $term->slug, 'support'); ?>" rel="tag" class="<?php echo $term->slug; ?>"><span class="label label-default label-solution"><?php echo $term->slug; ?></span></a></li>
						    <?php endforeach; ?>
						<?php endif; ?>				</ul>
						<?php the_tags('<span class="glyphicon glyphicon-tags" style="margin:0 7.5px 0 10px;"></span>'); ?>
					</div>
				</div>
			</a>
		</div>
	<?php endwhile; else:?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
	</div>
	<div class="col-md-2">
	<div class="col-md-2">
			<h3>Select by Category</h3>		
			
			<?php
			//list terms in a given taxonomy (useful as a widget for twentyten)
			$taxonomy = 'suppcat';
			$tax_terms = get_terms($taxonomy);
			?>
			<ul class="text-left">
			<?php
			foreach ($tax_terms as $tax_term) {
			echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
			}
			?>
			</ul>
	</div>

	</div>	
</div>
<div class="container-fluid" style="background:#fee119">
		<div class="col-md-12 ">
			<h4>Still haven't found what you are looking for? :(</h4>
			<h4><button class="btn">CONTACT US</button></h4>
		</div>
</div>

<?php get_footer(); ?>