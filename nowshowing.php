<?php //start session
    //init session
    session_start();

    if (!isset($_SESSION['name'])){
        $_SESSION['name'] = array();
    }
    if (!isset($_SESSION['date'])){
        $_SESSION['date'] = array();
    }
    if (!isset($_SESSION['time'])){
        $_SESSION['time'] = array();
    }
    if (!isset($_SESSION['location'])){
        $_SESSION['location'] = array();
    }
    if (!isset($_SESSION['price'])){
        $_SESSION['price'] = array();
    }
    if (!isset($_SESSION['qty'])){
        $_SESSION['qty'] = array();
    }
    if (!isset($_SESSION['seats'])){
        $_SESSION['seats'] = array();
    }

    // add details to session
    if (isset($_POST['name'])) {
        //$_SESSION['name'][] = $_POST['name'];
        array_push($_SESSION['name'], $_POST['name']);
    }
    if (isset($_POST['date'])) {
        array_push($_SESSION['date'], $_POST['date']);
    }
    if (isset($_POST['time'])) {
        array_push($_SESSION['time'], $_POST['time']);
    }
    if (isset($_POST['location'])) {
        array_push($_SESSION['location'], $_POST['location']);
    }
    if (isset($_POST['price'])) {
        array_push($_SESSION['price'], $_POST['price']);
    }
    if (isset($_POST['qty'])) {
        array_push($_SESSION['qty'], $_POST['qty']);
    }
    if (isset($_POST['selectedSeats'])) {
        array_push($_SESSION['seats'], $_POST['selectedSeats']);
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

        <script type = "text/javascript"  src = "poster.js"></script>
        
        <style>
            /* The dots/bullets/indicators */
            .button1 {
                border-radius: 30px;
                border: none;
                background-color: #e8e8e8;
                font-size: 14px;
                margin-left: 3px;
                height: 19px;
                width: 13px;
                display: inline-block;
                transition: #717171 0.6s ease;
            }

            .active, .button1:hover {
                background-color: #717171;
            }
        
            /* Fading animation */
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }
    
            @keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }

            /*Movies*/
            .container{
                padding-bottom:20px;
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
    
        <div style="background-color:rgb(255, 168, 6); height: 6px;"></div>
            
        <div class="poster">
        <div id="fade" class="fade">
            <img id="poster" src="https://cms.qz.com/wp-content/uploads/2020/08/disney-mulan-e1596646420500.jpg?quality=75&strip=all&w=1600&h=900&crop=1" width="800px" alt="poster">
        </div>

        <div class="drop">
            <form action="details.php" method="POST">
                <select name="drop" id="drop" required>
                    <option value="" disabled selected>Search for a Movie</option>
                    <option value="1">Mulan</option>
                    <option value="2">Tenet</option>
                    <option value="3">Vanguard</option>
                    <option value="4">The Swordsman</option>
                    <option value="5">Pinocchio</option>
                    <option value="6">David Copperfield</option>
                    <option value="7">I WeirDo</option>
                    <option value="8">Beauty Water</option>
                    <option value="9">Halloween</option>
                    <option value="10">The New Mutants</option>
                    <option value="11">Wonder Woman 1984</option>
                    <option value="12">Snake Eyes: G.I.Joe</option>
                </select>
                <input type="submit" name="Search" class="button" value="Search">
            </form>
        </div>
    </div><br>
        
        <div style="text-align: center; padding-bottom: 25px;">
            <input type="button" class="button1" onclick="chngimg(0)">
            <input type="button" class="button1" onclick="chngimg(1)">
            <input type="button" class="button1" onclick="chngimg(2)">
        </div>

        <div class="wrapper">
            <h1 style="padding-top:20px;">Now Showing</h1><br>
            <div class="container">
                <form action="details.php" method="POST">
                    <input type="image" name="movie[1]" id="mulan" src="https://lumiere-a.akamaihd.net/v1/images/p_mulan2020_20204_b005decc.jpeg?region=0,0,540,810" width="210px" height="300px" alt="Mulan">
                    Mulan
                </form>
            </div>
            <div class="container">
                <form action="details.php" method="POST">
                    <input type="image" name="movie[2]" id="tenet" src="https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg" width="210px" height="300px" alt="Tenet">
                    Tenet
                </form>
            </div>
            <div class="container">
                <form action="details.php" method="POST">
                    <input type="image" name="movie[3]" id="vanguard" src="https://img.reelgood.com/content/movie/4dbbd62d-8788-495b-860e-288ca5eacce5/poster-780.jpg" width="210px" height="300px" alt="Vanguard">
                    Vanguard
                </form>
            </div>
            <div class="container">
                <form action="details.php" method="POST">
                    <input type="image" name="movie[4]" id="vanguard" src="https://img.reelgood.com/content/movie/70cc8269-7998-44ed-bda7-06d5826b4ef8/poster-780.jpg" width="210px" height="300px" alt="Vanguard">
                    The Swordsman
                </form>
            </div>
            <div class="container"> 
                <form action="details.php" method="POST">
                    <input type="image" name="movie[5]" id="vanguard" src="https://media-cache.cinematerial.com/p/500x/rec2m8nv/pinocchio-italian-movie-poster.jpg?v=1575028087" width="210px" height="300px" alt="Vanguard">
                    Pinocchio
                </form>
            </div>
            <div class="container">
                <form action="details.php" method="POST">
                    <input type="image" name="movie[6]" id="mulan" src="https://popcornsg.s3.amazonaws.com/movies/650/12668-21159-ThePerso.jpg" width="210px" height="300px" alt="Mulan">
                    David Copperfield
                </form>
            </div>
            <div class="container">
                <form action="details.php" method="POST">
                    <input type="image" name="movie[7]" id="tenet" src="https://pic.iask.cn/fimg/346798164106.jpg" width="210px" height="300px" alt="Tenet">
                    I WeirDo
                </form>
            </div>
            <div class="container">
                <form action="details.php" method="POST">
                    <input type="image" name="movie[8]" id="vanguard" src="https://m.media-amazon.com/images/M/MV5BMmZlZmI0OGUtOWIxZi00NjYzLTg1NjItZmM3MTBiNWM1YTYzXkEyXkFqcGdeQXVyNjgwNTk4Mg@@._V1_.jpg" width="210px" height="300px" alt="Vanguard">
                    Beauty Water
                </form>
            </div>
            <div class="container">
                <form action="details.php" method="POST">
                    <input type="image" name="movie[9]" id="vanguard" src="https://images-na.ssl-images-amazon.com/images/I/41WUxfhUirL._AC_.jpg" width="210px" height="300px" alt="Vanguard">
                    Halloween
                </form>
            </div>
            <div class="container"> 
                <form action="details.php" method="POST">
                    <input type="image" name="movie[10]" id="vanguard" src="https://image.tmdb.org/t/p/original/xrI4EnZWftpo1B7tTvlMUXVOikd.jpg" width="210px" height="300px" alt="Vanguard">
                    The New Mutants
                </form>
            </div>
            <div class="container">
                <img alt="movie[11]" src="https://images-na.ssl-images-amazon.com/images/I/714O2retc6L._AC_SL1304_.jpg" width="210px" height="300px">
                Wonder Woman 1984
            </div>
            <div class="container">
                <img alt="movie[12]" src="https://i.pinimg.com/originals/6d/e9/2c/6de92c42469612a8714e1b829ce2c756.jpg" width="210px" height="300px">
                Snake Eyes: G.I.Joe
            </div>
            <div class="container">
                <img alt="movie[13]" src="https://popcornsg.s3.amazonaws.com/movies/650/13305-23507-HonestTh.jpg" width="210px" height="300px">
                Honest Thief
            </div>
            <div class="container">
                <img alt="movie[14]" src="https://popcornsg.s3.amazonaws.com/movies/650/4341-4742-TheWarWi0" width="210px" height="300px">
                The War With Grandpa
            </div>
            <div class="container">
                <img alt="movie[15]" src="https://popcornsg.s3.amazonaws.com/movies/650/12097-14534-21Bridgejpg" width="210px" height="300px">
                21 Bridges
            </div>
            <div class="container">
                <img alt="movie[16]" src="https://popcornsg.s3.amazonaws.com/movies/650/1602732199207-25903-Number1.jpg" width="210px" height="300px">
                Number 1
            </div>
            <div class="container">
                <img alt="movie[17]" src="https://popcornsg.s3.amazonaws.com/movies/650/5436-26024-TheSilenjpg" width="210px" height="300px">
                The Silent Forest
            </div>
            <div class="container">
                <img alt="movie[18]" src="https://popcornsg.s3.amazonaws.com/gallery/1602547258-a-mermai.jpg" width="210px" height="300px">
                A Mermaid In Paris
            </div>
            <div class="container">
                <img alt="movie[19]" src="https://popcornsg.s3.amazonaws.com/movies/650/1599204729224-25259-TheSilenjpg" width="210px" height="300px">
                The Silencing
            </div>
            <!--<div class="container">
                <img alt="movie[]" src="" width="210px" height="300px">
                
            </div>-->
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

<script>
    
    var j = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var z;
      var dots = document.getElementsByClassName("button1");
      
      i = j%3;
      chngimg(i);
      j++;

      for (z = 0; z < dots.length; z++) {
        dots[z].className = dots[z].className.replace(" active", "");
      }
      dots[i].className += " active";
      setTimeout(showSlides, 4000); // Change image every n seconds
    }

    //change the poster image by button
    function chngimg(index) {

        switch(index){
            case 0:
                document.getElementById("poster").src  = "https://cms.qz.com/wp-content/uploads/2020/08/disney-mulan-e1596646420500.jpg?quality=75&strip=all&w=1600&h=900&crop=1";
                break;
            case 1:
                document.getElementById("poster").src  = "https://cdn.mos.cms.futurecdn.net/wJ4s9FFL6FdxAoKixtr4FS-1200-80.jpg";
                break;
            case 2:
                document.getElementById("poster").src  = "https://i.pinimg.com/originals/87/bc/f6/87bcf68ba8813f7adb73bd3852a22da4.jpg";
                break;
        }
    }
</script>