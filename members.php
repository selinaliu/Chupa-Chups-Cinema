<?php
  session_start();
  // check session variable

  // if not logged in
  if (!isset($_SESSION['valid_user']))
  {
    header ("Location: login.html#login");
    exit;
  }

  $username = $_SESSION['valid_user'];
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
            background-color: rgb(255, 168, 6);
        }

        .deals{
            margin: 0px 120px 50px 120px;
            padding: 50px;
            min-width:800px;
            min-height: 400px;
            overflow: auto;
            background-color: #e8e8e8;
        }

        .title{
            margin: 120px 110px 40px 110px;
            min-width:100%;
            background-color: rgb(255, 168, 6);
        }

        h1 {
            font-size: 40px;
        }

        h2 {
            font-size: 26px;
            color: #000000;
            text-decoration: underline;
            margin-left: 40px;
        }

        table img{
            width: 550px; 
            height: 300px;
            padding: 0px 50px 50px 50px;
        }

        td {
            font-size: 24px;
            padding-left: 20px;
            vertical-align: top;
            padding-top: 50px;
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
                <li style="float: right; padding-right: 60px;"><a href="logout.php">LOG OUT</a></li>
            </ol>
        </nav>
    </header>
    <div class=title>
        <h1>Welcome to the Chupa Chups Members Section, <?php echo $username; ?>!</h1> <!--add username from php-->
    </div>
    <div class=deals>
        <h2>Newest - November Deals!</h2>
        <table border="0">
	    <tr>
            <td>
                <img alt="offer[1]" src="https://cdn.greatdeals.com.sg/wp-content/uploads/2020/07/31141817/cathay-cineplex-1-for-1-tickets.jpg">
            </td>
            <td>
                <b>1-for-1 Movie Tickets With PAssion POSB Debit Card</b><br><br>
                Catching the latest blockbusters in cinemas? Here’s a 1-for-1 deal<br> for all members!<br><br>
                Available across all weekends (Sat & Sun) in November, members <br>will be able to enjoy 1-for-1 tickets at all Chupa Chups Cinemas in <br>Singapore when making payment with PAssion POSB Debit Card.
                <br>That means you pay as little as $6.50 per movie ticket.
            </td>
        </tr>
        <tr>
            <td>
                <img alt="offer[2]" src="https://www.whynotdeals.com/wp-content/uploads/2020/01/Golden-Village-Movie-Huat-Huat-EXTRA-Deal-E-Poster-e1579710952199.jpg">
            </td>
            <td>
                <b>Purchase A Second Movie Ticket At Just $8.80 Every Friday</b><br><br>
                Looking for somewhere to have a happy TGIF? Here’s a Friday offer<br> for all members!<br><br>
                Available on every Friday throughout November, members get to<br> purchase every second ticket at a lower price of $8.80 at all Chupa<br> Chups Cinemas in Singapore.
                Simply flash this page to any of our <br>counter staff during payment to enjoy this deal.
            </td>
        </tr>
        <tr>
            <td>
                <img alt="offer[3]" src="https://www.greateasternlife.com/content/dam/great-eastern/sg/homepage/upgreat-getgreat/upgreat/2020/cathay-movielicious-deals/cathay-movielicious-750x420.jpg">
            </td>
            <td>
                <b>Save Up To $35 When You Purchase Our Movie Bundle</b><br><br>
                Wish you could catch every movie on our big screens? We have<br> just the deal for you!<br><br>
                Available to all Chupa Chups members, you can now purchase a<br> bundle of five movie tickets at a lower price. Bundle tickets can be<br> used at all Chupa Chups Cinemas in Singapore.
                Grab this exclusive <br>offer now and enjoy big savings while watching your favourite movies!
            </td>
        </tr>
        </table>
        <div class="offer"></div>
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