<?php get_header(); ?>
<div class="features single-page">
  <div class="header">
   <img class="blob" src="https://houseonthehill.com/wp-content/themes/houseonthehill.com/images/22icons/original/features-blob.png">
    <div class="title">
      <h1>Manage Efficiently</h1>
      <p>Efficiently manage all aspects of your business with HotH, track engineers and monitor your assets.</p>
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
    <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/22icons/original/fmfeatures.png" alt="ticket logging page graphic"></div>
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
      <div class="img"><img src="/wp-content/uploads/2020/06/booking.png" alt="ticket status"></div>
      <p><strong>Resource Booking</strong></p>
      <p>Resource Booking function creates  booking calendars, listing which asset has been reserved and when to avoid booking clashes.</p>
    </li>
    <li>
      <div class="img"><img src="/wp-content/uploads/2020/06/piggybank-2.png" alt="piggy bank"></div>
      <p><strong>
      <p>Financial Management</strong></p>
      <p>Financial Management enables businesses to manage costs, contracts and suppliers associated with the services provided to customers, all through the service desk.</p>
    </li>
    <li>
      <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/22icons/expense.png" alt="expense forms"></div>
      <p><strong>Expense Forms</strong></p>
      <p>Custom Expense Forms record all Expense details, including who has Raised the Expense and when, and who it has been Approved By.</p>
    </li>
    <li>
      <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/22icons/clock.png" alt="time sheet"></div>
      <p><strong>Timesheets</strong></p>
      <p>Timesheet Forms record associated costs, including rates per hour, VAT costs and can specify currency.</p>
    </li>
    <li>
      <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/22icons/original/mobile.png" alt="ticket status"></div>
      <p><strong>HotH Mobile</strong></p>
      <p>HotH’s mobile service desk allows engineers to access the work queue and to log, update and escalate work orders while working on customer sites.</p>
    </li>
    <li>
      <div class="img"><img src="/wp-content/uploads/2021/06/kpi.png" alt="KPI monitor"></div>
      <p><strong>Performance Monitoring</strong></p>
      <p>KPI Monitor offers a real-time overview of Key Performance Indicators, such as the Average Age of Work Requests by Assignee, or if SLAs have been met.</p>
    </li>
  </ul>

  <ul>
    <li>
      <div class="text">
        <h2>Asset and Software Licence Management</h2>
        <p><strong>Complete IT inventory management for your helpdesk</strong></p>
        <p>Asset and Software Licence Management with House-on-the-Hill enables you to analyse and report on your company’s hardware, and ensure complete software licence compliance. Pro-actively manage the asset life-cycle, calculate which items you have in stock, and stay up to date with software versions.</p>
        <br>
        <p><strong>Customise your audit dashboard</strong></p>
        <p>House-on-the-Hill’s asset management function includes a fully customisable Audit Dashboard for displaying multiple audit reports. The dashboard is editable via House-on-the-Hill’s drag n drop dashboard designer, enabling you to select and edit the reports you wish to display, plus you can choose which users are able to access the dashboard. The Audit Dashboard provides a complete overview of asset status and performance at-a-glance.</p>
      </div>
      <div class="img">
        <img src="/wp-content/themes/houseonthehill.com/images/screenshots/assetdetails.webp" alt="in the loop" width="auto" height="auto">
      </div>
    </li>

    <li>
      <div class="img">
        <img src="/wp-content/themes/houseonthehill.com/images/screenshots/ppm.webp" alt="in the loop" width="auto" height="auto">
      </div>
      <div class="text">
        <h2>Planned Preventative Maintenance</h2>
        <p><strong>Planned Preventative Maintenance Software for FM Helpdesk</strong></p>
        <p>Planned Preventative Maintenance software enables the scheduling of repeat maintenance tasks, and is a feature of SupportDesk for Facilities Management.</p>
        <br>
        <p><strong>Schedule Calendars</strong></p>
        <p>PPM Schedule calendars display upcoming jobs, whether viewed by Customer, Inventory or Login. Automatic notifications of scheduled jobs can be sent to assignees, customers and managers.</p>
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