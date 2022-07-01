<?php
	session_start();
	
	//connect to database
	$db = mysqli_connect("localhost", "root", "", "authentication" );
if (isset($_POST['login_btn'])) {
	
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	
	$password = md5($password); // hashed password last time
	$sql = "SELECT *FROM users WHERE username='$username' AND password='$password' ";
	$result = mysqli_query($db,$sql);
	
	if (mysqli_num_rows($result) == 1){
		$_SESSION['message']= "you are now logged in";
		$_SESSION['username']= $username; 
		header ("location:index2.php"); // redirect sa home
	
	}else{
		$_SESSION['message']= "Username/password combination incorrect";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h1><center>Log In</center></h1>
</div>


<?php

	if (isset($_SESSION['message'])) {
		echo"<div id='error_msg'>" .$_SESSION['message']. "</div>";
		unset($_SESSION['message']);
	
	}

?>


	
<form method="post" action="login.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput"</td>
		</tr>
	
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput"</td>
		</tr>
		
	    <tr>
			<td></td>
			<td><input type="submit" name="login_btn" value="Login"></td>
		</tr>
			
	</table>
</form>
</div>
</body>
</html>