<?php get_header(); ?>
<!--<div class="sub-header">
  <nav>
    <div class="trigger-menu-wrapper">
        <div class="container">
            <a href="/features/"><p>Back to all features</p><i class="fas fa-long-arrow-alt-left"></i></a>
            <div class="compatibility">
                <p>Compatible with:</p>
                <ul class="feature-categories single">
                    <?php
                    $terms = get_the_terms( $post->ID, 'solution' );
                    if ($terms && ! is_wp_error($terms)): ?>
                    <?php foreach($terms as $term): ?>
                            <li><p href="<?php echo get_term_link( $term->slug, 'solution'); ?>" rel="tag" class="<?php echo $term->slug; ?>"><span class="label label-default"><?php echo $term->name; ?></span></p></li>
                    <?php endforeach; ?>
                    <?php endif; ?>             
                </ul>
            </div>
        </div>
    </div>
  </nav>
</div>-->
 
<a href="" role="button" aria-label="Toggle menu" class="lottie-wrapper"></a>
 
<div class="features single">
    <div class="header">
        <div class="title">
            <div class="img">
                <?php the_post_thumbnail(); ?>
            </div>
            <h1><?php the_title(); ?></h1>
            <hr>
            <p><?php the_field('feature_tagline'); ?></p>
            <div class="form">
							<form action=https://www.house-on-the-hill.com:443/mothership/supisacs.dll method="POST" id="theForm" name="theForm" class="hoth_signup" onsubmit="return Form_Validator(this);" enctype="multipart/form-data">
											<input type="HIDDEN" id="entrytoggle" name="entrytoggle" value="">
											<input type="HIDDEN" id="selchange" name="selchange" value="">
											<input type="HIDDEN" id="selparam1" name="selparam1" value="">
											<input type="HIDDEN" id="AjaxUpdate" name="AjaxUpdate" value="">
											<input type="HIDDEN" id="A" name="A" value="AnonCall">
											<input type="HIDDEN" id="F1" name="F1" value="">
											<input type="HIDDEN" id="F2158" name="F2158" value="0">
											<input type="HIDDEN" id="NextStep" name="NextStep" value="">
											<input type="HIDDEN" id="F2126" name="F2126" value="341">
											<input type="HIDDEN" id="F2127_ctrl" name="F2127_ctrl" value="">
											<input type="HIDDEN" id="F2128_ctrl" name="F2128_ctrl" value="">
											<input type="HIDDEN" id="F2150_ctrl" name="F2150_ctrl" value="">
											<input type="HIDDEN" id="F2129_ctrl" name="F2129_ctrl" value="">
											<input type="HIDDEN" id="F2130_ctrl" name="F2130_ctrl" value="">
											<input type="HIDDEN" id="F2148_ctrl" name="F2148_ctrl" value="">
											<input type="HIDDEN" id="F2149_ctrl" name="F2149_ctrl" value="">
											<input type="HIDDEN" id="ActResolved_ctrl" name="ActResolved_ctrl" value="">
											<input type="HIDDEN" id="ActRespondedTo_ctrl" name="ActRespondedTo_ctrl" value="">
											<input type="HIDDEN" id="F5006_ctrl" name="F5006_ctrl" value="">
											<input type="HIDDEN" id="F" name="F" value="0">
											<input type="HIDDEN" id="CCSM" name="CCSM" value="0">
											<input type="HIDDEN" id="InitMedium" name="InitMedium" value="8192">
											<input type="HIDDEN" id="SummViewFold" name="SummViewFold" value="0">
											<input type="HIDDEN" id="F3" name="F3" value="25">
											<input type="HIDDEN" id="F2156" name="F3" value="48">
											<input type="HIDDEN" id="savebtn" name="savebtn" value="">
											<input type="HIDDEN" id="savebtn1" name="savebtn1" value="">
											<input type="HIDDEN" name="F2178" id="F2178" size="1" value="Demo">
											<!--<input type="TEXT" name="F10011" id="F10011" class="suptabde" size="0035" maxlength="10000" placeholder="Your Name">-->
											<input type="TEXT" name="F38" id="reg_email" size="0035" maxlength="50" value="" placeholder="Email Address">
									<div id="captcha_result"></div>
											<input class="submit" type="submit" value="Book a demo"> 
									</form>
									<script src=https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit async defer>
									</script>
									<script>
									var form = document.getElementById('theForm');
									form.addEventListener("submit", function(event){
									if (grecaptcha.getResponse() === '') {                            
									event.preventDefault();
									alert('Please check the recaptcha');
									}
									}
									, false);
									</script>
					</div>
        </div>  
    </div>
  
    <div class="content">
        <?php the_content(); ?> 
    </div>
</div>
 
<script>
const body = document.body;
const triggerMenu = document.querySelector(".sub-header");
const nav = document.querySelector(".sub-header nav");
const menu = document.querySelector(".sub-header .menu");
const lottieWrapper = document.querySelector(".lottie-wrapper");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;
 
triggerMenu.addEventListener("click", () => {
  body.classList.toggle("menu-open");
});
 
lottieWrapper.addEventListener("click", (e) => {
  e.preventDefault();
  triggerMenu.click();
  body.classList.toggle("menu-open-with-lottie");
});
 
window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 0) {
    body.classList.remove(scrollUp);
    return;
  }
 
  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
    lottiePlayer.play();
  } else if (
    currentScroll < lastScroll &&
    body.classList.contains(scrollDown)
  ) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
    lottiePlayer.stop();
  }
  lastScroll = currentScroll;
});
</script>
 
<?php get_footer(); ?>