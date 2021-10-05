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
.single-case-study-content h4{
	text-align:left;
}

.blog-content img{
	float: left;
	margin:10px;
}
</style>

<?php endwhile; else: ?>
	<p>Test 1. Sorry, no posts matched your criteria.</p>
<?php endif; ?>	


<?php get_footer(); ?>