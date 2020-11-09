<?php //login.php
include "dbconnect.php";
session_start();

if (isset($_POST['username']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $username = $_POST['username'];
  $password = $_POST['password'];

  $password = md5($password);
  $query = 'select * from users '
           ."where username='$username' "
           ." and password='$password'";

  $result = $dbcnx->query($query);
  // check if username and password are in database
  if ($result->num_rows >0 )
  {
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $username;    
  }
  $dbcnx->close();
}
    /* Query Results */
  if (isset($_SESSION['valid_user']))
  {
    header ("Location: members.php#members");
  }
  else
  {
    if (isset($username))
    {
      // if they've tried and failed to log in
      alert('Incorrect username or password! Please try again.');
      echo "<script>window.location.href='login.html#login';</script>";
    }
    else 
    {
      // they have not tried to log in yet or have logged out
      alert ("You are not logged in.");
      echo "<script>window.location.href='login.html#login';</script>";
    }
  }

// function to echo alert
function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>