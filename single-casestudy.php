<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="single-case-study">
	<div class="header-container">
		<div class="header">			
			<h1><?php the_title(); ?></h1>
		</div>		
	</div>	
</div>


<div class="single-case-study-content">
	<?php the_content(); ?>
	<div class="img">
		<div class="col-md-8 text-center">
		<?php 
		$images = get_field('gallery');       
		if( $images ): ?>
				<div id="slider" class="flexslider feat-slider">
					<ul class="slides">
					<?php foreach( $images as $image ): ?>
					<li class="text-center">
					<p><?php echo $image['caption']; ?></p>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />                           
					</li>
					<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>             
		</div>
  </div>
</div>

<div class="stay-updated-container">
	<div class="stay-updated">
		<?php get_template_part('inc/mailchimp-small'); ?>
	</div>
</div>

<div class="case-study-btn">
	<h2><a href="/casestudy">Back to Case Studies</a></h2>
</div>

<style>
.blog-content img{
	float: left;
	margin:10px;
}
</style>

<?php endwhile; else: ?>
	<p>Test 1. Sorry, no posts matched your criteria.</p>
<?php endif; ?>	


<script src="<?php echo site_url(); ?>/wp-content/themes/hoth/js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(window).load(function() {
$('.flexslider').flexslider({
      animation: "slide",
      slideshowSpeed: 10000,     
    });
});
</script>
<?php get_footer(); ?>