<?php get_header();?>
<div class="solution-header csm">
  <div class="solution-header-container">
    <div class="text">
      <h1>Customer Service Management</h1> 
      <p>Support your Customers with House-on-the-Hill CSM service desk solution.</p>
      <div class="signup-buttons">
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
          <input type="HIDDEN" name="F2178" id="F2178" size="1" value="CSM">
          <input required="" type="TEXT" name="F2177" id="F2177" class="company-name" maxlength="25" value="" placeholder="Company Name">
          <input required="" type="TEXT" name="F38" id="F38" class="email-address" size="0035" maxlength="10000" placeholder="Email Address">
          <div id="captcha_result"></div>
          <input onclick="GetCustomEvent()" class="Button" id="reg_submit" type="Submit" value="Start trial">
        </form>
      </div>      <p><strong>1000's of organisations have benefited from House-on-the-Hill's <br>30 years experience in creating bespoke service desk solutions.</strong></p>
      <div class="customers">
            <a href="https://www.nhs.uk/" target="_blank" rel="noopener">
              <img height="25" width="55" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/25/nhs-25.png" alt="NHS Logo">
            </a>  
            <a href="https://www.broadwaymalyan.com/" target="_blank" rel="noopener">
              <img height="25" width="147" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/25/bm-25.png" alt="Broadway Malyan Logo">
            </a>  
            <a href="https://www.bbraun.co.uk/en.html" target="_blank" rel="noopener">
              <img height="25" width="129" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/25/bbraun-25.png" alt="BBraun Medicine Logo">
            </a>  
            <a href="https://www.hollandandbarrett.com/" target="_blank" rel="noopener">
              <img height="25" width="134" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/25/hb-25.png" alt="Holland & Barrett Logo">
            </a>  
            <a href="https://www.dentons.com/en" target="_blank" rel="noopener">
              <img height="25" width="129" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/25/dentons-25.png" alt="Dentons Law Firm Logo">
            </a>  
      </div>
    </div>
  </div>
</div>

<div class="solution-testimonial csm">
  <div class="solution-testimonial-container">
    <h2>" The team at House-on-the-Hill are doing a great job at assisting the integration of the service desk and sorting out all the question and changes. "</h2>
    <p>Allan Andrews <span>BBraun Australia Pty Ltd</span></p>
  </div> 
  <img src="/wp-content/uploads/2021/09/CSM-screenshot-2021.png" alt="House-on-the-Hill Agent Dashboard">
</div>



<div class="solution-key-features">
  <div class="solution-key-features-container">
    <h2>Support your customers</h2>
    <p>All the tools needed for a quality customer support service.</p>
    <ul class="solutions">
      <li>
        <div class="icon"><img src="/wp-content/uploads/2020/08/self-service-portal.png"></div>
        <h3>Self-Service <br>Portal</h3>
        <p>Enable and encourage your customers to log and track their issues and requests directly, easing the workload of the service desk. Simple navigation provided with a personally styled dashboard to promote your services.</p>
        <a href="/features/self-service" class="more-info">Find out more</a>
      </li>
      <li>
        <div class="icon"><img src="/wp-content/uploads/2021/05/csmfeedbackicon.png"></div>
        <h3>Customer Feedback <br>Surveys</h3>
        <p>Identify which of the services you provide are performing best for your business by asking for feedback via Customer Satisfaction Surveys.</p>
        <a href="/features/customer-satisfaction-survey-tool/" class="more-info">Find out more</a>
      </li>
      <li>
        <div class="icon"><img src="/wp-content/uploads/2021/04/reading-a-book.png"></div>
        <h3>Knowledgbase</h3>
        <p>Customers can also be offered the option to self-diagnose issues with access to Frequently Asked Questions: a specially screened area of your service desk KnowledgeBase.</p>
        <a class="more-info" href="/features/knowledgebase">Find out more</a>
      </li>
      <li>
        <div class="icon"><img src="/wp-content/uploads/2020/12/customer-specific-forms.png"></div>
        <h3>Create Customer <br>Specific Forms</h3>
        <p>Create custom forms to capture essential information, such as equipment request, starter, mover, leaver forms. The Drag and Drop Form Builder allows you to create your own forms with unique functionality and workflows.</p>
        <a href="/features/drag-and-drop-form-builder/" class="more-info">Find out more</a>
      </li>
    </ul>
  </div>
  <div class="iso-btns">
    <h3>ISO certified, we take your data very seriously.</h3>
    <a href="https://cvs.babcert.com/babcert.asp?c=234054&v=wgb5351g6c"  target="_blank" rel="noopener">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/iso-2021.png" height="50"/>
    </a>
    <a href="<?php echo site_url();?>/wp-content/uploads/2020/04/Essentials-20-21.pdf"  target="_blank">
      <img class="alignnone wp-image-9961 size-medium" src="/wp-content/uploads/2018/10/ca.png" height="50"/>
    </a>
    <a href="https://www.digitalmarketplace.service.gov.uk/g-cloud/search?q=House-on-the-Hill&lot=cloud-software"  target="_blank">
      <img class="alignnone wp-image-9961 size-medium" src="/wp-content/uploads/2020/06/ccs-200.png" height="50"/>
    </a> 
  </div>
</div>

<div class="solution-features">
  <div class="solution-features-container">
    <h2>Helping you to help your customers</h2>
    <p>All the tools needed for a quality customer support service.</p>
    <ul class="features csm">
      <li>
        <div class="icon"><i class="far fa-handshake-alt"></i></div>
        <h3> Manage Customer Relationships</h3>
        <p>Customer Relationship Management with sophisticated formula editor and intuitive filtering enables the creation of effectively targeted campaigns, with Sales Opportunities to manage new prospects.</p>
      </li>
      <li>
        <div class="icon"><i class="far fa-tachometer-fast"></i></div>
        <h3>Monitor and Report on Performance</h3>
        <p>Schedule service desk reports to display Customer Service Management data such as Assignee Performance, Tickets Logged by Customer and Priority, Contract Expiration dates and more.</p>
      </li>
      <li>
        <div class="icon"><i class="far fa-file-signature"></i></div>
        <h3>Contracts</h3>
        <p>Keep a record of customers contracts with you and get reminded on renewal and expiry dates.</p>
      </li>
      <li>
        <div class="icon"><i class="fal fa-credit-card"></i></div>
        <h3>Purchase Orders</h3>
        <p>Easily order kit with your suppliers and link to your customers tickets.</p>
      </li>
      <li>
        <div class="icon"><i class="far fa-chart-bar"></i></div>
        <h3>Easy Reporting</h3>
        <p>Build your own custom reports with our easy report builder and schedule them to be run and emailed as required.</p>
      </li>
      <li>
        <div class="icon"><i class="far fa-traffic-light-stop"></i></div>
        <h3>SLA</h3>
        <p>Different SLAs can be set against Customers, Contracts and Inventory.</p>
      </li>
    </ul>
  </div>
</div>
<?php get_footer();?>