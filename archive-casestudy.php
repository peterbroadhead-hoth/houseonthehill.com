<?php get_header(); ?>
<div class="container case-study">
	<div class="case-study-header">
		<div class="header-container">
			<div class="header">
				<h1>House-on-the-Hill Case Studies</h1>
				<p>How customers made our House their Home</p>
			</div>
		</div>
	</div>
	<div class="case-study">
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
				<div class="thumbnail feat-thumbnail">
					<div class="caption">
						<div class="img">
							<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
						</div>
						<h3><?php the_title();?></h3>
						<p>
							<?php
								$excerpt = get_the_excerpt();
								echo string_limit_words($excerpt,25);
							?>...
						</p>
						<ul class="feature-categories">
						<?php
						$terms = get_the_terms( $post->ID, 'solution' );
						if ($terms && ! is_wp_error($terms)): ?>
						    <?php foreach($terms as $term): ?>
							        <li><a href="<?php echo get_term_link( $term->slug, 'solution'); ?>" rel="tag" class="<?php echo $term->slug; ?>"><span class="label label-default label-solution"><?php echo $term->name; ?></span></a></li>
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
	</div>
</div>

<style>
.container.case-study{
 background-color: #ffefdb;
 width: 100%;
 padding: 0;
 padding-bottom: 200px;
}

.case-study-header{
	background: #ffca8a;
	padding: 50px 10px;
	background-image: url(/wp-content/uploads/2020/10/casestudy.png);
	background-repeat: no-repeat;
  background-size: 600px;
  background-position-y: -50px;
  background-position-x: 105%;
  height: 300px;
	width: 100%;
}

.header-container{
	width: 80%;
	margin: auto;
	background-image: url(/wp-content/uploads/2021/05/9A9CAAD5-F40B-4101-9218-6FC3EAF9CFDA.png);
	background-repeat: no-repeat;
	background-position-y: 40px;
	background-position-x: -20px;
	padding: 50px;
}

.header-container .header{
	margin-left: -50px;
	width: 765px;
}

.case-study{
	width: 80%;
	margin: auto;
	padding: 100px 10px;
}

.case-study .col-md-12{
	width: 100%;
	padding: 0;
	margin: auto;
	display: flex;
	flex-wrap: wrap;
}

.case-study .col-md-12 .col-md-3{
	width: 20%;
	margin-right: 5%;
	margin-bottom: 50px;
	background: white;
	border-radius: 4px;
	padding: 20px;
	-webkit-box-shadow: 0px 0px 5px 3px rgba(250,227,200,1);
-moz-box-shadow: 0px 0px 5px 3px rgba(250,227,200,1);
box-shadow: 0px 0px 5px 3px rgba(250,227,200,1);
}

.case-study .col-md-12 .thumbnail{
	background-color: unset;
	border: unset;
	padding: 0;
}

.case-study .col-md-12 .thumbnail .caption{
	padding: 0;
}

.case-study .col-md-12 .thumbnail .caption h3{
	margin-top: 5px;
}

.case-study .col-md-12 .thumbnail .caption a{
	color: unset;
}

.case-study .col-md-12 .thumbnail .caption p{
	display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.case-study .col-md-12 .col-md-3 .img{
	width: 100px;
	height: 100px;
}

.case-study .col-md-12 .col-md-3 .img img{
	max-width: 100%;
	height: auto;
}

.case-study .col-md-12 .col-md-3 .feature-categories{
	position: absolute;
	bottom: 5px;
	display: flex;
	flex-wrap: wrap;
}

.case-study .col-md-12 .col-md-3 .feature-categories li{
	list-style: none;
	margin-right: 5px;
}
</style>

<?php get_footer(); ?>