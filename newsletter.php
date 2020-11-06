<?php
include "dbconnect.php";

if (isset($_POST['submit'])) {
	if (empty($_POST['user']) || empty ($_POST['email']) ) {
	alert ("All records must be filled in. Please proceed back and try again.");
	exit;}
    }
    //Check email has not been registered
if (isset($_POST['user']) && isset($_POST['email'])) {
    $email = $_POST['email'];
    
    $query = 'select * from newsletter '
            ."where email='$email' ";

    $result = $dbcnx->query($query);
    if ($result->num_rows >0 )
    {
        alert("This email address has already been registered. Please check your email.");    
        return false;
    }
    else {
    //Insert name and email into database
    $username = $_POST['user'];
    $email = $_POST['email'];

    $sql = "INSERT INTO newsletter (username, email) 
		    VALUES ('$username', '$email')";

    $result = $dbcnx->query($sql);

    if (!$result) {
        alert ("Your query failed.");
        return false;
    }
    //Send confirmation email
    $to      = 'f33ee@localhost';
    $subject = 'Newsletter Subscription';

    $user = $_POST['user'];
    $message = 'Hi '.$user.', thank you for subscribing to our newsletter! Be the first to know all new movies, exciting events and special discounts right here at Chupa Chups Cinema.';
    $headers = 'From: ChupaChupsCinema@no-reply.com' . "\r\n" .
        'Reply-To: f33ee@localhost' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers,'-ff33ee@localhost');
    //echo ("mail sent to : ".$to);
    }
    $dbcnx->close();
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

        .button{
            font-size: 20px;
            padding: 12px 20px;
            border: 0px solid #ccc;
            border-radius: 50px;
            background-color: rgb(255, 168, 6);
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
            <h5><br><br>You have subscribed to our newsletter. <br>Look out for more exciting updates coming your way!</h5>
        
        <form action="unsubscribe.php" method=POST>
            <button id=home name=home class=button style="width:215px;">Back to Home</button>
            <input type=submit id=unsubscribe name=unsubscribe class=button value=Unsubscribe style="width:215px; margin-left: 35px;">
            <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
        </form> 
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