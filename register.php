<?php // register.php
include "dbconnect.php";
session_start();

if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty ($_POST['password'])
		|| empty ($_POST['password2']) ) {
	alert ("All records must be filled in. Please proceed back and try again.");
	exit;}
	}
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// echo ("$username" . "<br />". "$password2" . "<br />");
if ($password != $password2) {
	alert ("Sorry passwords do not match. Please proceed back and try again.");
	exit;
	}

if (isset($username)) {
		
	$query = 'select * from users '
			."where username='$username' ";
	
	$result = $dbcnx->query($query);
	if ($result->num_rows >0 )
	{
		alert("This username is already taken. Please choose a different username.");    
		return false;
	}
}

if (isset($email)) {
		
	$query = 'select * from users '
			."where email='$email' ";
	
	$result = $dbcnx->query($query);
	if ($result->num_rows >0 )
	{
		alert("This email address has already been registered. Please check again.");    
		return false;
	}
}

$password = md5($password);
// echo $password;
$sql = "INSERT INTO users (username, email, password) 
		VALUES ('$username', '$email', '$password')";
//	echo "<br>". $sql. "<br>";
$result = $dbcnx->query($sql);
$_SESSION['valid_user'] = $username;

$dbcnx->close();

if (!$result)
	alert ("Your query failed.");
else if (isset($_SESSION['valid_user']))
	//alert ("Welcome ". $username . ". You are now registered.");
	header ("Location: members.php#members");
	exit;

function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>