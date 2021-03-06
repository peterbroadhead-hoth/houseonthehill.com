<?php get_header(); ?>
<div class="container case-study">
	<div class="case-study-header">
		<div class="header-container">
			<div class="header">
				<img src="/wp-content/themes/houseonthehill.com/images/case-study.png">
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
						<!--<ul class="feature-categories">
						<?php
						$terms = get_the_terms( $post->ID, 'solution' );
						if ($terms && ! is_wp_error($terms)): ?>
						    <?php foreach($terms as $term): ?>
							        <li><a href="<?php echo get_term_link( $term->slug, 'solution'); ?>" rel="tag" class="<?php echo $term->slug; ?>"><span class="label label-default label-solution"><?php echo $term->name; ?></span></a></li>
						    <?php endforeach; ?>
						<?php endif; ?>				</ul>-->
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
	background-repeat: no-repeat;
  background-size: 600px;
  background-position-y: -50px;
  background-position-x: 105%;
  height: auto;
	width: 100%;
}

.case-study-header img{
	height: 250px;
	margin-bottom: 50px;
}

.header-container{
	width: 80%;
	margin: auto;
	padding: 50px;
}

.header-container .header{
	text-align: center;
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
	width: 30%;
	margin: 1%;
	background: white;
	border-radius: 4px;
	padding: 10px;
	-webkit-box-shadow: 0px 0px 5px 3px rgba(250,227,200,1);
-moz-box-shadow: 0px 0px 5px 3px rgba(250,227,200,1);
box-shadow: 0px 0px 5px 3px rgba(250,227,200,1);
}

.case-study .col-md-12 .col-md-3:hover{
	-webkit-box-shadow: 0px 0px 7px 5px rgba(250, 207, 169, 1);
-moz-box-shadow: 0px 0px 7px 5px rgba(250, 207, 169, 1);
box-shadow: 0px 0px 7px 5px rgba(250, 207, 169, 1);
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
	font-size: 18px;
}

.case-study .col-md-12 .thumbnail .caption a{
	color: unset;
}

.case-study .col-md-12 .thumbnail .caption p{
	display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
	font-size: 14px;
}

.case-study .col-md-12 .col-md-3 .img{
	height: 50px;
	margin-bottom: 20px;
}

.case-study .col-md-12 .col-md-3 .img img{
	width: auto;
	height: 100%;
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