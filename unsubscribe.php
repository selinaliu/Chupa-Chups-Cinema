<?php
include "dbconnect.php";

if (isset($_POST['home'])){
    header ("Location: index.html#home");
}

if (isset($_POST['unsubscribe'])){

    $email = $_POST['email'];

    $sql = "DELETE FROM newsletter WHERE email='$email'";

    $result = $dbcnx->query($sql);

if (!$result) 
    alert ("Your query failed.");
    return false;
}

function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Chupa Chups Cinema</title>
        <meta charset="utf-8">

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="stylesheet" href="color.css">
    
    <style>

        body{
            background-color: #e8e8e8;
        }

        h5 {
            color:#333333;
            font-size: 28px;
        }
    </style>
    
    </head>

    <body>
        <header>
            <nav>
                <ol>
                    <li><a href="index.html#home" style="line-height: 15px"><img src="logo.png" width="50px" height="50px"></a></li>
                    <li><a id="home" href="index.html#home">HOME</a></li>
                    <li><a id="nowshowing" href="nowshowing.php#nowshowing">NOW SHOWING</a></li>
                    <li><a id="upcoming" href="upcoming.html#upcoming">UPCOMING</a></li>
                    <li><a id="location" href="location.html#location">LOCATION</a></li>
                    <li><a id="members" href="members.php#members">SPECIAL DEALS</a></li>
                    <li style="float: right; padding-right: 60px;"><a id="login" href="login.html#login">LOGIN</a></li>
                    <li style="float: right;"><a id="register" href="register.html#register">REGISTER</a></li>
                </ol>
            </nav>
        </header>
    
        <div style="background-color:rgb(255, 168, 6); height: 75px;"></div>

        <div class="login">
            <h5><br><br><br>You have successfully unsubscribed from our newsletter.</h5>
        </div>
        </body>
        <footer>
            <div class="fimg">
                <img src="logo.png" width="100px" height="100px" style="align-items: baseline;">
            </div>
            <div class="fapp">
                    GET THE APP <br>
                    <input type="button" class="fbutton" value="APP STORE" style="width: 130px;">
                    <input type="button" class="fbutton" value="GOOGLE PLAY" style="width: 150px;">
            </div>
            <div class="fabout">
                    ABOUT US<br><br>
                    Chupa Chups... The sweetest treat in town! Find local movie showtimes, watch trailers and book tickets right here at your favourite cinema.<br><br>
                    <small><i>EE4717 &copy; Chupa Chups Cinema</i></small> 
                    <br>
                    <em>Liu Yi Hsuan &amp; Foo Kai Lin</em>
            </div>
        </footer>
    </html>