<?php get_header();?>
<div class="container-fluid">
	<h2><strong>At Home with <br>House-on-the-Hill</strong></h2>
	<div class="about-container"><?php the_content();?>
	</div>
	<h4 style="width: 100%;">Charities We Support</h4>
	<table class="charity">
		<td>
		<a href="http://www.worldvision.org.uk/" target="_blank">
		<img class="img-circle" height="100" width="100" src="<?php echo site_url(); ?>/wp-content/uploads/2014/09/worldvision.jpeg">
		<h4>World Vision</h4>
		<p>World Vision is the world?s largest international children's charity, working to bring real hope to millions of children in the world's hardest places. </p>
		</a>
		</td>		
		<td>
		<a href="http://www.boothcentre.org.uk" target="_blank">	
		<img class="img-circle" height="100" width="100" src="<?php echo site_url(); ?>/wp-content/uploads/2014/09/booth1.jpg">
		<h4>Booth Centre</h4>
		<p>The Booth Centre is recognised as being one of the country's leading day centres for homeless people. </p>
		</a>
		</td>
		<td>
		<a href="https://centrepoint.org.uk" target="_blank">
		<img class="img-circle" height="100" width="100" src="<?php echo site_url(); ?>/wp-content/uploads/2014/09/centre.png">
		<h4>Centre Point</h4>
		<p>Centrepoint is the UK's leading charity for homeless young people, supporting 16-25 years olds with housing, learning, health and life skills.</p>
		</a>
		</td>
	</table>
</div>

<?php get_footer();?>
