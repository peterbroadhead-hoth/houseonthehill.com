<?php get_header(); ?>
<div class="features">
  <div class="header">
    <!--<img class="blob" src="/wp-content/themes/houseonthehill.com/images/22icons/original/features-blob.png">-->
    <div class="title">
      <h1>Create your perfect <br>service desk</h1>
      <p>Powerful tools built with you in mind to customise and build a solution perfect for your company</p>
      <a target="" href="/demo/" class="more-info">Request a demo</a>
    </div>  

    <div class="img"><img src="/wp-content/themes/houseonthehill.com/images/2023/features-graphic.png" alt="ticket logging page graphic"></div>
  </div>

  <div class="feature-list-container">
    <div class="feature-list">
      <div class="sub-header">
        <h2>Ticketing</h2>
        <p>
          Ticketing done how you want. Customise create and design how you want your tickets to run and look.
        </p>
        <!--<a class="more-info-alt" href="/ticketing">View more Ticketing ></a>-->
      </div>
      <div class="posts">
        <?php
          $features_loop = new WP_Query( array(
          'post_type' => 'features',
              'posts_per_page' => 99,
              'tag' => 'Ticketing'
          ) );
          if ( $features_loop->have_posts() ) : ?>
        <?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
          <div class="single-feature">
            <a class="more-info-alt" href="<?php the_permalink(); ?>">
              <div class="description">
                <div class="img">
                  <?php the_post_thumbnail() ?>
                </div>
                <h3><?php the_title();?></h3>
                <p><?php the_field('feature_tagline'); ?></p>
              </div>
            </a>
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
        <!--<a class="more-info-alt" href="/integrations/">View more Integrations ></a>-->
      </div>
      <div class="posts">
        <?php
          $features_loop = new WP_Query( array(
          'post_type' => 'features',
              'posts_per_page' => 99,
              'tag' => 'Integration'
          ) );
          if ( $features_loop->have_posts() ) : ?>
        <?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
          <div class="single-feature">
            <a class="more-info-alt" href="<?php the_permalink(); ?>">
              <div class="description">
                <div class="img">
                  <?php the_post_thumbnail() ?>
                </div>
                <h3><?php the_title();?></h3>
                <p><?php the_field('feature_tagline'); ?></p>
              </div>
            </a>
          </div>
        <?php endwhile; else:?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>

    <div class="feature-list">
      <div class="sub-header">
        <h2>Customisation & Branding</h2>
        <p>
          Customise your service to yours and your customers needs.
        </p>
      </div>
      <div class="posts">
        <?php
          $features_loop = new WP_Query( array(
          'post_type' => 'features',
              'posts_per_page' => 99,
              'tag' => 'config'
          ) );
          if ( $features_loop->have_posts() ) : ?>
        <?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
          <div class="single-feature">
            <a class="more-info-alt" href="<?php the_permalink(); ?>">
              <div class="description">
                <div class="img">
                  <?php the_post_thumbnail() ?>
                </div>
                <h3><?php the_title();?></h3>
                <p><?php the_field('feature_tagline'); ?></p>
              </div>
            </a>
          </div>
        <?php endwhile; else:?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
    
    <div class="feature-list">
      <div class="sub-header">
        <h2>Facilities Management</h2>
        <p>
          Manage your services and your team with these features.
        </p>
        <!--<a class="more-info-alt" href="/management-features">View more Management Tools ></a>-->
      </div>
      <div class="posts">
        <?php
          $features_loop = new WP_Query( array(
          'post_type' => 'features',
              'posts_per_page' => 99,
              'tag' => 'fm'
          ) );
          if ( $features_loop->have_posts() ) : ?>
        <?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
          <div class="single-feature">
            <a class="more-info-alt" href="<?php the_permalink(); ?>">
              <div class="description">
                <div class="img">
                  <?php the_post_thumbnail() ?>
                </div>
                <h3><?php the_title();?></h3>
                <p><?php the_field('feature_tagline'); ?></p>
              </div>
            </a>
          </div>
        <?php endwhile; else:?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>

    <div class="feature-list">
      <div class="sub-header">
        <h2>Support Tools</h2>
        <p>
          Support your customers with the support they want. 
        </p>
        <!--<a class="more-info-alt" href="/support-features">View more Support Tools ></a>-->
      </div>
      <div class="posts">
        <?php
          $features_loop = new WP_Query( array(
          'post_type' => 'features',
              'posts_per_page' => 99,
              'tag' => 'support'
          ) );
          if ( $features_loop->have_posts() ) : ?>
        <?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
          <div class="single-feature">
            <a class="more-info-alt" href="<?php the_permalink(); ?>">
              <div class="description">
                <div class="img">
                  <?php the_post_thumbnail() ?>
                </div>
                <h3><?php the_title();?></h3>
                <p><?php the_field('feature_tagline'); ?></p>
              </div>
            </a>
          </div>
        <?php endwhile; else:?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>

    <div class="feature-list">
      <div class="sub-header">
        <h2>Reporting & Workflow</h2>
        <p>
          Monitor your teams performance with these features, add them to your dashboards for instant results.
        </p>
      </div>
      <div class="posts">
        <?php
          $features_loop = new WP_Query( array(
          'post_type' => 'features',
              'posts_per_page' => 99,
              'tag' => 'reporting'
          ) );
          if ( $features_loop->have_posts() ) : ?>
        <?php while ( $features_loop->have_posts() ) : $features_loop->the_post(); ?>
          <div class="single-feature">
            <a class="more-info-alt" href="<?php the_permalink(); ?>">
              <div class="description">
                <div class="img">
                  <?php the_post_thumbnail() ?>
                </div>
                <h3><?php the_title();?></h3>
                <p><?php the_field('feature_tagline'); ?></p>
              </div>
            </a>
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