<?php // register.php
include "dbconnect.php";
session_start();

// check if any field is empty
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty ($_POST['email'])
	|| empty ($_POST['password']) || empty ($_POST['password2']) ) {
	alert ("All records must be filled in. Please proceed back and try again.");
	echo "<script>window.location.href='register.html#register';</script>";}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// check if passwords match
if ($password != $password2) {
	alert ("Sorry passwords do not match. Please proceed back and try again.");
	echo "<script>window.location.href='register.html#register';</script>";
	}
// check if username is taken
if (isset($username)) {
		
	$query = 'select * from users '
			."where username='$username' ";
	
	$result = $dbcnx->query($query);
	if ($result->num_rows >0 )
	{
		alert("This username is already taken. Please choose a different username.");    
		echo "<script>window.location.href='register.html#register';</script>";
	}
}
// check if email is already registered
if (isset($email)) {
		
	$query = 'select * from users '
			."where email='$email' ";
	
	$result = $dbcnx->query($query);
	if ($result->num_rows >0 )
	{
		alert("This email address has already been registered. Please check again.");    
		echo "<script>window.location.href='register.html#register';</script>";
	}
}

if (isset($email)&&isset($username)&&$password==$password2){
$password = md5($password);
$sql = "INSERT INTO users (username, email, password) 
		VALUES ('$username', '$email', '$password')";

$result = $dbcnx->query($sql);
$_SESSION['valid_user'] = $username;

$dbcnx->close();

if (!$result){
	alert ("Your query failed.");
	echo "<script>window.location.href='register.html#register';</script>";
	}
else if (isset($_SESSION['valid_user']))
	alert ("Success! You are now registered.");
	echo "<script>window.location.href='members.php#members';</script>";
}
}

// function to echo alert
function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>