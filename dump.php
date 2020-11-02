     <!--for session 0-->
     <?php 

for ($i=0; $i < count($_SESSION['name']); $i++){
    $sql1 = 'SELECT * FROM movies where name ="' .$_SESSION['name'][$i]. '"';
    $result1 = mysqli_query($conn, $sql1);
    $movies1 = mysqli_fetch_array($result1);
    $img1 = $movies1["img"];
}
?>

    <div id="order0"> 
                <div class="poster" style="margin-top: 0px">
                    <div class="mImg">
                        <img src="<?php echo $img1 ?>" height="300px" width="200px">
                    </div>
                    <div class="mText">
                        <h1 style="margin:0;"><?php echo $_SESSION['name'][0] ?></h1><br>
                        <h3><strong>Location: </strong><?php echo $_SESSION['location'][0] ?><br><br>
                        <strong>Date: </strong><?php echo $_SESSION['date'][0] ?><br><br>
                        <strong>Time: </strong><?php echo $_SESSION['time'][0] ?><br></h3>
                    </div>
                </div>
                <div class="selectGrey">
                    <h1 style="padding:30px 0 30px 30px;">Payment </h1>
                    <div class="right">
                        <h3>Amount</h3>
                        <input type = "text" size="5" id="price1" name="price1" onfocus="this.blur();" placeholder="<?php echo $_SESSION['price'][0]?>">
                    </div>
                    <div class="right">
                        <h3>Quantity</h3>
                        <input type = "text" size="5" id="qty1" name="qty1" onfocus="this.blur();" placeholder="<?php echo $_SESSION['qty'][0]?>">
                    </div> 

                    <h3 style="width:200px; padding-left: 60px;">Seats Selected:</h3>
                    <input type = "text"  style="margin-left: 60px;" size="30" id="selectedSeats" name="selectedSeats" onfocus="this.blur();" placeholder="<?php echo $_SESSION['seats'][0]?>">

                    <br><br><br> 
                    <div class="right">
                        <span style="font-family: 'Open Sans', sans-serif;font-size: 20px;font-weight: bold; margin-right:40px;">Grand Total:  </span>
                        <input type = "text" size="5" id="price2" name="price2" onfocus="this.blur();" placeholder="<?php echo $_SESSION['price'][0]?>">
                    </div>
                    <div class="cancel">
                        <button onclick="cancelOrder('order0')" class="button">Cancel order</button>
                    </div>

                    <br><br>
                </div>
            </div>