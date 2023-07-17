<?php get_header();?>


<div class="home">
  <div class="header">
    <div class="container">  
      <div class="text">  
        <h1>Made to measure <br>service desk software for<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2023/arrowdown.png" style="margin-left: 70px; position: absolute;"></h1> 
        <div class="frame">
            <div class="carousel">
              <div class="change_outer">
                <div class="change_inner">
                  <div class="element 1">IT Service Management</div>
                  <div class="element 2">Request Management of FOI, SAR, EIR & Discovery</div>
                  <div class="element 3">Facilities Management</div>
                  <div class="element 4">Customer Service</div>
              </div>
            </div>
          </div>
        </div>
        <p>House-on-the-Hill Software is built to support you and the people that matter. Our software is flexible, affordable and created with you at the heart<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2023/heart.png"></p>
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
            <input type="TEXT" name="F10010" id="reg_email" size="0035" maxlength="50" value="" placeholder="Email Address" required="">
            <div id="captcha_result"></div>
            <input class="submit" type="submit" value="Book a demo"> 
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
      </div>
        <div class="img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2023/home-header.png" alt="Tailored home page graphic"></div>
    </div>
  </div>

<p class="hoth_bulletin"><?php the_field('bulletin'); ?></p>

  <div class="testimonials">
    <div class="testimonials-container">
      <h3>For all businesses<br>no matter the <span style="font-size: 34px; font-weight: bold;">size</span></h3>
      <div class="customers">
        <a href="https://www.nhs.uk/" target="_blank" rel="noopener">
          <img height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/50/nhs-50.png" alt="NHS Logo">
        </a>  
        <a href="https://www.midlandheart.org.uk/" target="_blank" rel="noopener">
          <img height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/midland.png" alt="midland heart">
        </a>  
        <a href="https://www.newark-sherwooddc.gov.uk/" target="_blank" rel="noopener">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/newark.png" alt="Newark and sherward dc">
        </a>  
        <a href="https://www.nwleics.gov.uk/" target="_blank" rel="noopener">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/nwldc.png" alt="nwldc">
        </a>  
        <a href="https://www.hollandandbarrett.com/" target="_blank" rel="noopener">
          <img height="25" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/50/hb-50.png" alt="Holland & Barrett Logo">
        </a>  
        <!--<a href="https://www.dentons.com/en" target="_blank" rel="noopener">
          <img height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/50/dentons-50.png" alt="Dentons Law Firm Logo">
        </a>  -->
        <a href="https://www.plusdane.co.uk/" target="_blank" rel="noopener">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/plusdane.png" alt="plus dane housing">
        </a>  
        <a href="https://www.sandwell.gov.uk" target="_blank" rel="noopener">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/sandwell-logo.png" alt="sandwell Logo">
        </a>  
        <a href="https://www.bbraun.co.uk/en.html" target="_blank" rel="noopener">
          <img height="25" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/50/bbraun-50.png" alt="bbraun Logo">
        </a> 
      </div>
    </div> 
  </div>
  <div class="teams">
    <div class="text">
      <h3 style="margin-bottom:5px;">Teams is here</h3>
      <h3 style="text-align:right; margin-top:0;">and it's <span>perfect<div class="circle"></div></span></h3>
    </div>
    <div class="img">
      <img class="teamsimg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2023/teamsimg.png">
      <img class="purpblob1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2023/purpleblob.png">
      <img class="purpblob2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2023/purpleblob2.png">
      <img class="purpblob3" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2023/purpleblob3.png">
    </div>
    <a href="/ms-teams-service-desk-integration/">Find out more</a>
  </div>

  <div class="solution-carousel-container">
    <div class="text">
      <h3>Multiple solutions all under one roof</h3>
      <!--<div class="button"><a class="sign-up" href="/price-plans">View pricing</a></div>-->
    </div>
    <div class="solution-carousel">
      <input checked="checked" class="solution-carousel-activator" id="solution-carousel-slide-activator-1" name="solution-carousel" type="radio">
      <input class="solution-carousel-activator" id="solution-carousel-slide-activator-2" name="solution-carousel" type="radio">
      <input class="solution-carousel-activator" id="solution-carousel-slide-activator-3" name="solution-carousel" type="radio">
      <input class="solution-carousel-activator" id="solution-carousel-slide-activator-4" name="solution-carousel" type="radio">
      <input class="solution-carousel-activator" id="solution-carousel-slide-activator-5" name="solution-carousel" type="radio">
      <div class="solution-carousel-controls">
        <label class="solution-carousel-control solution-carousel-control--forward" for="solution-carousel-slide-activator-2">
          >
        </label>
      </div>

      <div class="solution-carousel-controls">
        <label class="solution-carousel-control solution-carousel-control--backward" for="solution-carousel-slide-activator-1">
          <
        </label>
        <label class="solution-carousel-control solution-carousel-control--forward screen" for="solution-carousel-slide-activator-3">
          >
        </label>
        <label class="solution-carousel-control solution-carousel-control--forward mobile" for="solution-carousel-slide-activator-3">
          >
        </label>
      </div>
      
      <div class="solution-carousel-controls">
        <label class="solution-carousel-control solution-carousel-control--backward screen" for="solution-carousel-slide-activator-2">
          <
        </label>
        <label class="solution-carousel-control solution-carousel-control--backward mobile" for="solution-carousel-slide-activator-2">
          <
        </label>
        <label class="solution-carousel-control solution-carousel-control--forward mobile" for="solution-carousel-slide-activator-4">
          >
        </label>
      </div>

      <div class="solution-carousel-controls">
        <label class="solution-carousel-control solution-carousel-control--backward mobile" for="solution-carousel-slide-activator-3">
          <
        </label>
        <label class="solution-carousel-control solution-carousel-control--forward mobile" for="solution-carousel-slide-activator-5">
          >
        </label>
      </div>

      <div class="solution-carousel-controls">
        <label class="solution-carousel-control solution-carousel-control--backward mobile" for="solution-carousel-slide-activator-4">
          <
        </label>
      </div>
      <div class="solution-carousel-screen">
        <div class="solution-carousel-track">
          <div class="solution-carousel-item">
            <a href="/enterprise-service-management/">
              <div class="solution-carousel-content enterprise">
                <h3>Enterprise Service <br>Management</h3>
                <p>All solutions under one roof, a powerful, affordable tool to keep all aspects of your business running perfectly.</p>
                <div class="customers"> 
                  <div class="text">
                    <p><strong>Customers</strong></p>
                  </div>
                  <div class="img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/yas.png" alt="yas Logo">
                    <img height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/midlandheart.png" alt="MH logo">
                    <img height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/ascot.png" alt="ascot">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="solution-carousel-item">
            <a href="/it-service-management-software/">
              <div class="solution-carousel-content itsm">
                <h3>IT Service <br>Management</h3>
                <p>Deliver a modern ITIL driven service desk with a deep set of tools, automated workflows and a self-service portal.</p>
                <div class="customers"> 
                  <div class="text">
                    <p><strong>Customers</strong></p>
                  </div>
                  <div class="img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/50/nhs-50.png" alt="NHS Logo">
                    <img height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/newcastle.png" alt="NUFC">
                    <img height="25" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/sandwell-logo.png" alt="Sandwell Logo">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="solution-carousel-item">
            <a href="/foi-request-management/">
              <div class="solution-carousel-content foi">
                <h3>Request Management for FOI <br>SAR EIR & Discovery Cases</h3>
                <p>Turn requests into fully audited cases that track Freedom of Information, Subject Access Requests, EIR, Discovery & more.</p>
                <div class="customers"> 
                  <div class="text">
                    <p><strong>Customers</strong></p>
                  </div>
                  <div class="img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/cardiff.png" alt="Cardiff Logo">
                    <img height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/denbighshire.svg" alt="denbighshire">
                    <img height="25" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/phso.png" alt="phso Logo">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="solution-carousel-item">
            <a href="/customer-service-and-support/">
              <div class="solution-carousel-content csm">
                <h3>Customer Service <br>Management</h3>
                <p>Helps your sales team provide high quality customer support. Use data driven decisions from reports and KPIs to continually improve your service.</p>
                <div class="customers"> 
                  <div class="text">
                    <p><strong>Customers</strong></p>
                  </div>
                  <div class="img">
                    <img height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/speedy.svg" alt="speedy logo">
                    <img height="25" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/50/bbraun-50.png" alt="bbraun Logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/intercity.png" alt="intercity">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="solution-carousel-item">
            <a href="/facilities-management/">
              <div class="solution-carousel-content cafm">
                <h3>Computer Aided Facilities <br>Management</h3>
                <p>Will allow you to manage your whole property portfolio, jobs and keep your engineers on the road.</p>
                <div class="customers"> 
                  <div class="text">
                    <p><strong>Customers</strong></p>
                  </div>
                  <div class="img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/hollandbarrett.png" alt="Holland and barrett Logo">
                    <img height="30" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/dentons.png" alt="dentons logo">
                    <img height="25" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/NS&I.svg" alt="NS&I Logo">
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="button"><a class="sign-up" href="https://house-on-the-hill.com/mothership/register">Try for free</a></div>
  </div>

  <div class="keepupwithhoth">
    <div class="circle"></div>
    <div class="container">
      <div class="content">
        <h3 style="text-align: center; text-shadow: 2px 2px #ffffff; position: relative; width: 500px; margin: auto;"><img src="/wp-content/themes/houseonthehill.com/images/2023/arrowdownleft.png" style="top: 0px; left: 30px; position: absolute;height: 75px">Learn more about HotH</h3>
        <ul>
          <li>
            <h3>Whats new to <br>HotH</h3>
            <p>Discover the upgrades available to streamline and enhance your service desk.</p>
            <a href="/whats-new">Read what’s new ></a>
          </li>

          <li>
            <h3>Keep up to date with all things HotH</h3>
            <p>Subscribe to our monthly newsletter that features consultancy discounts, HotH tips and the latest upgrades available for your service.</p>
            <a href="/blog">Read our Blog ></a>
          </li>

          <li>
            <h3>How customers made our House their Home</h3>
            <p>From local councils to local tradesmen, learn about how our customers have used HotH to support the people that matter.</p>
            <a href="/casestudy/">Case studies ></a>
          </li>
            <img class="whatsnew" src="/wp-content/themes/houseonthehill.com/images/2023/whatsnew.png">
            <img class="blog" src="/wp-content/themes/houseonthehill.com/images/2023/blog.png">
            <img class="case" src="/wp-content/themes/houseonthehill.com/images/2023/casestudies.png">
        </ul>
      </div>
    </div>
  </div>

  <div class="iso">
    <div class="container">
      <div class="text">
        <h2>ISO certified, <br>we take your data  <br><span>VERY</span> <br>seriously.</h2>
      </div>

      <div class="img">
        <a href="https://cvs.babcert.com/babcert.asp?c=234054&amp;v=wgb5351g6c" target="_blank" rel="noopener">
          <img src="https://houseonthehill.com/wp-content/themes/houseonthehill.com/images/logos/75/iso-2021.png" height="75" width="75" alt="ISO Certificate">
        </a>
        <a href="https://houseonthehill.com/wp-content/uploads/2023/01/House-on-the-Hill-Cyber-Essentials-2022-2023.pdf" target="_blank" rel="noreferrer">
          <img src="https://houseonthehill.com/wp-content/themes/houseonthehill.com/images/logos/75/ca-75.png" height="75" width="89" alt="Cyber Essentials Certificate">
            </a>
        <a style="width: 100%; margin-top: 10px;" href="https://www.digitalmarketplace.service.gov.uk/g-cloud/search?q=House-on-the-Hill&amp;lot=cloud-software" target="_blank" rel="noreferrer">
          <img src="https://houseonthehill.com/wp-content/themes/houseonthehill.com/images/logos/75/ccs-75.png" height="75" width="100" alt="Crown Commercial Supplier Logo">
        </a> 
      </div>
    </div>
  </div>

  <div class="getstarted">
    <div class="container">
      <div class="signup">
        <h3>Get started with HotH</h3>
        <p>Join a multitude of customers using House-on-the-Hill to empower your IT service now and into the future.</p>
        <a target="_blank" href="https://house-on-the-hill.com/mothership/register" class="more-info">Try for free</a>
      </div>
    </div>
  </div>

  <div class="support">
    <div class="container">
      <div class="text">
        <h3>Looking for Support? Consultancy? <br>
        Help & Documents?</h3>
        <p>You're in the right place.</p>
        <div class="btns">
          <a class="more-info" href="/contact-us/">Call</a>
          <a class="more-info" href="mailto:support@houseonthehill.com">Email</a>
          <a class="more-info" href="/docs">Docs</a>
        </div>
      </div>
    </div>
  </div>
