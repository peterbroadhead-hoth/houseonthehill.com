<?php get_header();?>
<h1>The Latest SupportDesk - 2018</h1>
<div class="container" style="width:680px;margin:0px auto;transform:scale(0.6);position:relative;">
<div class="screen monitor wow fadeIn">
  <div class="content">
    <div class="pg">
      <ul class="btns">
      </ul>
      <ul class="txt">
        <li></li>        
        <li></li>
        <li class="thin" style="background:lightgreen"></li>
        <li class="thin" style="background:coral"></li>
        <li class="thin" style="background:lightblue"></li>
      </ul>  
    </div>
  </div>
  <div class="base  wow fadeIn">
    <div class="grey-shadow"></div>
    <div class="foot top"></div>
    <div class="foot bottom"></div>
    <div class="keyboard">
      <div class="btm"></div>
      <ul class="keys">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>
</div>
  <div class="phone  wow fadeIn">
    <div class="screen">
      <div class="content">
            <ul class="txt">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
      </div>
    </div>   
  </div>
</div>
</br></br>
<h1 style="font-size: 17px; width:  70%; margin-left: 15%;">Supportdesk update is made available earlier this year to allow for testing of features added in support of GDPR; 2FA and the 'right to be forgotten'</h1>

<div class="row" style="margin-top:50px; padding-bottom:25px;">
  <div class="col-md-3"></div>
  <div class="col-md-6 wow">
	<p style="text-align:center"><b></b></p>
  </div>
</div>

<!--<div class="row text-center pad-small" style="background:white;padding-bottom:0;border-top:solid 1px #ccc;">
  <div class="container"> 
	<h2 style="">New Look for 2018!</h2>
  </div>  
  <img src="/wp-content/uploads/2018/01/2018styling.png" height="300">
</div>-->
 

<div class="row feat-2015" style="border-top:solid 1px #ccc;">
  <div class="col-md-1"></div>

<div class="col-md-5" style="width: 85%; height: auto;">
    <h3>SupportDesk – GDPR Requirement – The Right to be Forgotten</h3>  
	<p>GDPR will apply from 25th May 2018. A new requirement that was not in the previous DP rules is the right for individuals to be ‘forgotten’ once the need for processing their data has expired.<br><br>

Consequently, we have introduced a means of redacting marked fields when certain records are archived (customers, contacts, logins, calls, notes, activities). This enables peoples’ names and personally identifiable information to be cleared out of SupportDesk.<br><br>

You should note that the feature does not make a trawl through all the data in all the tables looking for a text string that might relate to this individual. Data is cleared out of the specific fields marked with “Redact Data when Archiving”</p><br><br>

    <img src="/wp-content/uploads/2018/01/gdpr1.png" height="180"><br><br>

	<p>This example results in the contact name being redacted when the contact is archived.</p><br><br>

<img src="/wp-content/uploads/2018/01/gdpr2.png" height="180"><br><br>

<p>You should also note that this is a one-way process on archiving – the system will not re-instate the masked data on restoration from Archive to Live.
You can also opt to remove attachments when records are archived.
We are also able to provide consultancy to assist with set up.
</p>
  </div></div>
<div class="row feat-2015" style="border-top:solid 1px #ccc;">
  <div class="col-md-1"></div>
  <div class="col-md-5">
    <h3>Alternative HTML Editor</h3>  
	<p>New systems will be installed a new look HTML editor for Notes and Solution fields that is compatible with Edge, Chrome, Firefox and Safari.<b> <br></p>
    <img src="/wp-content/uploads/2018/01/html-editor.png" height="180">
  </div>  

  <div class="col-md-5">
    <h3>Two Factor Authentication</h3>  
	<p>A user first enables 2FA through SupportDesk using any app that supports the Time-based One-Time Password protocol such as Google Authenticator.<br></p>
    <img src="/wp-content/uploads/2018/01/twofactorauth.png" height="250">
	</br></br>
	<p>And once verified will be prompted for the app generated code at each login. <br></p>
	<img src="/wp-content/uploads/2018/01/authnumber.png" style="height: 150px;">
  </div>      

  <div class="col-md-1"></div>
    <div class="col-md-5">
    <h3>Max Failed Logins</h3> 
	  <p>The option to set the maximum number of failed login attempts. (In the WebServer, go to Settings - WebServer – Login Page Settings)
