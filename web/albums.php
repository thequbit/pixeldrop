<?php
	session_start();
	if( $_SESSION['loggedin'] == false )
		header("location: login.php");
?>

<?php require_once("_header.php"); ?>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script>
	
		$(document).ready(function() {
			// assign buttons
			
			var loginbutton = document.getElementById('upload');
			loginbutton.onclick = function() {
				window.location = "newalbum.php"
			};
			
			var registerbutton = document.getElementById('logout');
			registerbutton.onclick = function() {
				window.location = "dologout.php"
			};
			
		});
	
	</script>

	<div id="buttons">
		<div class="buttonwrapper">
			<div class="smallbutton" id="upload">New Album</div>
		</div>
		<div class="buttonwrapper">
			<div class="smallbutton" id="logout">Logout</div>
		</div>
	</div>

<?php require_once("_footer.php"); ?>