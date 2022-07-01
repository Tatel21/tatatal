
<?php  
//Start the Session
session_start();
require('connect.php');
require('config.php');

	
if (isset($_POST['email']) and isset($_POST['password'])){

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` WHERE  email='$email' and password='$password'";
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
while($data = mysql_fetch_assoc($result)){
$level = $data['level'];
}



if ($count == 1)
{
$_SESSION['email'] = $email;
}

else{
echo 
die ('<script language="javascript">
alert("Invalid email / Password!");
window.open("index.php","_parent");
</script>');
$row=mysql_fetch_array($result);

}
{
echo
die('<script language="javascript">
alert;
window.open("../home.php","_parent");
</script>');
}
}
else{
?>

<!DOCTYPE html>


<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
      <link rel="stylesheet" href="css/style.css">
</head>
 <body>
 <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>
	<form data-toggle="validator" novalidate="" action="" method="post">
			<div class="login-form">
				<div class="control-group">
				<input type="email" type="text" class="login-field" name="email" value="" placeholder="Email" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
				
				</div>

				<div class="control-group">
				<input type="password" type="password" class="login-field" name="password" value="" placeholder="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>	

				<td><input class="btn-register" type="submit" name="submit" value="Login" /></td>
				<a class="login-link" href="#">Lost your password?</a>
			</div>	</form>						
		</div>
	</div>
</body>
</body>
<?php } ?>
</html>
