<?php get_header();?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
<style>
  .sector_banner {
    background-image: url('<?php echo $image[0]; ?>');    
    height: 500px;
    background-size: cover;
    background-position: center;
  }

<?php endif; ?>


  .sector_banner article{      
    background: #d9f7ff;
    width: 50%;
    padding: 50px;
    padding-left: 15%;
    height: 500px;
    display:flex;
    align-items:center;
  }

  .sector_main section article{
      flex:1;
  }

  h1{
    font-size:50px
  }

  .sector_main section img{
      max-width:100%;      
  }

  .sector_banner article a{
    font-size: 15px;
    color: white;
    background: #1e3550;
    font-weight: bold;
    padding: 10px 20px;
    display: flex;
    width: fit-content;    
}     

.sector_main section{
    display: flex;
    flex-wrap: wrap;
    padding: 100px 15%;
}

.sector_main section:last-child{
    padding-bottom:200px;
}
  .sector_main section:nth-child(even){
      background:white;
  }

  .sector_main h2{
      flex:100%;
      border-left: 5px solid #fee119;
      padding-left: 10px;
      font-size:40px
  }

  .sector_main h3{
    font-size: 15px;
    color: #006b8e;
  }

  .sector_main h4{
    text-align: left;
    font-size: 40px;
  }

  .case_studies{      
    display: flex;
    width: 50%;
  }

  blockquote{
    font-size: 35px;
    font-style: italic;
    border: 0;
    padding: 10px 0;
    color: #1e3550;
  }

  .contact span{
    display:block;
  }

  a.sector_case{
    display: block;
    width: 45%;
    overflow: hidden;
    background: white;    
    margin-right: 5%;
    height:300px;
    position: relative;
  }

  a.sector_case div{
    height:100px;
    background-position: center;
    background-size: cover;
  }

  a.sector_case:hover{
      opacity:0.8;
  }

  a.sector_case h3{      
    padding: 10px;
    margin: 0;
    color: #1e3550;
    font-size: 20px;
  }

  a.sector_case p{      
    margin: 0;
    padding: 0 10px;
    font-size: 15px;
  }

  a.sector_case span{      
    font-size: 15px;
    font-weight: bold;
    padding: 10px;
    display: block;
    position: absolute;
    bottom:0;
  }

  .customer_quote blockquote, .customer_quote p{
      width:80%;
  }

  .sector_main section.feature_spotlight article{
    flex:100%;
  }
</style>

<div class="sector_banner">
    <article>
        <div>
            <h1>Proven All-in-One Service Desk Solution for the Public Sector</h1>
            <p>Deliver intuitive IT processes across the whole organisation with House-on-the-Hill Service Desk Software.</p>
            <a href="/demo/">Schedule a Demo</a>
        </div>
    </article>
</div>

<main class="sector_main">
    <section>
        <h2>Built of Sturdy Stuff</h2>
        <p>House-on-the-Hill's deep foundations in Service Desk Management has been proven time and time again as a standout solution for the Public Sector. Departments reach to House-on-the-Hill for IT Service Management (ITSM), Facilities Management (CAFM), Freedom of Information or they take control of all these areas with Enterprise Service Management</p>
    </section>
    <section>
        <h2>Become Part of the Family</h2>
        <article class="customer_quote">
            <blockquote>‘The new system seems to be working really well for us and we’re enjoying it!’</blockquote>
            <p class="contact">Mitchell Waters<span>ICT Servicedesk Administrator – South Yorkshire Fire &amp; Rescue</span></p>
        </article>
        <article class="case_studies">
            <a href="/casestudy/south-norfolk-broadland/" class="sector_case">
                <div style="background-image:url(/wp-content/uploads/2021/03/broadlands-1.png)"></div>
                <h3>South Norfolk & Broadlands</h3>
                <p>Take a good look at HotH as it can be wrapped around your needs and modified to the nth degree to suit your demands</p>
                <span>Read Case Study</span>
            </a>
            <a href="/casestudy/epping-forest-district-council/" class="sector_case">
                <div style="background-image:url(/wp-content/uploads/2021/09/epping.jpg)"></div>
                <h3>Epping Forest see the wood for the trees with HotH</h3>
                <p>The support that I received to deliver this project was second to none, nothing was too much trouble and CAB has become one of my favourite items in HotH</p>
                <span>Read Case Study</span>
            </a>
        </article>
    </section>
    <section>        
        <article>
            <h3>Self Service</p>
            <h4>Designed Self-Service Portals your Users will love</h4>
            <p>Empower end users and equip them with a suite of requests to manage their needs.<p>
        </article>
        <article style="flex:2;padding-left: 100px;">
          <img src="/wp-content/themes/houseonthehill.com/images/screenshots/hoth-portal.webp" alt="Self-Service Portal">
        </article>
    </section>
    <section>
    <article style="flex:2;padding-right: 100px;">
          <img src="/wp-content/themes/houseonthehill.com/images\screenshots\hoth-features.webp" alt="Full Feature List">
        </article>
        <article>
            <h3>Essential Tools for the Public Sector</p>
            <h4>Packed to the Rafters in Features</h4>
            <p>Tap into a rich ecosystem of service desk features, 3rd party integrations and open APIs. Lets make our House your Home.<p>
        </article>
    </section>
    <section>
        <article>
            <h3>Enterprise Solution</p>
            <h4>Grow Organically</h4>
            <p>Many public organisations grow with House-on-the-Hill at its core. For example you can start with IT Service Management and then integrate HR or Facilities in the future. The Sky's the Limit!<p>
        </article>
        <article style="flex:2;padding-left: 100px;">
          <img src="/wp-content/themes/houseonthehill.com/images\screenshots\hoth-extensions.webp" alt="HotH Service Desk Extensions">
        </article>
    </section>
</main>


<?php get_footer();?>
