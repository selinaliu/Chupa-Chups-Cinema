<?php
include "dbconnect.php";

if (isset($_POST['username']) && isset($_POST['email'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = 'select * from users '
           ."where username='$username' "
           ." and email='$email'";

    $result = $dbcnx->query($query);
    if ($result->num_rows >0 ) {
    // if they are in the database, update the password
    $password = md5($password);
    $sql = "UPDATE users SET password='$password' WHERE email='$email'";

    $result = $dbcnx->query($sql);

    if (!$result){
        alert ("Your query failed.");
        echo "<script>window.location.href='reset.html';</script>";
    }

    // Send email notification
    $to      = 'f33ee@localhost';
    $subject = 'Password Updated';

    $message = 'Hi '.$username.', your password has just been updated. If unauthorised, please contact our service hotline.';
    $headers = 'From: ChupaChupsCinema@no-reply.com' . "\r\n" .
        'Reply-To: f33ee@localhost' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers,'-ff33ee@localhost');
    }
    else { // if not in database
        alert('Username and email does not match. Please check again.');
        echo "<script>window.location.href='reset.html';</script>";
    }
    $dbcnx->close();
}

// function to echo alert
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
            <h5><br><br><br>Password reset! You will receive an email shortly.</h5>
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