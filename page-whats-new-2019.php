<?php get_header();?>
<div class="whatsnew-container">
	<div class="whatsnew-header">
		<h1>What's new</h1>
		<p>See what features are new to SupportDesk 2019</p>
		<div class="keyfeatures">
		<p><i class="fal fa-th-list"></i> Improved Dashboards & Forms</p>
		<p><i class="fal fa-envelope"></i> Many Email & Reporting improvements</p>
		<p><i class="fal fa-bezier-curve"></i> New Graphical Workflow Designer</p>
		<p><i class="fal fa-calendar-check"></i> Enhanced Booking & Visitor registration</p>
		<p><i class="fal fa-comments"></i> Chat Integration with Slack</p>
		</div>
	</div>
	<div class="whatsnew-img">
		<img src="/wp-content/uploads/2018/05/SupportDesk2018.png">
	</div>
</div>

<div class="whatsnew-features">
	<ul class="supportdesk2019-yellow">

		<h1><span>SupportDesk 2019</span></h1>

		<li>
			<h2>Dashboard and Form features</h2>
			<p>This continues to be an area of SupportDesk that customers are leveraging to extend the functional scope of the system and provide great returns. The Form Designer now allows multi-tabbed forms, context sensitive prompts, user defined feedback forms and much more. Multiple tabs also provide an inherent workflow and allow the data to be grouped logically. A new Component now shows a concise view of the Ticket history. Other new features in the Forms include the automatic presentation of the appropriate form based on detection of the user privilege, a preview widget to show the last 10 tickets for the current customer, KPI reports on reporting dashboards with date prompting and “Top x” features.</p>

			<img src="/wp-content/uploads/2019/05/Exploded-Tabbed-Ticket.png">
		</li>
		<li>
			<h2>Improved Room/Resource Bookings</h2>
			<p>Room/Resource Bookings has had a makeover and now offers an easy and efficient way to manage the booking of rooms or any resources that are available for shared use. The function can be bolted on to any existing SupportDesk Enterprise installation. To accompany Resource books SupportDesk can now send associate emails with an attached .ics  (universal calendar format) file allowing bookings to be added to standard calendars. </p>
			<img src="/wp-content/uploads/2019/05/booking-buttons.png">
			<img src="/wp-content/uploads/2019/05/Bookings-exploded.png">
		</li>
		
		<li>
			<h2>Chat Integration with Slack</h2>
			<p>Once you have implemented Slack integration in your WebServer client, you can use the functionality with a chat application that you install from the Slack app directory. Slack acts a gateway for incoming messages from chat applications installed from the Slack app directory so agents can use existing features such as the slash command for creating tickets in SupportDesk from within Slack. The agent will then pick the folder in, which to create the ticket and the ticket will be logged.</p>
			<img src="/wp-content/uploads/2019/05/Unfurl-Why-Slack.jpg">
		</li>
		<li>
			<h2>Graphical Workflow Designer</h2>
			<p>SupportDesk now contains a graphical Workflow designer for all your processes, easing design and providing automatic documentation. The Status codes and relationships are created in-sync with the diagram, with fine tuning carried out in the Service Level Management screen.</p>
			<img src="/wp-content/uploads/2019/05/Workflow-Designer.png">
		</li>

		<li>
			<h2>Visitor Registration</h2>
			<p>Available as a stand-a-lone or integrated with “Bookings” is the Visitor Registration. All visitors can be quickly booked in and all required data captured along with any special needs or data specific to your environment.</p>
			<img src="/wp-content/uploads/2019/05/Visitor-registration.png">
		</li>

		<li>
			<h2>Mobile Interface</h2>
			<p>The Mobile interface to SupportDesk has had a makeover, but design is still completed using the Form Designer and the Formname_Touch is still in action to offer specific forms if the system detects access via a mobile device.</p>
				<img src="/wp-content/uploads/2019/05/Mobile-Dash.png">
		</li>

		<div class="whatsnew-trial">
			<p>Try SupportDesk & it's new features!</p>
			<a href="">Create Free Trial</a>
		</div>
	</ul>

	<ul class="supportdesk2019-blue">

		<h1><span>Email Developements</span></h1>

		<li style="">
			<h2>Outlook 365 Add-In</h2>
			<p>The SupportDesk Outlook 365 Add-In provides you with a faster and much more convenient way of logging tickets, allowing you to create a new ticket straight from your Outlook 365 email. With a click of a button, an email will be seamlessly imported straight into SupportDesk with relevant fields being auto-populated and attachments on the mail being added to the Ticket.</p>
		</li>

		<li>
			<h2>Triggering a QuickCall from mail subjects</h2>
			<p>A mail form can now be created with the body text containing the reference to a QuickCall in the format QuickCall:QC000005   (Case sensitive). If a mail is read with a subject matching the mail form then the new ticket raised will be based on the referenced Quick Call.</p>
		</li>

		<li>
			<h2>Automatic Emails</h2>
			<p>can now be sent to the assignee when a Ticket transitions from a “Stop the clock” status to “Active”, helping Support staff stay on top of Tickets and work within SLA’s.</p>
		</li>

		<li>
			<h2>Email Clipping</h2>
			<p>A system delimiter can automatically be added to outbound mail which is then supported by the Mail Read process to clip content below the delimiter.</p>
		</li>

		<li>
			<h2>SMTP Server</h2>
			<p>Details per folder now allow more granularity in the configuration of E-Mail integration.</p>
		</li>

		<li>
			<h2>Email Security</h2>
			<p>Email send & receive can be configured to use TLS 1.2 exclusively to improve security.</p>
		</li>

		<li>
			<h2>Data Driven Email Templates</h2>
			<p>Allowing specific logos or user defined headers to be included in outbound mail templates which are automatically picked based on the Ticket data.</p>
		</li>

		<div class="whatsnew-trial">
			<p>Try SupportDesk & it's new features!</p>
			<a href="">Create Free Trial</a>
		</div>
	</ul>

	<ul class="supportdesk2019-yellow">

		<h1><span>New configuration features</span></h1>

		<li>
			<h2>Change Authorisation</h2>
			<p>In Self Service Environments end users can now manually select the Authorising body for their requests. Paperless workflow takes care of the rest with Voting emails being automatically sent to the designated body and the Request following prescribed workflow on Acceptance or Rejection of the Request.</p>
		</li>

		<li>
			<h2>QuickCall/Service Request options</h2>
			<p>To provide more flexibility to Quick Calls there are some new configuration options. They can now be marked as hidden (useful where they are used as anchors for default calls), Internal, (i.e. not available to WebGuests), and locked to a specific Group or Team.</p>
		</li>

		<li>
			<h2>Copy KB to a note</h2>
			<p>If a relevant KnowledgeBase item has been found after searching from a Ticket, there is now an option to copy the KB (and attachments) back to the note on the Ticket. It can then be emailed to the customer.</p>
		</li>

		<li>
			<h2>User defined multi select drop down</h2>
			<p>Allows an extra field to be created that contains multiple selection values and which allows the selection of multiple values. Field type must be set as Listbox. The selections for the field can be either from a fixed list or from a SQL select statement.</p>
		</li>

		<li>
			<h2>Last Updated By</h2>
			<p>Track the “Last Updated by” on a ticket.  Simply create a new Call Extra field called “Last Updated by” and the system will maintain the field automatically.</p>
		</li>

		<li>
			<h2>Performance Improvements</h2>
			<p>All new extra fields are now automatically flagged as “Disable Auto Refresh” meaning that the Web Form will not refresh when the field is maintained. </p>
		</li>

		<li>
			<h2>First Assignment Status</h2>
			<p>A status can be flagged as the “1st Assignment Status” so that the Ticket will automatically be moved to that status when it changes from Blank assignee.</p>
		</li>

		<li>
			<h2>AD Archiving</h2>
			<p>If user management in AD does not follow standard patterns you can now designate a specific script to identify the users that need to be archived from SupportDesk.</p>
		</li>

		<li>
			<h2>Increased size for call subject and KBase Problem fields</h2>
			<p>Upgrading will automatically increase the field size to either 8000 or 10,000 characters depending on the database. </p>
		</li>

		<div class="whatsnew-trial">
			<p>Try SupportDesk & it's new features!</p>
			<a href="">Create Free Trial</a>
		</div>
	</ul>

	<ul class="supportdesk2019-blue">

		<h1><span>New to Reporting</span></h1>

		<li style="display: block; margin-left: auto; margin-right: auto; width: 51%;">
			<h2>Data as Percentages</h2>
			<p>Using the “%” option in the Report Format tab you can now represent the data as percentages.</p>
			<img src="/wp-content/uploads/2019/05/Percentage-pie.png">
		</li>

		<li>
			<h2>Dashboard reports</h2>
			<p>Dashboard reports can be configured to run using multiple requests and on the Report URL to improve performance.</p>
		</li>

		<li>
			<h2>KPI Reports</h2>
			<p>You can now make use of the “Top” feature from KPI reports to show data on the dashboard and then employ styling to simply show the data. KPI has also had significant performance improvements.</p>
		</li>
	</ul>
	<div style="
    text-align: right;
    color: white;
    padding-right: 10px;
    padding-bottom: 10px;
    font-size: 10px;
    background: black;
