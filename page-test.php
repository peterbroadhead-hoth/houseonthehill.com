<?php get_header();?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<a class="demo-btn">Request a demo</a>

<div class="reveal">
swdsd
</div>

<style>
body{
	padding: 100px;
}	

.demo-btn{
	background: #1e3550;
	color: #ffffff;
	margin-left: 0;
	border-radius: 4px;
	padding: 10px 20px;
	font-weight: bold;
	box-shadow: unset;
	font-size: 16px;
}

.demo-btn:hover{
	color: #ffffff;
	opacity: 0.8;
}

.reveal {
	display: none;
	padding: 25px;
}
</style>

<script>
	$(document).ready(function(){
	$(".demo-btn").click(function(){
	$(".reveal").slideToggle(300);
	});
	});		
</script>

<?php get_footer();?>