<?php //login.php
include "dbconnect.php";
session_start();

if (isset($_POST['username']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $username = $_POST['username'];
  $password = $_POST['password'];
/*
  $db_conn = new mysqli('localhost', 'webauth', 'webauth', 'auth');

  if (mysqli_connect_errno()) {
   echo 'Connection to database failed:'.mysqli_connect_error();
   exit();
  }
*/
$password = md5($password);
  $query = 'select * from users '
           ."where username='$username' "
           ." and password='$password'";
// echo "<br>" .$query. "<br>";
  $result = $dbcnx->query($query);
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
    //echo 'You are logged in as: '.$_SESSION['valid_user'].' <br />';
    //echo '<a href="logout.php">Log out</a><br />';
    header ("Location: members.php#members");
  }
  else
  {
    if (isset($username))
    {
      // if they've tried and failed to log in
      alert ("Incorrect username or password. Please proceed back and try again.");
    }
    else 
    {
      // they have not tried to log in yet or have logged out
      alert ("You are not logged in.");
    }
  }

function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>
