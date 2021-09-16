<?php get_header(); ?>
<div class="sub-header">
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
</div>
 
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