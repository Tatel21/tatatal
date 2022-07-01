<?php
include("connect.php");

$name = $_POST['n'];
$email = $_POST['em'];
$password = $_POST['p'];

$sql = "INSERT INTO `signup_tbl`(`n`,`em`, `p`) VALUES ('$name','$email','$password')";
$result = mysql_query($sql,$connect);

	if(!$result){
		echo ("Error " .mysql_error());
}

?>