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

            /*banner*/
            .poster {
                width: 100%;
                height: 350px;
                margin-top: 50px;
            }

            .mImg {
                width: 220px;
                margin: 20px 0 0 50px;
                float: left;
            }

            .mText {
                width: 70%;
                margin: auto; 
                color: #FFF;
            }

            /*content box*/
            .wrapper {     
                margin: 20px;
                margin-top: 80px;
                padding: 30px 30px;
                min-width:800px;
                height: 100%;
                font-size: 18px;
                background-color: #fff;
            } 

            .selectGrey {
                width: 100%;
                height: 350px;
                background-color: #dfdfdf;
            }

            .payGrey {
                width: 100%;
                height: 100%;
                background-color: #dfdfdf;
                padding-bottom: 30px;
            }

            .right {
                float: right;
                margin-right: 50px;
            }

            input {
                font-size: 20px;
            }

            .payment {
                width: 80%;
                margin: auto;
                text-align: center;
            }

            .payment input {
                font-size: 20px;
                margin: 10px 0 0 20px;
            }
            
            .empty {
                color: #999;
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

            .cancel {
                margin-left: 60px;
                width: 30%;
            }
        </style>

        <script type = "text/javascript"  src = "payment.js"></script>

    </head>
    <body>
        <header>
            <nav>
                <ol>
                    <li><a href="index.html" style="line-height: 15px"><img src="logo.png" width="50px" height="50px"></a></li>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="nowshowing.html">NOW SHOWING</a></li>
                    <li><a href="upcoming.html">UPCOMING</a></li>
                    <li><a href="location.html">LOCATION</a></li>
                    <li><a href="deals.html">SPECIAL DEALS</a></li>
                    <li style="float: right; padding-right: 35px;"><a href="login.html">LOGIN</a></li>
                    <li style="float: right;"><a href="login.html">REGISTER</a></li>
                 </ol>
            </nav>
        </header>

        <!--orange gap-->
        <div style="background-color:rgb(255, 168, 6); height: 6px;"></div>

        <!--Delaring variables -->
        <?php 
            $name =  $_POST['name'];
            $date=  $_POST['date'];
            $time =  $_POST['time'];
            $location = $_POST['location'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $seats = $_POST['selectedSeats'];

            $sql = 'SELECT * FROM movies where name ="' .$name. '"';
            $result = mysqli_query($conn, $sql);
            $movies = mysqli_fetch_array($result);
            $img = $movies["img"];
        ?>
        
        <div class="wrapper">

            <div id="order">
                <div class="poster" style="margin-top: 0px">
                    <div class="mImg">
                        <img src="<?php echo $img ?>" height="300px" width="200px">
                    </div>
                    <div class="mText">
                        <h1 style="margin:0;"><?php echo $name ?></h1><br>
                        <h3><strong>Location: </strong><?php echo $location ?><br><br>
                        <strong>Date: </strong><?php echo $date ?><br><br>
                        <strong>Time: </strong><?php echo $time ?><br></h3>
                    </div>
                </div>
                <div class="selectGrey">
                    <h1 style="padding:30px 0 30px 30px;">Payment </h1>
                    <div class="right">
                        <h3>Amount</h3>
                        <input type = "text" size="5" id="price1" name="price1" onfocus="this.blur();" placeholder="<?php echo $price?>">
                    </div>
                    <div class="right">
                        <h3>Quantity</h3>
                        <input type = "text" size="5" id="qty1" name="qty1" onfocus="this.blur();" placeholder="<?php echo $qty?>">
                    </div> 

                    <h3 style="width:200px; padding-left: 60px;">Seats Selected:</h3>
                    <input type = "text"  style="margin-left: 60px;" size="30" id="selectedSeats" name="selectedSeats" onfocus="this.blur();" placeholder="<?php echo $seats?>">

                    <br><br><br> 
                    <div class="right">
                        <span style="font-family: 'Open Sans', sans-serif;font-size: 20px;font-weight: bold; margin-right:40px;">Grand Total:  </span>
                        <input type = "text" size="5" id="price2" name="price2" onfocus="this.blur();" placeholder="<?php echo $price?>">
                    </div>
                    <div class="cancel">
                        <button onclick="cancelOrder('order')" class="button">Cancel order</button>
                    </div>

                    <br><br>
                </div>
            </div>

           <!--Dump-->

            <!--Print out movie details for session-->
            <?php 

                for ($i=0; $i < count($_SESSION['name']); $i++){
                    $sql1 = 'SELECT * FROM movies where name ="' .$_SESSION['name'][$i]. '"';
                    $result1 = mysqli_query($conn, $sql1);
                    $movies1 = mysqli_fetch_array($result1);
                    $img1 = $movies1["img"];
                    $order = "order".$i;
                    echo ' <div id="'.$order.'">
                        <div class="poster">
                            <div class="mImg">
                                <img src="'.$img1.'" height="300px" width="200px">
                            </div>
                            <div class="mText">
                                <h1 style="margin:0;">'.$_SESSION['name'][$i].'</h1><br>
                                <h3><strong>Location: </strong>'.$_SESSION['location'][$i].'<br><br>
                                <strong>Date: </strong>'.$_SESSION['date'][$i].'<br><br>
                                <strong>Time: </strong>'.$_SESSION['time'][$i].'<br></h3>
                            </div>
                        </div>
                        <div class="selectGrey">
                            <h1 style="padding:30px 0 30px 30px;">Payment </h1>
                            <div class="right">
                                <h3>Amount</h3>
                                <input type = "text" size="5" id="price1" name="price1" onfocus="this.blur();" placeholder="'.$_SESSION['price'][$i].'">
                            </div>
                            <div class="right">
                                <h3>Quantity</h3>
                                <input type = "text" size="5" id="qty1" name="qty1" onfocus="this.blur();" placeholder="'.$_SESSION['qty'][$i].'">
                            </div> 

                            <h3 style="width:200px; padding-left: 60px;">Seats Selected:</h3>
                            <input type = "text"  style="margin-left: 60px;" size="30" id="selectedSeats" name="selectedSeats" onfocus="this.blur();" placeholder="'.$_SESSION['seats'][$i].'">

                            <br><br><br>
                            
                            <div class="right">
                                <span style="font-family: "Open Sans", sans-serif;font-size: 20px;font-weight: bold; margin-right:40px;">Grand Total:  </span>
                                <input type = "text" size="5" id="price2" name="price2" onfocus="this.blur();" placeholder="'.$_SESSION['price'][$i].'">
                            </div>
                            <div class="cancel">
                                <button onclick="cancelOrder(&quot;'.$order.'&quot;)" class="button">Cancel order</button>
                            </div>
                            <br><br>
                        </div>
                    </div>';
                }

            ?>

            <form id="payment" action="" method="POST">
                <div class="payGrey">
                    <!--hidden type to parse to next page-->
                    <input type="hidden" name="name" id="name" value="<?php echo $name ?>"> 
                    <input type="hidden" name="date" id="date" value="<?php echo $date ?>"> 
                    <input type="hidden" name="time" id="time" value="<?php echo $time ?>">
                    <input type="hidden" name="location" id="location" value="<?php echo $location ?>">
                    <input type="hidden" name="price" id="price" value="<?php echo $price ?>">
                    <input type="hidden" name="qty" id="qty" value="<?php echo $qty ?>">  
                    <input type="hidden" name="seats" id="seats" value="<?php echo $seats ?>">
                    <?php 
                        for ($i=0; $i < count($_SESSION['name']); $i++) {
                            echo '<input type="hidden" name="cancelorder'.$i.'" id="cancelorder'.$i.'" value="order">';
                        }
                    ?>
                
                    <div class="payment">
                        <h3>Confrim your order and enter your payment details to proceed.</h3>
                        <input type="text" size="50" id="user" name="user" placeholder="Name"><br>
                        <input type="email" size="50" id="email" name="email" placeholder="Email"><br>
                        <input type="number" min="0" style="width:544px;" id="number" name="number" placeholder="Contact Number"><br>
                        <input type="number" min="0" style="width:230px;" id="Cnumber" name="Cnumber" placeholder="Visa/MC Card Number">
                        <input type="date" style="width:180px;" id="Edate" name="Edate" class="empty">
                        <input type="number" min="0" style="width:70px;" id="cvv" name="cvv" placeholder="CVV"> 
                        <br><br>
                        <div style="width:40%; margin: auto;">
                            <input type="submit" value="CANCEL" class="button" onclick="submitForm('index.html')">
                            <input type="submit" value="PAY" class="button" onclick="return submitForm('confirm.php');">
                        </div>
                    </div>
                </div>
            </form>

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