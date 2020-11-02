<?php
	$servername = "localhost";
	$username = "f33ee";
	$password = "f33ee";
	$dbname = "f33ee";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
    }

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Chupa Chups Cinema</title>
        <meta charset="utf-8">

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="color.css">

        <style>
            /*text in table*/
            h2 {
                color: #000;
                font-family: 'Open Sans', sans-serif;
                font-size: 20px;
                margin:0;
                display: block; 
                position: absolute;
            }

            /*text in wrapper*/
			h3{
                color: #000;
                font-family: 'Open Sans', sans-serif;
                font-size: 20px;
                margin:0;
            }

            /*content box*/
            .wrapper {    
                margin: 20px;
                margin-top: 80px;
                padding: 30px 30px;
                min-width:800px;
                height: 560px;
                font-size: 18px;
                background-color: #fff;
            } 

            .confirm {
                width: 60%;
                margin: auto;
                margin-top: 6%;
                text-align: center;
            }

            .button {
                border-radius: 10px;
                border: none;
                background-color:rgb(255, 168, 6);
                color: #fff;
                font-size: 20px;
                padding: 7px 10px 7px 10px;
                cursor: pointer;
            }
        
        </style>

        <script type = "text/javascript"  src = "payment.js"></script>

    </head>
    <body>
        <header>
            <nav>
                <ol>
                    <li><a href="index.html#home" style="line-height: 15px"><img src="logo.png" width="50px" height="50px"></a></li>
                    <li><a id="home" href="index.html#home">HOME</a></li>
                    <li><a id="nowshowing" href="nowshowing.html#nowshowing">NOW SHOWING</a></li>
                    <li><a id="upcoming" href="upcoming.html#upcoming">UPCOMING</a></li>
                    <li><a id="location" href="location.html#location">LOCATION</a></li>
                    <li><a id="deals" href="deals.html#deals">SPECIAL DEALS</a></li>
                    <li id="login" style="float: right; padding-right: 60px;"><a href="login.html#login">LOGIN</a></li>
                    <li id="register" style="float: right;"><a href="login.html#register">REGISTER</a></li>
                </ol>
            </nav>
        </header>

        <!--orange gap-->
        <div style="background-color:rgb(255, 168, 6); height: 6px;"></div>

        <!--inserting into database: orders-->
        <?php 
            $name =  $_POST['name'];
            $date=  $_POST['date'];
            $time =  $_POST['time'];
            $location = $_POST['location'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $seats = $_POST['seats'];
            $user = $_POST['user'];
            $email = $_POST['email'];
            $num = $_POST['number'];

            //if empty means order cancelled
            if($qty != 0){
                $sql = 'INSERT INTO orders(movie, date, time, location, seat, qty, price, user, email, num) 
                VALUES ("'.$name.'","'.$date.'","'.$time.'","'.$location.'","'.$seats.'","'.$qty.'","'.$price.'","'.$user.'","'.$email.'","'.$num.'")';
                mysqli_query($conn, $sql);
            }
           
            echo $_POST['cancel'.$i];
            //session
            for ($i=0; $i < count($_SESSION['name']); $i++){
                if ($_POST['cancelorder'.$i] == "order"){
                    $sql = 'INSERT INTO orders(movie, date, time, location, seat, qty, price, user, email, num) 
                    VALUES ("'.$_SESSION['name'][$i].'","'.$_SESSION['date'][$i].'","'.$_SESSION['time'][$i].'","'.$_SESSION['location'][$i].'","'.$_SESSION['seats'][$i].'","'.$_SESSION['qty'][$i].'","'.$_SESSION['price'][$i].'","'.$user.'","'.$email.'","'.$num.'")';
                    mysqli_query($conn, $sql);
                }
            }
        ?>

        
<!--Send confirmation email-->
<?php
$ran2 = rand(1111111, 9999999);
$to      = 'f33ee@localhost';
$subject = 'Booking Confirmation';
for ($i=0; $i < count($_SESSION['name']); $i++){
$ran1 = rand(1111111, 9999999);
$str .= '
Booking reference:'.$ran1.'
Movie: '.$_SESSION["name"][$i].'
Date: '.$_SESSION["date"][$i].'
Time: '.$_SESSION["time"][$i].'
Location: '.$_SESSION["location"][$i].'
Seat(s): '.$_SESSION["seats"][$i].'
Total payment: $'.$_SESSION["price"][$i].'
';
}

$message = 'Dear '.$user.',
Using this booking confirmation, please print out the ticket(s) at the self-service kiosk or collect them from our counters. The ticket(s) will have to be presented during entry.

Booking reference:'.$ran2.'
Movie: '.$name.'
Date: '.$date.'
Time: '.$time.'
Location: '.$location.'
Seat(s): '.$seats.'
Total payment: $'.$price.'
'.$str.'
			
Thank you for choosing Chupa Chups Cinema. We look forward to serve you at our cinemas.';
$headers = 'From: f33ee@localhost' . "\r\n" .
    'Reply-To: f33ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff33ee@localhost');
echo ("mail sent to : ".$to);
?> 
        
        <div class="wrapper">
            <div class="confirm">
                <h1 style="margin:0;">Booking Confirmed!</h1>
                <br><br>
                <h3>Thank you for your purchase. A confirmation email regarding your booking will be 
                    sent to the email you entered during payment. You are require to present the 
                    confirmation email to our staff upon entry. Please note that you are not allowded
                    to exchange or refund your booking.</h3>
                <br><br>
                <h3>We hope you have a great movie experience at our theatres.</h3>
                <br><br>
                <form action="index.html">
                    <input type="submit" value="Home Page" class="button">
                </form>
            </div>            
        </div>


    </body>
    <footer>
        <div class="fimg">
            <img src="logo.png" width="100px" height="100px" style="align-items: baseline;">
        </div>
        <div class="fapp">
                GET THE APP <br>
                <input type="button" class="fbutton" value="APP STORE">
                <input type="button" class="fbutton" value="GOOGLE PLAY">
        </div>
        <div class="fabout">
                ABOUT<br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in <br>
                <small><i>EE4717 &copy; Chupa Chups Cinema</i></small> 
                <br>
                <em>Liu Yi Hsuan &amp; Foo Kai Lin</em>
        </div>
    </footer>
</html>


<!--unset all sessions for new bookings-->
<?php
    
    if (isset($_SESSION['name'])){
        unset($_SESSION['name']);
    }
    if (isset($_SESSION['date'])){
        unset($_SESSION['date']);
    }
    if (isset($_SESSION['time'])){
        unset($_SESSION['time']);
    }
    if (isset($_SESSION['location'])){
        unset($_SESSION['location']);
    }
    if (isset($_SESSION['price'])){
        unset($_SESSION['price']);
    }
    if (isset($_SESSION['qty'])){
        unset($_SESSION['qty']);
    }
    if (isset($_SESSION['seats'])){
        unset($_SESSION['seats']);
    }
 ?>