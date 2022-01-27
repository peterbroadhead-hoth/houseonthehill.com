<?php get_header();?>
<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('captcha_result', {
          'sitekey' : '6LeB7xgTAAAAAED-unfhzx3ZTuvE2dG-2gKmhdV6'
        });
      };
    </script>
<div class="demo">
  <div class="demo-container">
    <div class="header">
      <h1>See House-on-the-Hill in action!</h1>
      <p>Let one of our team show you around your own personalised trial which you get to take away! This is a great way for us to learn about you and show you on the fly how HotH can help your organisation. No matter the size. </p>
      <p style="margin-top: 10px;">Just fill out this form or email <b>demo@houseonthehill.com</b> and we can arrange a Microsoft Teams meeting for when's best for you.</p>
    </div>
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
        <input required="" type="TEXT" name="F2177" id="F2177" maxlength="25" value="" placeholder="Company Name">
        <input type="TEXT" name="F10011" id="F10011" class="suptabde" size="0035" maxlength="10000" placeholder="Your Name">
        <input type="TEXT" name="F38" id="reg_email" size="0035" maxlength="50" value="" placeholder="Email Address">
        <select class="suptabde" name="F10013" id="F10013" size="1">
          <option value="ITSM" selected="">ITSM</option>
          <option value="CAFM">CAFM</option>
          <option value="CSM">CSM</option>
          <option value="FOI">FOI</option>
        </select>
        <textarea class="suptabde" name="F10" id="F10" placeholder="When would you like the demo / What areas or features would you like us to cover?"></textarea>
        <div id="captcha_result"></div>
        <input class="submit" type="submit" value="Send Demo Request"> 
      </form>
      <script src=https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit
        async defer>
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
<div class="hoth-single-testimonial">
  <div class="hoth-single-testimonial-container">
    <h2>HotH’s knowledge is excellent and their ability to find solutions to even the most complicated requirements is second to none.</h2>
    <p>Andrea Ashurst, Compliance Manager <span>Ascot Services</span></p>
  </div> 
</div>
<?php get_footer();?>