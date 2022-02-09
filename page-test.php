<?php get_header();?>
<div class="solutions">
	<div class="text">
			<h2 style="color: white;">What can I use House-on-the-Hill for?</h2>
			<p style="color: white;">Out-of-the-Box House-on-the-Hill Software is ready for these solutions in the Cloud or On-Site. <br>Pick the solution which best reflects your organisation.</p>
			<a href="/price-plans"><p class="price"> <span>All HotH solutions start as low as £30 per agent, per month</span></p></a>
	</div>
	<div class="wrapper">
			<input type="radio" name="slider" checked id="itsm">
			<input type="radio" name="slider" id="foi">
			<input type="radio" name="slider" id="csm">
			<input type="radio" name="slider" id="cafm">
			<nav>
					<label for="itsm" class="itsm">IT service <br>management</label>
					<label for="foi" class="foi">FOI, case & complaints <br>management</label>
					<label for="csm" class="csm">Customer service <br>management</label>
					<label for="cafm" class="cafm">Computer aided facilities <br>management</label>
					<div class="slider"></div>
			</nav>
			<section>
					<div class="content content-1">
							<div class="title">This is a itsm content</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero aspernatur nobis provident dolores molestias quia quisquam laborum, inventore quis, distinctioa, fugit repudiandae delectus sunt ipsam! Odio illo at quia doloremque fugit iops, asperiores? Consectetur esse officia labore voluptatum blanditiis molestias dic voluptas est, minima unde sequi, praesentium dicta suscipit quisquam iure sed, nemo.</p>
					</div>
					<div class="content content-2">
							<div class="title">This is a foi content</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit amet. Possimus doloris nesciunt mollitia culpa sint itaque, vitae praesentium assumenda suscipit fugit doloremque adipisci doloribus, sequi facere itaque cumque accusamus, quam molestias sed provident quibusdam nam deleniti. Autem eaque aut impedit eo nobis quia, eos sequi tempore! Facere ex repellendus, laboriosam perferendise. Enim quis illo harum, exercitationem nam totam fugit omnis natus quam totam, repudiandae dolor laborum! Commodi?</p>
					</div>
					<div class="content content-3">
							<div class="title">This is a csm content</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, debitis nesciunt! Consectetur officiis, libero nobis dolorem pariatur quisquam temporibus. Labore quaerat neque facere itaque laudantium odit veniam consectetur numquam delectus aspernatur, perferendis repellat illo sequi excepturi quos ipsam aliquid est consequuntur.</p>
					</div>
					<div class="content content-4">
							<div class="title">This is a cafm content</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit null itaq, odio repellat asperiores vel voluptatem magnam praesentium, eveniet iure ab facere officiis. Quod sequi vel, rem quam provident soluta nihil, eos. Illo oditu omnis cumque praesentium voluptate maxime voluptatibus facilis nulla ipsam quidem mollitia! Veniam, fuga, possimus. Commodi, fugiat aut ut quorioms stu necessitatibus, cumque laborum rem provident tenetur.</p>
					</div>
			</section>
	</div>
</div>

<style>
.solutions {
	background: #1D3550;
	padding: 100px 10px;
	padding-top: 50px;
}
.wrapper{
	width: 80%;
	margin: 100px auto;
	padding: 25px 30px 30px 30px;
	background: white;
}

.wrapper nav{
	position: relative;
	width: 100%;
	display: flex;
	align-items: center;
	margin: auto;
}

.wrapper nav label{
	display: block;
	height: 100%;
	width: 100%;
	text-align: center;
	cursor: pointer;
	position: relative;
	z-index: 1;
	color: #1e3550;
	font-size: 17px;
	border-radius: 4px;
	margin: 0 5px;
	transition: all 0.3s ease;
	padding: 5px;
}

.wrapper nav label:hover{
	background: rgba(30, 53, 80, 0.25);
}

#itsm:checked ~ nav label.itsm,
#foi:checked ~ nav label.foi,
#csm:checked ~ nav label.csm,
#cafm:checked ~ nav label.cafm{
	color: #fff;
}

nav label i{
	padding-right: 7px;
}

nav .slider{
	position: absolute;
	height: 100%;
	width: 25%;
	left: 0;
	bottom: 0;
	z-index: 0;
	border-radius: 5px;
	background: #1e3550;
	transition: all 0.3s ease;
}

input[type="radio"]{
	display: none;
}

#foi:checked ~ nav .slider{
	left: 25%;
}

#csm:checked ~ nav .slider{
	left: 50%;
}

#cafm:checked ~ nav .slider{
	left: 75%;
}

section .content{
	display: none;
}

#itsm:checked ~ section .content-1,
#foi:checked ~ section .content-2,
#csm:checked ~ section .content-3,
#cafm:checked ~ section .content-4{
	display: block;
}

section .content .title{
	font-size: 21px;
	margin: 30px 0 10px 0;
}
</style>
<?php get_footer();?>