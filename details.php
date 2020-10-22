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
            /*movie details in poster*/
            h2 {
                color: #fff;
                font-family: 'Open Sans', sans-serif;
                font-size: 20px;
                margin: 0;
            }

            /*movie details in wrapper*/
			h3{
                color: #000;
                font-family: 'Open Sans', sans-serif;
                font-size: 20px;
                margin: 0;
            }

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
                padding: 30px 30px;
                min-width:800px;
                height: 1500px;
                font-size: 18px;
                background-color: #fff;
            } 
            
            .showtime {
                background-color: #000;
            }

            .showtime button {
                color: #FFFFFF !important;
                font-family: 'Open Sans', sans-serif;
                font-size: 20px;
                padding: 20px;
                border: 0px;
                background: #000;
            }

            .showtime button:hover {
                color:  !important;
                background: rgb(255, 168, 6);
            }

            .showtime-container {
                background-color: #dfdfdf;
                padding: 20px;
            }

            .review {
                width: 300px;
                height: 230px;
                margin: 0px 0px 0px 80px;
                float: left;
                color:#000;
            }
        </style>

        <script type = "text/javascript"  src = "date.js"></script>

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
                    //check which img is pressed in index.html
                    if( $_POST['movie'] ) {
                        $keys = array_keys($_POST['movie']);
                        $ID = $keys[0];
                    }
                    
                    //get details from database: movies
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
                    $syn = $row["synopsis"];
                    $trailer = $row["trailer"];
                    $review1 = $row["review1"];
                    $review2 = $row["review2"];
                    $review3 = $row["review3"];
                ?>
        <div>
            <div class="poster">
                <img id="poster" src="<?php echo $poster ?>" width="800px" alt="poster">
            </div>
            <div class="mImg">
                <img src="<?php echo $img ?>" height="450px" width="300px">
            </div>
            <div class="mText">
                <h1 style="color: #fff;margin: 0;"><?php echo $name ?></h1>

                <?php 
                    for ($x = 1; $x <= $stars; $x++) {
                        echo "<span class='fa fa-star checked'></span>";
                    }
                    for ($x = 1; $x <= 5-$stars; $x++) {
                        echo "<span class='fa fa-star'></span>";
                    }
                ?>
                <br><br>
                <h2><strong>Director: </strong><?php echo $director ?><br>
                <strong>Cast: </strong><?php echo $cast ?><br>
                <strong>Release Date: </strong><?php echo $releaseDate ?><br>
                <strong>Running Time: </strong><?php echo $duration ?> <br>
                <strong>Distributer: </strong><?php echo $distributer?><br></h2>
            </div>
        </div>
        

        <div id="wrapper">
            <div>
                <h1 style="margin: 0 0 30px 0;">SYNOPSIS</h1>
                <h3><?php echo $syn ?><h3>
                <br><hr><br>
            </div>
            <div>
                <h1 style="margin: 0 0 30px 0;">TRAILER</h1>
                <iframe width="728" height="410" src="<?php echo $trailer?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                <br><br><hr><br>
            </div>
            <div>
                <h1 style="margin: 0 0 30px 0;">SHOWTIME</h1>
                <?php
                    $sql = "SELECT CURDATE()";
                    $result = mysqli_query($conn, $sql);
                    $currentDate = mysqli_fetch_assoc($result);

                    $sql1 = "SELECT DATE_ADD(CURDATE(), INTERVAL 1 DAY)";
                    $result1 = mysqli_query($conn, $sql1);
                    $currentDate1 = mysqli_fetch_assoc($result1);

                    $sql2 = "SELECT DATE_ADD(CURDATE(), INTERVAL 2 DAY)";
                    $result2 = mysqli_query($conn, $sql2);
                    $currentDate2 = mysqli_fetch_assoc($result2);

                    $sql3 = "SELECT DATE_ADD(CURDATE(), INTERVAL 3 DAY)";
                    $result3 = mysqli_query($conn, $sql3);
                    $currentDate3 = mysqli_fetch_assoc($result3);

                    $sql4 = "SELECT DATE_ADD(CURDATE(), INTERVAL 4 DAY)";
                    $result4 = mysqli_query($conn, $sql4);
                    $currentDate4 = mysqli_fetch_assoc($result4);

                    $sql5 = "SELECT DATE_ADD(CURDATE(), INTERVAL 5 DAY)";
                    $result5 = mysqli_query($conn, $sql5);
                    $currentDate5 = mysqli_fetch_assoc($result5);

                    $sql6 = "SELECT DATE_ADD(CURDATE(), INTERVAL 6 DAY)";
                    $result6 = mysqli_query($conn, $sql6);
                    $currentDate6 = mysqli_fetch_assoc($result6);
                ?>

                <div class="showtime">
                    <button onclick="openDate('today')"><?php echo $currentDate['CURDATE()']; ?></button>
                    <button onclick="openDate('today+1')"><?php echo $currentDate1['DATE_ADD(CURDATE(), INTERVAL 1 DAY)']; ?></button>
                    <button onclick="openDate('today+2')"><?php echo $currentDate2['DATE_ADD(CURDATE(), INTERVAL 2 DAY)']; ?></button>
                    <button onclick="openDate('today+3')"><?php echo $currentDate3['DATE_ADD(CURDATE(), INTERVAL 3 DAY)']; ?></button>
                    <button onclick="openDate('today+4')"><?php echo $currentDate4['DATE_ADD(CURDATE(), INTERVAL 4 DAY)']; ?></button>
                    <button onclick="openDate('today+5')"><?php echo $currentDate5['DATE_ADD(CURDATE(), INTERVAL 5 DAY)']; ?></button>
                    <button onclick="openDate('today+6')"><?php echo $currentDate6['DATE_ADD(CURDATE(), INTERVAL 6 DAY)']; ?></button>
                </div>
                <div id="today" class="showtime-container date">
                    <h3>10/11/2020</h3>
                    <h3>London is the capital city of England.</h3>
                </div>
                    <div id="today+1" class="showtime-container date" style="display:none">
                    <h3>11/11/2020</h3>
                    <h3>Paris is the capital of France.</h3> 
                </div>
                <div id="today+2" class="showtime-container date" style="display:none">
                    <h3>12/11/2020</h3>
                    <h3>Tokyo is the capital of Japan.</h3>
                </div>
                <br><hr><br>
            </div>
            <div>
                <h1 style="margin: 0 0 30px 0;">REVIEWS</h1>
                <div class="review">
                <h3><?php echo $review1 ?></h3>
                </div>
                <div class="review">
                <h3><?php echo $review2 ?></h3>
                </div>
                <div class="review">
                <h3><?php echo $review3 ?></h3>
                </div>
                <div style="clear:both"></div>
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