Once set, the system tracks failed attempts for a login and will lock a user out once they have reached the threshold, a notification will be posted to the noticeboard. The Failed Login attempts has to be reset by a Supervisor to allow them to log in. 
</p>
    <img src="/wp-content/uploads/2018/01/failedlogin.png" style="height: ;">
  </div>

  <div class="col-md-5">
    <h3>Productivity Features in Form Development</h3> 
	<p>To assist with House Form design and development there are some new features that allow :-</br>
•	Creation of Extra fields from the Form UI.</br>
•	Export of the individual Form to ease with “Test to Live” migration. 
</p>
    <img src="/wp-content/uploads/2018/01/pffd.png" style="height: ;">
</br></br><p>It is also now possible to Export just Forms from a system rather than have them within other system settings. This has been enabled through a “Forms” tick-box on the Database Export UI. </p>
  </div> 
  
  <div class="col-md-1"></div>
  <div class="col-md-5">
    <h3>Xero Integration</h3>  
    <p>SupportDesk can now be configured to create invoice lines on a ticket and export these to the Xero accounting software suite. It is modelled such that a SupportDesk ticket holds the Header information and individual lines of the invoice containing product, quantity and cost detail are then added to the ticket.</br>Once the base ticket has been created Invoice Lines can be added using the "Add an Invoice Item" button on the form which presents a new form on which the user selects the product and then enters the Unit Cost and Quantity. If configured to do so, the Cost and Tax Type can be inherited from the Product.</p>    
	<img src="/wp-content/uploads/2018/01/invoicelinedetails.png" style="height: 150px;"></br>
<p>Multiple lines can be added to the Ticket and will show under the Invoice Lines Tab,</p>
	<img src="/wp-content/uploads/2018/01/invoicelines.png" style="height: 75px;"></br></br>
<p>The Invoice data can be exported out of SupportDesk and into the Xero system.</p>
</div>


  <div class="col-md-5">
  	  <h3>Integrations</h3> 
	  <p>We have also worked with customers on integrations to OKTA Single Sign-On, and the self-service password reset system FastPassCorp. Please contact us if you would like to know more about these systems. 
  </div> 

  <div class="col-md-1"></div>
  <div class="col-md-5">
    <h3>Improvements in Call tracking and handling</h3>  
	<p>As well as the filter icons on the column headings, 2018 sees a new Direct Search option on the Call Reference that allows fast searching on the call reference only. We have also added Hover information on the margin summary icons to remind users of their meaning. Columns can now be reordered using Drag and Drop and if the view is saved as a custom view the field order is preserved.</p></br>
    <img src="/wp-content/uploads/2018/01/call-tracking.png" style="height: ;">
  </div>  

  <div class="col-md-5">
    <h3>Searching selected folders for related calls when in Configuration Items</h3>  
	<p>When using the webserver and querying Configuration items (Customers, Products and Inventories) there is a new option that allows the folder to be specified when searching for related tickets. </p>
    <img src="/wp-content/uploads/2018/01/configitems.png" style="height: ;">
  </div>

  <div class="col-md-1"></div>
  <div class="col-md-5">
	<h3>Drag and Drop Branding</h3> 
	<p>It is now easy to drop your logo ‘into’ SupportDesk and then propagate the branding through different areas of the system. SupportDesk lets you either navigate to your chosen logo or Drag & Drop it to the image area in the Webserver. We recommend an image size of 114 * 114 pixels.</p>
    <img src="/wp-content/uploads/2018/01/ddbranding.png" style="height: ;"></br></br>
<p>Once added, the logo will automatically show in the top left of the menu and act as the Home Button. 
It can also be added to mail templates using the tag [system:CompanyLogo] and will automatically be picked up as a logo on Quick Reports.</p>
  </div>

  <div class="col-md-5">
	<h3></i>E-Mailing KPI Reports</h3> 
	<p>It is now possible to save an email address with a KPI report and then use the Right Click menu on the Quick Report Summary to e-mail that report. </p>
    <img src="/wp-content/uploads/2018/01/kpiemail.png" style="height: ;"> 
  </div>      

  <div class="col-md-1"></div>
    <div class="col-md-5">
    <h3>Dynamic update of Date Range on Dashboard Reports</h3> 
	  <p>There is a new system component that can be dropped onto Report Dashboards and which will force a refresh of the dashboard reports with the selected date range applied. Consultancy may be required to assist with the set-up of this feature.</p>
    <img src="/wp-content/uploads/2018/01/dynamicupdatereports.png" style="height: ;"> 
  </div>

      <div class="col-md-5">
    <h3>Grouping and Searching Quick Calls to improve the end-user experience</h3> 
	<p>Over time the number of pre-configured request options that can be built for end users can grow. SupportDesk now lets you group your Requests/Quick Call and offer Type specific search buttons on the dashboard to help the end-user.</p></br></br>
	<img src="/wp-content/uploads/2018/01/searchqc.png" style="height: ;"> 
