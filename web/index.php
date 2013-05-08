<?php require_once("_header.php"); ?>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script>
	
		$(document).ready(function() {
			// assign buttons
			
			var loginbutton = document.getElementById('login');
			loginbutton.onclick = function() {
				window.location = "login.php"
			};
			
			var registerbutton = document.getElementById('register');
			registerbutton.onclick = function() {
				window.location = "register.php"
			};
			
		});
		
	</script>
			
	<div class="description">

		<p>In today's day and age it is difficult to be in a situation where someone doesn't have a camera to document what's going on.  This incredible fact allows an unprecedented amount of images to be captured every year.</p>
		<p>Even more incredible is the massive cyber infrastructure that has been created by massive companies such as Google, Twitter, Facebook, Apple, and a multitude of others.  These websites allow for the instant sharing and distribution of these documented events.</p>
		<p>But let's be honest, you don't always want someone to see that picture of you throwing up on yourself.</p>
		<p>pixeldrop is secure, private, and removed from the 'cloud'.  It lives in my basement.  Post away.</p>
		

	</div>

	<div id="buttons">
		<div class="buttonwrapper">
			<div class="button" id="login">Login</div>
		</div>
	</div>

<?php require_once("_footer.php"); ?>