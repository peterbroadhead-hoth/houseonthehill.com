
<?php get_header();?>
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
  <input type="HIDDEN" id="F3" name="F3" value="66">
  <!--<input type="HIDDEN" id="F2156" name="F3" value="48">-->
  <input type="HIDDEN" id="savebtn" name="savebtn" value="">
  <input type="HIDDEN" id="savebtn1" name="savebtn1" value="">
  <input type="HIDDEN" name="F2178" id="F2178" size="1" value="Demo">
  <input required="" type="hidden" name="F2177" id="F2177" maxlength="25" value="" placeholder="Company Name">
  <input type="hidden" name="F38" id="F38" value="demo@houseonthehill.com">
  <input type="TEXT" name="F10010" id="reg_email" size="0035" maxlength="50" value="" placeholder="Email Address">
  <div id="captcha_result"></div>
  <input class="submit" type="submit" value="Book a demos"> 
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

<script>
  const email = document.getElementById("reg_email");
  const company_name = document.getElementById("F2177");
  email.addEventListener("keyup", () => {
    company_name .value = email.value;
  });
</script>

<?php get_footer();?>