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
            h1{	font-size: 32px;
				color:#333333; 
				font-family: 'Montserrat', sans-serif;
                margin: 0 0 10px 30px;
			}

            h1 a {  color:#333333;
                    font-size: 16px;
                    margin-left: 9px;
            }

            h2 {
                color:#fff;
                font-size: 40px;
                font-family: 'Montserrat', sans-serif;
            }

			h3{font-size: 18px;}

            /*banner*/
            .poster {
                width: 100%;
                height: 575px;
                margin-top: 70px;
                display: flex;
                justify-content: baseline;
                align-items: baseline;
                overflow: hidden
            }

            .poster img {
                flex-shrink: 0;
                min-width: 100%;
                min-height: 100%;
                filter: blur(8px);
                -webkit-filter: blur(8px);
            }

            .mImg {
                position: absolute;
                left: 100px;
                top:  120px;  /*27%;*/
            }

            .mText {
                width: 600px;
                position: absolute;
                left: 500px;
                top:  120px; 
                color: #FFF;
            }

            .checked {
                color: orange;
            }

            /*Drop-down box*/
            .drop {
                position: absolute;
                left: 0;
                top:  80px;  /*27%;*/
                width: 100%;
                
                text-align: left;
                padding-left: 55px;
            }

            #drop {
                width: 538px;
                height: 24px;
                font-size: 16px;
            }

            .button {
                border-radius: 10px;
                border: none;
                background-color:rgb(255, 168, 6);
                color: #fff;
                font-size: 16px;
                padding:4px 10px 4px 10px;
            }

            .button1 {
                border-radius: 30px;
                border: none;
                background-color: #e8e8e8;
                font-size: 14px;
                margin-left: 3px;
            }

            /*Drop-down options*/
            select:invalid {
            color: gray;
            }

            option[value=""][disabled] {
            display: none;
            }

            option {
            color: #000;
            }

            /*content box*/
            #wrapper {     
                margin: 20px;
                padding: 20px;
                min-width:800px;
                height: 400px;
                font-size: 18px;
                background-color: #fff;
		    } 

            .container {
                width: 200px;
                height: 350px;
                margin: 0px 0 0 30px;
                float: left;
                color:#000;
                text-align: center;
                font-weight: 600;
            }
        </style>

        <script type = "text/javascript"  src = "poster.js"></script>

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

        <div style="background-color:rgb(255, 168, 6); height: 6px;"></div>
        <?php
                    //check which img is pressed
                    if( $_POST['movie'] ) {
                        $keys = array_keys($_POST['movie']);
                        $ID = $keys[0];
                    }
                    
                    //get just details from database: movies
                    $sql = "SELECT * FROM movies where ID =" .$ID;
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    $poster = $row["poster"];
                    $img = $row["img"];
                    $name = $row["name"];
                    $stars = $row["stars"];
                    $director = $row["director"];
                    $cast = $row["cast"];
                    $releaseDate = $row["releaseDate"];
                    $duration = $row["duration"];
                    $distributer = $row["distributer"];
                    
                ?>
        <div>
            <div class="poster">
                <img id="poster" src="<?php echo $poster ?>" width="800px" alt="poster">
            </div>
            <div class="mImg">
                <img src="<?php echo $img ?>" height="450px" width="300px">
            </div>
            <div class="mText">
                <?php echo $name ?><br>

                <?php 
                    for ($x = 1; $x <= $stars; $x++) {
                        echo "<span class='fa fa-star checked'></span>";
                    }
                    for ($x = 1; $x <= 5-$stars; $x++) {
                        echo "<span class='fa fa-star'></span>";
                    }
                ?>
                <br>
                Director: <?php echo $director ?><br>
                Cast: <?php echo $cast ?><br>
                Release Date: <?php echo $releaseDate ?><br>
                Running Time: <?php echo $duration ?> <br>
                Distributer: <?php echo $distributer?><br>
            </div>
        </div>
        

        <div id="wrapper">
            <div>
                SYNOPSIS
            </div>
            <div>
                TRAILER
            </div>
            <div>
                SHOWTIME
            </div>
            <div>
                REVIEWS
            </div>
        </div>


    </body>
    <footer>
        <div class="fimg">
            <img src="logo.png" width="100px" height="100px" style="align-items: baseline;">
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
        <div class="fapp">
            GET THE APP <br>
            <input type="button" class="fbutton" value="APP STORE">
            <input type="button" class="fbutton" value="GOOGLE PLAY">
        </div>  
    </footer>
</html>