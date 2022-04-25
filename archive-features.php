<?php get_header(); ?>
<div class="features">
  <div class="header">
    <div class="title">
      <h1>Create your perfect <br>service desk</h1>
      <p>Powerful tools built with you in mind to customise and build a solution perfect for your company.</p>
      <a class="sign-up" href="https://house-on-the-hill.com/mothership/register">Try for free</a>
    </div>  
  </div>

  <div class="feature-list-container">
    <div class="feature-list">
      <div class="sub-header">
        <h2>Ticketing</h2>
        <p>
          Ticketing done how you want. Customise create and design how you want your tickets to run and look.
        </p>
        <!--<a class="more-info-alt" href="/integrations">View more Integrations ></a>-->
      </div>
      <div class="posts">
        <?php
          $features_loop = new WP_Query( array(
          'post_type' => 'features',
              'posts_per_page' => 6,
              'tag' => 'Ticketing'
          ) );
          if ( $features_loop->have_posts() ) : ?>
        <?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
          <div class="single-feature">
            <div class="description">
              <div class="img">
                <?php the_post_thumbnail() ?>
              </div>
              <h3><?php the_title();?></h3>
              <p><?php the_field('feature_tagline'); ?></p>
              <a class="more-info-alt" href="<?php the_permalink(); ?>">Find out more ></a>
            </div>
          </div>
        <?php endwhile; else:?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
    
    <div class="feature-list">
      <div class="sub-header">
        <h2>Management</h2>
        <p>
          Manage your services and your team with these features.
        </p>
      </div>
      <div class="posts">
        <?php
          $features_loop = new WP_Query( array(
          'post_type' => 'features',
              'posts_per_page' => 6,
              'tag' => 'Management'
          ) );
          if ( $features_loop->have_posts() ) : ?>
        <?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
          <div class="single-feature">
            <div class="description">
              <div class="img">
                <?php the_post_thumbnail() ?>
              </div>
              <h3><?php the_title();?></h3>
              <p><?php the_field('feature_tagline'); ?></p>
              <a class="more-info-alt" href="<?php the_permalink(); ?>">Find out more ></a>
            </div>
          </div>
        <?php endwhile; else:?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
    
    <div class="feature-list">
      <div class="sub-header">
        <h2>Integrations</h2>
        <p>
          Power Up with HotH Integrations and take advantage of our integrations and offer more to your customers.
        </p>
        <a class="more-info-alt" href="/integrations">View more Integrations ></a>
      </div>
      <div class="posts">
        <?php
          $features_loop = new WP_Query( array(
          'post_type' => 'features',
              'posts_per_page' => 6,
              'tag' => 'Integration'
          ) );
          if ( $features_loop->have_posts() ) : ?>
        <?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
          <div class="single-feature">
            <div class="description">
              <div class="img">
                <?php the_post_thumbnail() ?>
              </div>
              <h3><?php the_title();?></h3>
              <p><?php the_field('feature_tagline'); ?></p>
              <a class="more-info-alt" href="<?php the_permalink(); ?>">Find out more ></a>
            </div>
          </div>
        <?php endwhile; else:?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
  </div>
</div>

<!--<ul class="feature-categories single">
<?php
                  $terms = get_the_terms( $post->ID, 'solution' );
                  if ($terms && ! is_wp_error($terms)): ?>
                  <?php foreach($terms as $term): ?>
                          <li><p href="<?php echo get_term_link( $term->slug, 'solution'); ?>" rel="tag" class="<?php echo $term->slug; ?>"><span class="label label-default"><?php echo $term->name; ?></span></p></li>
                  <?php endforeach; ?>
                  <?php endif; ?>       
                </ul>            -->   
<?php get_footer(); ?>