<?php
	session_start();
	if( isset($_SESSION['invalidlogin']) && $_SESSION['invalidlogin'] == ture )
		$invalidlogin = true;
	else
		$invalidlogin = false;
?>

<?php require_once("_header.php"); ?>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script>
	
		$(document).ready(function() {
				
				$("#loginbutton").click(function() {
					document.loginform.submit();
				});

				/*
				$("#myemail").keyup(function(event){
					if(event.keyCode == 13){
						document.loginform.submit();
					}
				});
				*/
				
				$("#mypassword").keyup(function(event){
					if(event.keyCode == 13){
						document.loginform.submit();
					}
				});
			}
		);

	</script>

	<?php if( $invalidlogin == true ) echo "invalid login.  please try again.<br>"; ?>

	<div class="loginentry">

		<form name="loginform" action="dologin.php" method="post">

			Email Address:</br>
			<input name="myemail" type="text" id="myemail">
			</br></br>
			Password:</br>
			<input name="mypassword" type="password" id="mypassword">
		
		</form>
	
	</div>
	
	<div class="buttonwrapper">
		<div class="button" id="loginbutton">Login</div>
	</div>
	
<?php require_once("_footer.php"); ?>