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
            }

            .mImg {
                position: absolute;
                left: 150px;
                top:  120px;  /*27%;*/
            }

            .mText {
                width: 600px;
                position: absolute;
                left: 450px;
                top:  120px; 
                color: #FFF;
            }

            /*content box*/
            .wrapper {     
                margin: 20px;
                margin-top: 80px;
                padding: 30px 30px;
                min-width:800px;
                height: 1500px;
                font-size: 18px;
                background-color: #fff;
            } 

            .seats {
                background-color: #dfdfdf;
                width: 100%;
                height: 630px;
                margin-bottom: 50px;     
            }

            table {	
                margin: auto;
				border: 0px solid #000;
				width: 600px; 
            }

            td, th {
                padding: 10px;
                border-style: none;
                height: 20px;
                font-weight: bold;
                text-align:center;
            }

            .NAseat {
                display: block;
                position: absolute;
                background-color: #808080; 
                width: 25px; 
                height: 25px;
            }

            .Aseat {
                display: block;
                position: absolute;
                background-color: #fff; 
                width: 25px; 
                height: 25px;
            }

            .selectedSeat {
                display: block;
                position: absolute;
                background-color: rgb(255, 168, 6); 
                width: 25px; 
                height: 25px;
                margin-top: 10px;
            }
            
            /*Unable to style checkbox, customize checkbox involves hiding the checkbox creating an element 
            and styling that as you want then binding its click event to two functions one to change its 
            look and another to activate the click event of the checkbox.*/
            /*The container */
            .seat {
                display: block;
                position: relative;
                cursor: pointer;
                font-size: 22px;
            }

            /* Hide the browser's default checkbox */
            .seat input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
                height: 25px;
                width: 25px;
                margin: 0;
                z-index: 100;
                top: 0;
                left: 0;
            }

            /* Create a custom checkbox*/
            .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #fff;
                z-index: 0;
            }

            /* On mouse-over, add a grey background color */
            .seat:hover input ~ .checkmark {
                background-color: #ccc;
            }

            /* When the radio button is checked, add a orange background */
            .seat input:checked ~ .checkmark {
                background-color: rgb(255, 168, 6);
            }

            /* Create the indicator (the dot/circle - hidden when not checked) */
            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            /* Show the indicator (dot/circle) when checked */
            .seat input:checked ~ .checkmark:after {
                display: block;
            }

            /* Style the indicator (dot/circle) */
            .seat .checkmark:after {
                    top: 9px;
                    left: 9px;
                    width: 8px;
                    height: 8px;
            }

            .legend {
                width: 50%; 
                padding: 30px 0 0 490px;
            }

            .selected {
                width: 100%;
                height: 300px;
                margin: 30px;
            }
            
        </style>

        <script type = "text/javascript"  src = "date.js"></script>
        <script type = "text/javascript"  src = "seats.js"></script>

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
            if( $_POST['time'] ) {
                $keys = array_keys($_POST['time']);
                $locationID = $keys[0];
            }
            $name =  $_POST['name'];
            $date=  $_POST['date'];
            $time =  $_POST['time'][$locationID];
            
            switch ($locationID) {
                case '1':
                    $location = 'Woodlands';
                    break;
                case '2':
                    $location = 'Orchard';
                    break;  
                case '3':
                    $location = 'Jurong East';
                    break;
            }
            $sql = 'SELECT * FROM movies where name ="' .$name. '"';
            $result = mysqli_query($conn, $sql);
            $movies = mysqli_fetch_array($result);
            $img = $movies["img"];
        ?>
        
        <div class="wrapper">
            <div class="poster">
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

            <div class="seats">
                <h1 style="padding:20px 0 0 20px; margin:0;">Seats</h1>
                <h3 style="padding: 0 0 20px 20px;">Select your seats: </h3>
                <h3 style="text-align: center">Screen</h3>
                
                <table>
                    <!--row A-->
                    <tr>
                        <td><h2>A</h2></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="A-4">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="A-5">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                    </tr>
                    <!--row B-->
                    <tr>
                        <td><h2>B</h2></td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="B-1">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="B-2">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="B-7">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="B-8">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                    </tr>
                    <!--row C-->
                    <tr>
                        <td><h2>C</h2></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="C-4">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="C-5">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                    </tr>
                    <!--row D-->
                    <tr>
                        <td><h2>D</h2></td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="D-1">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="D-2">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="D-7">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="D-8">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                    </tr>
                    <!--row E-->
                    <tr>
                        <td><h2>E</h2></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="E-4">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="E-5">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                    </tr>
                    <!--row F-->
                    <tr>
                        <td><h2>F</h2></td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="F-1">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="F-2">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="F-7">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="F-8">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                    </tr>
                    <!--row G-->
                    <tr>
                        <td><h2>G</h2></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="G-4">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="seat">
                                <input type="checkbox" name="seat" value="G-5">
                                <span class="checkmark"></span>
                            </div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                        <td>
                            <div class="NAseat"></div>
                        </td>
                    </tr>
                    <!--Legend-->
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td></td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td></td>
                        <td>7</td>
                        <td>8</td>
                    </tr>
                </table>
                

                <div class="legend">
                    <span class="Aseat"></span> <h3 style="margin-left: 50px;">Seat Available</h3>
                    <span class="selectedSeat"></span> <h3 style="margin-left: 50px; margin-top:10px;">Seat Selected</h3>
                    <span class="NAseat" style=" margin-top: 10px;"></span> <h3 style="margin-left: 50px; margin-top:10px;">Seat Not Available</h3>
                </div>
            </div>

            <div class="selected">
                <input type="hidden" id="btn" onclick="return getSeats();">
                <h3>Seats Selected:</h3>
                <input type = "text" size="50" id="selectedSeats" name="selectedSeats" onfocus="this.blur();">
                <h3>Quantity</h3>
                <input type = "text" size="50" id="qty" name="qty" onfocus="this.blur();">
                <h3>Amount</h3>
                <input type = "text" size="50" id="price" name="price" onfocus="this.blur();">

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