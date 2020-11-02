<?php
  session_start();

  // check session variable

  if (isset($_SESSION['valid_user']))
  {
    header ("Location: members.php#members");
  }
  else
  {
    header ("Location: login.html#login");
  }
?>