">* Depending on your configuration could be an additional module</div>
</div>



<style>
	.navbar{
		background: #F8EA90;
	}

	.whatsnew-container{
		background: #F8EA90;
		/*padding: 100px 170px 200px 170px;*/
		display: flex;
		flex-wrap: wrap;
		width: 100%;
		height: 70vh;
		overflow: hidden;
	}

	.whatsnew-header{
		width: 40%;
		margin-left: 10%;
		padding-top: 15vh;
	}

	.whatsnew-header h1{
		font-size: 80px;
		color: #3a3a3a;
	}

	.whatsnew-header p{
		font-size: 25px;
	}
	.keyfeatures p{
		font-size: 15px;
		text-align: left;
		color: #94820b;
	}
	.whatsnew-img{
		width: 50%;
    	padding-top: 50px;
    	padding-left: 5%;
	}

	.whatsnew-img img{
		border-radius: 10px;
	}

	.content{
		background: rgba(174,216,230,1);
		background: -moz-linear-gradient(45deg, rgba(174,216,230,1) 0%, rgba(165,192,201,1) 100%);
		background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(174,216,230,1)), color-stop(100%, rgba(165,192,201,1)));
		background: -webkit-linear-gradient(45deg, rgba(174,216,230,1) 0%, rgba(165,192,201,1) 100%);
		background: -o-linear-gradient(45deg, rgba(174,216,230,1) 0%, rgba(165,192,201,1) 100%);
		background: -ms-linear-gradient(45deg, rgba(174,216,230,1) 0%, rgba(165,192,201,1) 100%);
		background: linear-gradient(45deg, rgba(174,216,230,1) 0%, rgba(165,192,201,1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aed8e6', endColorstr='#a5c0c9', GradientType=1 );
	}

	.whatsnew-features h1 {
	    text-align: center;
	    position: inherit;
	    width: 100%;
	    padding-bottom: 30px;
	}	

	.whatsnew-features img{
		border-radius: 5px;
		width: auto;
		max-width: 100%;
		height: auto;
		display: block;
    	margin-left: auto;
    	margin-right: auto;
    	padding-top: 10px;
    	border-radius: 5px;
    	-webkit-box-shadow: 3px 3px 10px -2px rgba(173,133,59,1);
		-moz-box-shadow: 3px 3px 10px -2px rgba(173,133,59,1);
		box-shadow: 3px 3px 10px -2px rgba(173,133,59,1);
	}

	.whatsnew-features ul.supportdesk2019-blue img{
		border-radius: 5px;
		width: auto;
		max-width: 100%;
		height: auto;
		display: block;
    	margin-left: auto;
    	margin-right: auto;
    	padding-top: 10px;
    	border-radius: 5px;
		-webkit-box-shadow: 3px 3px 10px -2px rgba(62,143,163,1);
		-moz-box-shadow: 3px 3px 10px -2px rgba(62,143,163,1);
		box-shadow: 3px 3px 10px -2px rgba(62,143,163,1);
	}

	.whatsnew-features ul{
		width: 100%;
		display: flex;
		flex-wrap: wrap;
		text-align: left;
		padding: 5% 20% 5% 20%;
		margin: 0;
	}

	.whatsnew-features ul li{
		list-style-type: none;
		width: 33.3333%;
		padding: 30px;
	}

	.whatsnew-features ul li h2{
		font-size: 22px;
	}

	.whatsnew-features ul li p{
		font-size: 15px;
	}

	.supportdesk2019-yellow{
		background: #f9f0df;
	}

	.supportdesk2019-yellow h2{
		color: #ad853b;
	}

	ul.supportdesk2019-yellow li{
		width: 48%;
		margin: 1%;
	}

	.supportdesk2019-yellow h1 span{
	    padding: 10px;
	    color: #a2350c;
	}
	.supportdesk2019-blue{
		background: #c1dfe8;
	}

	ul.supportdesk2019-blue li{
		width: 48%;
		margin: 1%;
	}

	.supportdesk2019-blue h1 span{
		color: #3a3a3a;
	    padding: 10px;
	}

	.supportdesk2019-blue h2{
		color: #287b94;
	}

	.whatsnew-trial{
		text-align: center;
		padding: 50px;
		width: 100%;
	}
	.whatsnew-trial a{
		background: #40ac87;
		color: white;
		border-radius: 4px;
		padding: 10px;
		font-size: 18px;
	}
	.whatsnew-trial p{
		font-size: 30px;
		margin-bottom: 20px;
	}

@media only screen and (max-width: 600px) {
	.whatsnew-header {
	    width: 100%;
	    text-align: center;
	    padding: 10px;
	    margin: 0;
	}
	.whatsnew-img{
		padding: 0;
		width: 80%;
		margin-left: 10%;
	}
	.whatsnew-img img{
		padding: 0;
		width: 100%;
	}
	.whatsnew-features ul {
	    width: 100%;
	    display: flex;
	    flex-wrap: wrap;
	    text-align: left;
	    padding: 5px;
	}
	.whatsnew-features ul li {
	    width: 90% !important;
		margin-left: 5% !important;
	    text-align: left !important;
	    background: transparent !important;
	}
	.whatsnew-features img{
		width: 100%;
	}
}	
</style>
<?php get_footer();?>