</br></br><p>Selecting one of the Search buttons shows the end user the Requests that have been grouped under that Service. Consultancy may be required to assist with the set-up of this feature.</p>
  </div>

  



<style>

.features-home span{
  color: #3a3a3a
}

.feat-anchor{
  padding: 10px;
  background: red;
  position: absolute;
  margin-top: -160px
}


.sticky .col-md-1:hover span{
  display: inline;
  position: absolute;
  top: 0;
  width: 100%;
  left: 0;
  box-shadow: 0 0 50px 20px white;
  background: white
}

.main-nav-scrolled {
  position: fixed;
  width: 100%;
  top: 0;
}

.feat-2015{
  padding: 30px;
  background: #f2f2f2;
}

.feat-2015 .col-md-5{
  background: white;
  padding: 10px;
  margin: 10px;
  border:solid #ccc 1px;
  border-radius: 4px;
  height: 500px; !important;
  overflow: hidden;
  text-align: center;
}


.feat-2015 .col-md-5.small{
	height: 250px;
}

.feat-2015 .col-md-5 img{
    width: auto;
    margin: auto;
    max-width: 400px;
    height: auto;
}

.feat-2015 h3{
  margin: 0;
  margin-bottom: 10px;
  text-align: left;
}

.feat-2015 .col-md-5 p{
  font-size: 12px;
  font-weight: 500;
  width: 100%;
  text-align: justify;
  float: left;
  padding-right: 10px;

}

.feat-2015 h3 i{
  color: #407fac;
  font-size: 40px;
}

.feat-2015 img{
  width: 100%;;
  border-radius: 4px;
  box-shadow: 0 0 0px #3a3a3a
}

.feat-2015.responsive h3{
  font-size: 50px;
  padding-bottom: 30px;
  text-transform: uppercase;
  font-weight: 200;
  color: white
}

.feat-2015.responsive img{
  border: 10px solid #3a3a3a;
  border-radius: 10px;
  box-shadow: 0 0 0 1px silver, 0 0 10px white;
  position: relative;
}

.screenshot{
  width: 100%;
  border:25px solid #3a3a3a;
  border-radius: 20px 20px 0 0;
  box-shadow: 0px -2px 0px 2px silver;
  z-index: -1;
  position: relative;
}


* {
  box-sizing: border-box;
}

