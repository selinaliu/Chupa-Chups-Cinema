<?php // register.php
include "dbconnect.php";
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty ($_POST['password'])
		|| empty ($_POST['password2']) ) {
	alert ("All records must be filled in. Please proceed back and try again.");
	exit;}
	}
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// echo ("$username" . "<br />". "$password2" . "<br />");
if ($password != $password2) {
	alert ("Sorry passwords do not match. Please proceed back and try again.");
	exit;
	}
$password = md5($password);
// echo $password;
$sql = "INSERT INTO users (username, password) 
		VALUES ('$username', '$password')";
//	echo "<br>". $sql. "<br>";
$result = $dbcnx->query($sql);

if (!$result) 
	alert ("Your query failed.");
else
	//alert ("Welcome ". $username . ". You are now registered.");
	header ("Location: members.php#members");
	exit;

function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>