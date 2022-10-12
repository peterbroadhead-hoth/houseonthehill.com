<?php get_header();?>

<div class="whats-new-banner">
  <div class="header-container">
    <div class="header">
      <h1>What's New 2020</h1>
      <p>See what's new to House-on-the-Hill.</p>
    </div>
    <div class="form">
      <div class="form-container">
      	<p style="margin:0;">Trial 2020 for free.</p>
        <form style="margin-top:0; margin-bottom:0;" action="https://www.house-on-the-hill.com:443/mothership/supisacs.dll" method="POST" id="theForm" name="theForm" class="hoth_signup" onsubmit="return Form_Validator(this);" enctype="multipart/form-data">
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
          <input required="" type="TEXT" name="F2177" id="F2177" maxlength="25" value="" placeholder="Company Name">
          <input required="" type="TEXT" name="F38" size="0035" maxlength="50" value="" placeholder="Email Address"> 
          <select class="suptabde" name="F2178" id="F2178" size="1" onchange="selChg(2178);">
          <!--              <option style="display: none;">Select Solution</option>
          -->              <option value="IT%20Service%20Management">ITSM </option>
          <option value="CAFM">CAFM</option>
          <option value="Customer%20Service%20Management">CSM</option>
          <option value="FOI%20and%20Case%20Management">FOI/Case</option>
          <option value="MSP">MSP</option>
          </select>
          <input type="HIDDEN" id="savebtn" name="savebtn" value="">
          <input type="HIDDEN" id="savebtn1" name="savebtn1" value="">
          <input class="submit" type="submit" value="Create Trial">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="whats-new-features">
  <div class="home-feature">
    <h2>House-on-the-Hill – Chat Messaging (optional add-on)</h2>
    <p>House-on-the-Hill Chat allows your customers & website visitors to chat with the ServiceDesk via the use of the Chat connection on the WebGuest Dashboard. A chat can either be initiated by the operator (ServiceDesk) or the customer. In the latter case this can only happen if there is an operator waiting in the chat portal. Otherwise the customer can send an email to the ServiceDesk. <br><br><a target="_blank" href="https://houseonthehill.com/House-on-the-Hillchat/">More Details</a></p>
  </div>
  <div class="img-container">
    <img src="/wp-content/uploads/2020/01/mainvisitor-list.jpg">
  </div>

  <ul class="features">
    <li style="margin-left: 0;">
      <h2>Canned Responses to Solutions</h2>
      <p>Rack up for favourite support answers for lightning fast response times.
Be more intuitive when working with tickets. Using Canned Responses can reduce tedious task times into seconds.
You have the option of 10 Canned Responses, so carve up your answers and have them ready at your fingertips 
instead of having the team manually write out the same response for each ticket.</p>
      <div class="img">
        <img src="/wp-content/uploads/2020/04/canned-responses-to-solutions-e1587031524203.png">
      </div>
    </li>

    <li style="margin-right: 0;">
      <h2>Themes and UI Designer</h2>
      <p>Quickly customise your instance of House-on-the-Hill to match corporate colours.</p>
      <div class="img">
        <img src="/wp-content/uploads/2020/04/themes-nd-ui-designer-e1587031690736.jpg">
      </div>
    </li>

    <li style="margin-left: 0;">
      <h2>Graphical representation of time remaining</h2>
      <p>A “Scoville” scale indicator shows how “Hot” your tickets are getting as they approach SLA.</p>
      <div class="img">
        <img src="/wp-content/uploads/2020/04/graphical-representation-of-time-remaining-e1587032197161.jpg">
      </div>
    </li>

    <li style="margin-right: 0;">
      <h2>Engineer location tracking</h2>
      <p>Keep track of Engineers using House-on-the-Hill through the mobile UI and quick see their location through 
a GeoLocation dashboard.</p>
      <div class="img">
        <img src="/wp-content/uploads/2020/04/engineer-location-tracking-e1587031747346.jpg">
      </div>
    </li>
  </ul>
</div>

<div class="solution-features">
  <div class="header">
    <h2>New features available for Form Development</h2>
  </div>
  <ul class="list">
    <li>
      <i class="far fa-align-left"></i>
      <h3>Recent Tickets Component</h3>
      <p>Show the recent tickets for the customer as you log a new call.</p>
    </li>

    <li>
      <i class="far fa-align-left"></i>
      <h3>Wrap Long Prompts and Static Links</h3>
      <p>Use Styles tab to wrap long meaningful prompts to improve the cosmetics of the form. You can also use Styles to add static links to direct users to a web page for guidance or help.</p>
    </li>

    <li>
      <i class="far fa-align-left"></i>
      <h3>New Buttons</h3>
      <p>In House-on-the-Hill we now have buttons to trigger predefined mails at run time from your library of predefined e-mails.</p>
    </li>
    
    <li>
      <i class="far fa-align-left"></i>
      <h3>Nudge Buttons</h3>
      <p>“Nudge” buttons to add to WebGuest forms giving end users a simple way to prompt the Support team for an update.</p>
    </li>
    
    <li>
      <i class="far fa-align-left"></i>
      <h3>User Defined Forms</h3>
      <p>User defined Forms are now available for Purchase Orders as well as the existing list of Calls, Inventory, Contracts, Knowledge Base, Feedback and Opportunities.</p>
    </li>
    
    <li>
      <i class="far fa-align-left"></i>
      <h3>Transfer Forms & Components</h3>
      <p>The transfer of Forms and Components from your test environment to live is now easier with the selective Form export that will work across all types of Forms.</p>
    </li>
  </ul>
