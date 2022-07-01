
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>K.C.G Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Flat Trendy Signup Forms Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.login-form').fadeOut('slow', function(c){
	  		$('.login-form').remove();
		});
	});	  
});
</script>
 <!--SIGN UP-->
		<div class="login-form">
			<div class="close"> </div>
					<div class="head">
					</div>
					<div class="head-info">
						<h1>SIGN UP</h1>
						<h2>Hello and Welcome! Tell us a bit about you</h2>
					</div>
					
					<?php
						include('connect.php');
						if(isset($_POST['submit'])){
							$name = $_POST['n'];
							$email = $_POST['em'];
							$password = $_POST['p'];
	
							$insert = mysql_query("INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");
	
							echo "<script>alert('New User has been added!')</script>";
							echo "<script>window.open('../index.php','_self')</script>";
						}
					?>
					
				<form method="POST" action=" ">
					<li>
						<input type="text" class="text" value="Username" name="n" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="text" class="text" value="Email" name="em" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" ><a href="#" class=" icon mail"></a>
					</li>
					<li>
						<input type="password" value="Password" name="p" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
								<input type="submit" name="submit" onclick="myFunction()" value="SIGN UP" >
							<div class="clear"> </div>
					</div>
				</form> 
				<div class="social-icons">
							<div class="but-bottom">
							<a href="../login-form/index.html" class="account"><p>Already have an account?</p></a>
							<a href="http://www.google.com" class="trouble"><p>Trouble signing in?</p></a><div class="clear"> </div></div>
							<a href="#" class="social-account"><h3>or sign in with social account</h3></a>
							<a href="http://www.facebook.com"><ul class="facebook">
								<li><img src="images/fb.png" />Facebook</li>
							</ul></a>
							<a href="http://www.twitter.com"><ul class="twitter">
								<li><img src="images/tw.png" />Twitter</li>
							</ul></a>
							<div class="clear"> </div>
				</div>
				<div class="social-icons-1">
							<a href="http://www.google.com"><ul class="google-plus">
								<li><img src="images/gp.png" />Google +</li>
							</ul></a>
							<a href="http://www.linkedin.com"><ul class="linkedIn">
								<li><img src="images/ln.png" />LinkedIn</li>
							</ul></a>
							<div class="clear"> </div>
				</div>
			</div>
 <!--/SIGN UP-->
 <script>$(document).ready(function(c) {
	$('.close-1').on('click', function(c){
		$('.thank-you').fadeOut('slow', function(c){
	  		$('.thank-you').remove();
		});
	});	  
});
</script>

</body>
</html>