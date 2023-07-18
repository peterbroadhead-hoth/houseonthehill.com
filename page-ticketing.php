<?php get_header(); ?>
<div class="features single-page">
  <div class="header">
   <img class="blob" src="https://houseonthehill.com/wp-content/themes/houseonthehill.com/images/22icons/original/features-blob.png">
    <div class="title">
      <h1>Customer support done your way</h1>
      <p>Customise the way you want to support your customers, create your own ticket templates and SLAs to suit you and your customers.</p>
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
    <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/22icons/original/ticketlogging.png" alt="ticket logging page graphic"></div>
  </div>

  <div class="testimonials">
    <div class="container">
        <p>Trusted by all companies, big and small</p>
      
      <div class="customers">
        <a href="https://www.nhs.uk/" target="_blank" rel="noopener">
          <img height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/50/nhs-50.png" alt="NHS Logo">
        </a>  
        <a href="https://www.broadwaymalyan.com/" target="_blank" rel="noopener">
          <img height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/50/bm-50.png" alt="Broadway Malyan Logo">
        </a>  
        <a href="https://weareworldchallenge.com/uk/" target="_blank" rel="noopener">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/worldchallenge.webp" alt="World Challenge Logo">
        </a>  
        <a href="https://www.speedyservices.com" target="_blank" rel="noopener">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/speedy.webp" alt="speedy Logo">
        </a>  
        <a href="https://www.hollandandbarrett.com/" target="_blank" rel="noopener">
          <img height="25" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/50/hb-50.png" alt="Holland & Barrett Logo">
        </a>  
      </div>
    </div>
  </div>

  <ul class="quick-view">
    <li>
      <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/22icons/status.png" alt="ticket status"></div>
      <p><strong>Ticket Status</strong></p>
      <p>Track status' of tickets you've logged and those logged for you.</p>
    </li>
    <li>
      <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/22icons/types.png" alt="tyypes and sub types"></div>
      <p><strong>Types & Sub-Types</strong></p>
      <p>Sort depending upon the areas of your organisation that you are supporting.</p>
    </li>
    <li>
      <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/22icons/priority.png" alt="ticket priority"></div>
      <p><strong>Priority</strong></p>
      <p>Use Priorities to set target times for ticket resolution.</p>
    </li>
  </ul>

  <ul>
    <li>
      <div class="text">
        <h2>In the Loop</h2>
        <p><strong>Keep your customers ‘In the Loop’ on ticket activity</strong></p>
        <p>Keep users notified of ticket updates even when they are not actively assigned to the call, send email updates to users as and when needed.</p>
        <br>
        <p><strong>Choose who you keep in the loop</strong></p>
        <p>You can add users to be kept ‘In the Loop’ on ticket updates, and take them away when they no longer are required.</p>
      </div>
      <div class="img">
        <img src="/wp-content/themes/houseonthehill.com/images/screenshots/intheloop.webp" alt="in the loop" width="auto" height="auto">
      </div>
    </li>

    <li>
      <div class="img">
        <img src="/wp-content/themes/houseonthehill.com/images/screenshots/quickticket.webp" alt="in the loop" width="auto" height="auto">
      </div>
      <div class="text">
        <h2>Ticket Templates</h2>
        <p><strong>Create re-usable template for frequent or repeat incidents and requests</strong></p>
        <p>You can use QuickTickets to build up a portfolio of common calls, providing a swift way of completing the ticket details. In conjunction with HouseForms, you can associate a Form with a QuickTickets for logging specialist issues, such as a ‘New Starter’ or Equipment Request’.</p>
        <br>
        <p><strong>Create call templates for individual service desk processes</strong></p>
        <p>QuickTickets Helpdesk call templates can also be created in House-on-the-Hill for individual service desk processes. It is possible to lock QuickTickets into specific processes, so that templates can be created in accordance with the requirements of the process. This is useful, as Incident Management, Request Fulfilment, Change Management, Problem Management etc. utilise different categorisations and workflows.</p>
      </div>
    </li>
  </ul>
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