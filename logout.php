<?php
  session_start();
  
  // store to test if they *were* logged in
  $old_user = $_SESSION['valid_user'];  
  unset($_SESSION['valid_user']);
  session_destroy();

  if (!empty($old_user))
  {
    header ("Location: logout.html");
  }
  else
  {
    // if they weren't logged in but came to this page somehow
    alert ("You were not logged in, and so have not been logged out."); 
  }

function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}
?> 