</div>
<style>

.hoth_bulletin{
	background: #bf1212; 
	margin: 0;
	padding: 20px;
	text-align: center;
	color: white;
	width: 90%;
	margin: 20px 5%;"
}
	
.hoth_bulletin:empty{
	display:none;
}
	
.frame {
  width: 100%;
  height: 70px;
  overflow: hidden;
  color: black;
}

.center {
}

.carousel {
  font-size: 40px;
}

.carousel .change_outer {
  text-align: center;
  height: 55px;
  overflow: hidden;
}
.carousel .change_outer .change_inner {
  position: relative;
  -webkit-animation: rotate 10s ease-in-out infinite;
          animation: rotate 10s ease-in-out infinite;
}
.carousel .change_outer .element {
  display: block;
  font-weight: bold;
}

.element.\31{
  color: #1E3550;
}

.element.\32{
  color: #95C7CC;
}

.element.\33{
  color: #48AF6E;
}

.element.\34{
  color: #FEE119;
}

@-webkit-keyframes rotate {
  0%, 20% {
    transform: translateY(0);
  }
  25%, 45% {
    transform: translateY(-57px);
  }
  50%, 70% {
    transform: translateY(-115px);
  }
  75%, 95% {
    transform: translateY(-169px);
  }
}

@keyframes rotate {
  0%, 20% {
    transform: translateY(0);
  }
  25%, 45% {
    transform: translateY(-57px);
  }
  50%, 70% {
    transform: translateY(-115px);
  }
  75%, 95% {
    transform: translateY(-169px);
  }
}

form#theForm{
  display: inline-flex;
  padding: 5px;
  background: #ffffff8a;
  border-radius: 10px;
}

input#reg_email{
  border-radius: 10px 0 0 10px;
  background: white;
  color: var(--color-black-two);
}

form input{
  border-radius: 0 10px 10px 0;
  background: var(--color-blue-one);
  color: var(--color-blue-six);
}

input#reg_email, form input{
  width: auto;
  padding: 15px;
  border: unset;
  outline: unset;
}
</style>

<?php get_footer();?>
