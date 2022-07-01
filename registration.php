<!DOCTYPE html>
<html lang="en">
<head>
   
</head><!--/head-->

<body>
	<?php
	include 'header.php';
	?>
	 
<?php
define('DB_NAME', 'form1');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link){
	die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected){
	die('Can\'t use ' . DB_NAME . ':' . mysql_error());
}
$value = $_POST['firstname'];
$value2 = $_POST['secondname'];
$value3 = $_POST['email'];
$value4 = $_POST['password'];

$sql = "INSERT INTO registration (firstname, secondname, email, password) VALUES('$value', '$value2', '$value3', '$value4')";

if(!mysql_query($sql)){
	die('Error: ' .mysql_error());
}

mysql_close();
?>
	 
	 
	 
	 
	 

	 
		</div>
		
		
		<?php
		include 'footer.php';
		?>