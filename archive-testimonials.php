<?php get_header(); ?>

<!--<div class="testimonials">
	<div class="container">
		<div class="slider">
			<div class="slide-track">
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
				</div>
				<div class="slide">
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
				</div>
			</div>
		</div>
	</div>
</div>-->
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
					        'posts_per_page' => 999
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

<style>
body {
  align-items: center;
  background: #E3E3E3;
  display: flex;
  height: 100vh;
  justify-content: center;
}

@-webkit-keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-250px * 7));
  }
}

@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-250px * 7));
  }
}
.slider {
  background: white;
  box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
  height: 100px;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 960px;
}
.slider::before, .slider::after {
  background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
  content: "";
  height: 100px;
  position: absolute;
  width: 200px;
  z-index: 2;
}
.slider::after {
  right: 0;
  top: 0;
  transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  -webkit-animation: scroll 40s linear infinite;
          animation: scroll 40s linear infinite;
  display: flex;
  width: calc(250px * 14);
}
.slider .slide {
  height: 100px;
  width: 250px;
}
</style>
<?php get_footer(); ?>