</div>

<div class="solution-features pt2">
  <div class="header">
  	<i class="fas fa-shield-alt"></i>
    <h2>Security Features</h2>
    <p>Security is high on the priority list for and URL’s generated in email templates are now encrypted using AES256 to prevent URL tampering to access other parts of the system.
		<br>  
    Under the hood we have tightened many other areas in the constant drive to keep your House-on-the-Hill secure. Password strength can be checked at login with enforced password reset to match the latest security settings.
  </p>
</div>

	<ul class="list">
    <li>
      <i class="fas fa-users"></i>
      <h3>Logins</h3>
      <p>More control on user access with Separate access for Call and Activities and the option to flag a login as Mobile only access. <br><br>
			The Login:News field can now be renamed to “CC” with the entered email address receiving copies of any mail sent to that Login.</p>
    </li>

    <li>
      <i class="fas fa-users"></i>
      <h3>Simple Multi Department mode for Logins</h3>
      <p>Provides a simple way to allow nominated logins to be Support in One folder and WebGuests in all others. With House-on-the-Hill use being expanded to departments other than IT, the requirement to have logins act as Support in one folder and WebGuest in others is now easier to implement and ensures consistent behaviour.<br>
			This feature requires House-On-The-Hill activation.</p>
    </li>

    <li>
    	<i class="far fa-envelope"></i>
    	<h3>New E-Mail triggers and features</h3>
    	<p>New Automatic triggers to improve visibility of call updates and progress.
    		<br><br>
			“On New Customer Note to Assignee or Group”
			“On New Note to Activity Scheduler”
			“Off Stop the Clock to Assignee”
			<br><br>
			New data dictionary field 'call: assignee manager e-mail' which gets populated with the email address of the assignee's manager for use in email templates, in particular escalation emails
			<br><br>
			Optional  To: field on User Defined Email Templates</p>
    </li>

    <li>
    	<i class="far fa-clock"></i>
    	<h3>Out of Hours recording and email</h3>
    	<p>House-on-the-Hill can now automatically record tickets logged “out of hours” with all the usual reporting expected and clear indication on the ticket.
			<br><br>
    	A user defined mail can also be added with a dedicated recipient and which will be automatically sent each time an “out of hours” ticket is logged.
    	</p>
    </li>
    
    <li>
      <i class="far fa-trash-alt"></i>
      <h3>Keeping Tidy</h3>
      <p>It’s a good idea to archive old records on a regular basis to keep House-on-the-Hill performant.<br>
      You can now setup up a routine to archive records daily. <br>
      Simply set the rules at Company level and then use the Work Flow Engine to do the deed!<br>
      Archived records are not deleted, they are transferred to an archive folder so can be retrieved.</p>
      <div class="img-container"><img src="/wp-content/uploads/2020/04/house-keeping.png"></div>
    </li>

    <li>
      <i class="far fa-tachometer-alt-fastest"></i>
      <h3>Renaming of Attachments on a Ticket</h3>
      <p>Attachments can now be renamed as they are attached, or existing attachments can be renamed.</p>
      <div class="img-container"><img src="/wp-content/uploads/2020/04/Renaming-Attachments.jpg"></div>
    </li>

    <li>
      <i class="far fa-tachometer-alt-fastest"></i>
      <h3>Match incoming emails to a QuickCall</h3>
      <p>House-on-the-Hill already generates a ticket from an incoming email where it matches the subject of an email template. But now, in addition, if the body of the email template contains the variable to link it with a QuickCall; the field entries on the QuickCall are used to populate the new ticket, in the same manner as when using manual QuickCalls.</p>
    </li>

    <li>
      <i class="far fa-cloud"></i>
      <h3>Microsoft Azure Active Directory (AD) Connector.</h3>
      <p>House-on-the-Hill 2020 can load users from Microsoft Azure AD rather than an on-site Active Directory enabling complete cloud-based single sign-on.</p>
    </li>

    <li>
      <i class="far fa-envelope"></i>
      <h3>Email Field Updates</h3>
      <p>Customisable email templates to alert selected parties of field changes.</p>
    </li>
</div>

<?php get_footer();?>