body {

    background: linear-gradient(90deg, #FF512F 10%, #DD2476 90%);
        
}


.container > .screen {
  width: 460px;
  height: 280px;
  position: relative;  
  background: #ff6860;
  border: 20px solid #474e5d;
  border-radius: 10px;
  margin-left: 110px;
}

.monitor > div {
  position: absolute;
}

.monitor:before,
.monitor:after,
.laptop:before{
   content: "";
   position: absolute;
   left: 50%;
 }

.monitor:before,
.laptop:before {
  top: -10px;
  margin: -3px 0 0 -3px;
  width: 6px;
  height: 6px;
  border-radius: 6px;
  background: #a5adbd;
}

.screen:after {
  width: 8px;
  height: 8px;
  border-radius: 8px;
  bottom: -10px;
  margin: 0 0 -4px -4px;
  background: #e8ebf0;
}

.content {
  width: 420px;
  height: 240px;
  left: 50%;
  margin-left: -210px;
  overflow: hidden;
  background: -webkit-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* W3C */
        
}

.content:before {
  content: "";
  position: absolute;
  right: -90px;
  width: 200px;
  height: 300px;
  transform: rotate(45deg);
  background: linear-gradient(to bottom, rgba(255,255,255,0.1) 0%,rgba(255,255,255,0) 100%);
  z-index: 5;
}

.pg {
  width: 240px;
  height: 180px;
  position: absolute;
  left: 50%;
  top: 50%;
  margin: -90px 0 0 -120px;
  background: #ffffff;
  border: 1px solid #f4f5f7;
  border-top: 20px solid #407fac;
  border-radius: 5px;
  box-shadow: 0 5px 0 #e0625e;
}

.btns {
  position: absolute;
  top: -20px;
  left: 7px;
}

.btns:before {
  content: "";
  position: absolute;
  left: -8px;
  top: 0;
  height: 20px;
  width: 20px;
  background: #fee119;
}

.btns > li {
  display: inline-block; 
  list-style: none;
  width: 5px;
  height: 5px;
  border-radius: 5px;
  background: #fc5254;
  margin-right: 4px;
}

.btns li:nth-child(2) {
   background: #fcae52; 
}

.btns li:nth-child(3) {
   background: #66b34e; 
}

.txt {
  margin: 10px auto; 
  width: 220px;
  padding-left: 0;
}

.txt > li {
  background: #f3f5f7;
  width: 100%;
  height: 15px;
  margin-bottom: 9px;
  list-style: none
}

.txt > li:nth-child(2) {
  height: 60px;
}

.txt > .thin {
  height: 43px;
  width: 30%;
  margin-right: 6px;
  display: inline-block;  
}

.txt > li:nth-child(5) {
  margin-right: 0;
}

.base {
  width: 90px;
  height: 50px;
  bottom: -70px;
  left: 50%;
  margin-left: -45px;
  background: #e8ebf0;
}

.base:before,
.base:after,
.grey-shadow:before,
.grey-shadow:after{
  content: "";
  position: absolute;
  top: 0;
}

.base:before {
  border-left: 13px solid transparent;
  border-right: 0px solid transparent;
  border-bottom: 50px solid #e8ebf0;
  left: -13px;
}

.base:after {
  border-right: 13px solid transparent;
  border-left: 0px solid transparent;
  border-bottom: 50px solid #e8ebf0;
  right: -13px;
}

.base > div {
   position: absolute; 
}

.grey-shadow {
  width: 90px;
  height: 12px;
  background: #d8dbe1;
  top: 0;
}

.grey-shadow:before {
  border-left: 3px solid transparent;
  border-right: 0px solid transparent;
  border-bottom: 12px solid #d8dbe1;
  left: -3px;
  z-index: 2
}

.grey-shadow:after {
  border-right: 3px solid transparent;
  border-left: 0px solid transparent;
  border-bottom: 12px solid #d8dbe1;
  right: -3px;
  z-index: 2
}

.foot {
  background: #e8ebf0;
  z-index: 1;
}

.foot.top {
  width: 116px;
  height: 5px;
  bottom: -5px;
  left: 50%;
  margin-left: -58px;
}

.foot.top:before,
.foot.top:after,
.foot.bottom:before {
  content: "";
  position: absolute;
  top: 0px;
}

.foot.top:before {
  border-left: 16px solid transparent;
  border-right: 0px solid transparent;
  border-bottom: 5px solid #e8ebf0;
  left: -16px;
}

.foot.top:after {
  border-right: 16px solid transparent;
  border-left: 0px solid transparent;
  border-bottom: 5px solid #e8ebf0;
  right: -16px;
}


.foot.bottom {
  width: 150px;
  height: 5px;
  bottom: -10px;
  left: 50%;
  margin-left: -75px;
  z-index: 999;
}

.laptop {
  width: 235px;
  height: 155px;
  background: #fc9252;
  border: 12px solid #e8ebf0;
  border-radius: 10px 10px 0 0;
  position: absolute;
  top: 200px;
  right: 30px;
}

.laptop:before {
 top: -6px;
}

.laptop > div {
  position: absolute; 
}

.laptop > .content {
  width: 211px;
  height: 131px;
  left: 0;
  margin-left: 0;
}

.txt-laptop {
   width: 189px; 
}

.txt-laptop > li {
  background: #fda566;
}

.txt-laptop > li:nth-child(2) {
  height: 41px;
}

.txt-laptop > .thin {
  height: 36px;
  margin-right: 5px;
}

.btm {
  width: 296px;
  height: 7px;
  bottom: -19px;
  left: 50%;
  margin-left: -148px;
  border-radius: 0 0 20px 20px;
  background: #f4f5f7;
  z-index: 1;
}

.btm:before {
  content: "";
  position: absolute;
  width: 42px;
  height: 3px;
  left: 50%; 
  top: 0;
  margin-left: -21px;
  border-radius: 0 0 5px 5px;
  background: #d8dbe1;
}

.keyboard {
  width: 216px;
  height: 35px;
  bottom: -70px;
  left: 50%;
  margin-left: -108px;
  background: #e8ebf0;
  box-shadow: 0 4px 0 #d8dbe1;
  z-index: 2;
}

.keyboard:before,
.keyboard:after {
  content: "";
  position: absolute;
  top: 0;
  z-index: 2;
}

.keyboard > div {
   position: absolute; 
}

.keyboard .btm {
  background: #d8dbe1;
  width: 244px;
  height: 4px;
  border-radius: 0;
  bottom: -4px;
  left: 50%;
  margin-left: -122px;
}


.keyboard:before {
  border-left: 14px solid transparent;
  border-right: 0px solid transparent;
  border-bottom: 35px solid #e8ebf0;
  left: -14px;
}

.keyboard:after {
  border-right: 14px solid transparent;
  border-left: 0px solid transparent;
  border-bottom: 35px solid #e8ebf0; 
  right: -14px;
}

.keys {
  width: 220px;
  margin: 4px auto;
  text-align: center;
  position: relative;
  left: 50%;
  margin-left: -110px;
}

.keys li {
  position: relative;
  left: 50%;
  background: #f4f5f7;
  height: 4px;
  margin: 0 0 3px -110px;
  z-index: 4;
}

.keys li:nth-child(1) {
  width: 208px;
  margin-left: -104px;
}

.keys li:nth-child(2) {
  width: 212px;
  margin-left: -106px;
}

.keys li:nth-child(2) {
  width: 212px;
  margin-left: -106px;
}

.keys li:nth-child(3) {
  width: 216px;
  margin-left: -108px;
}

.keys li:nth-child(4) {
  width: 220px;
  margin-left: -110px;
}

.keys li:before,
.keys li:after {
  content: "";
  position: absolute;
}

.keys li:before {
  border-left: 3px solid transparent;
  border-right: 0px solid transparent;
  border-bottom: 4px solid #f4f5f7;
  left: -3px;
}

.keys li:after {
  border-right: 3px solid transparent;
  border-left: 0px solid transparent;
  border-bottom: 4px solid #f4f5f7;
  right: -3px;
}

.phone {
  width: 70px;
  height: 140px;
  position: absolute;
  bottom: -90px;
  left: -30px;
  border-radius: 5px;
  background: #000;
  border: 25px solid #2f343e;
  border-left: 5px solid #2f343e;
  border-right: 5px solid #2f343e;
  margin-left: 110px
}

.phone:before,
.phone:after {
  content: "";
  position: absolute;
  left: 50%;
  background: #474e5d;
}

.phone:before {
  background: #474e5d;
  width: 20px;
  height: 4px;
  margin-left: -10px;
  top: -12px;
  border-radius: 2px;
}

.phone:after {
  width: 10px;
  height: 10px;
  border-radius: 10px;
  bottom: -18px;
  margin-left: -5px;
}

.phone .screen {
  width: 60px;
  height: 90px;
  position: relative;
  overflow: hidden;
}

.phone .content:before{
  height: 10px;
  width:10px;
  background: #fee119;
  content: "";
  position: absolute;
  top:0;
  left: 0;
  transform:rotate(0);
}
.phone .content {
  background: #fff;
  width: 60px;
  left: 0%;
  margin-left: 0px;
  border-top: 10px solid #407fac;
}

.phone .txt {
  width: 85%;
  margin: 0
}

.phone .txt > li {
  height: 10px;
  border-left: 10px solid lightcoral;
  margin-bottom: 0;
}

.phone .txt > li:nth-child(1){
  border-color: lightgreen
}

.phone .txt > li:nth-child(2){
  border-color: lightcoral;
}

.phone .txt > li:nth-child(3){
  border-color: lightblue;
}

h1{
  text-align: center;
  text-transform: uppercase;
  font-weight: bold;
  padding-top: 30px
}

.navbar{
  background: transparent;
}

</style>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css">

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow.min.js"></script>
<script>
  new WOW().init();
</script>


<?php get_footer();?>


