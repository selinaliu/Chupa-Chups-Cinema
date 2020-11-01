<!--To be put in nowshowing.php-->
<?php //start session

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

<!--Do not need to be put in nowshowing.php-->
<html>
<head>
<title>Shopping Cart</title>
</head>
<body>
<h1>Your Shopping Cart </h1>


<a href="index.html">Home</a>
<?php
    for ($i=0; $i < count($_SESSION['name']); $i++){
        echo $_SESSION['name'][$i];
        echo $_SESSION['date'][$i];
        echo $_SESSION['time'][$i];
        echo $_SESSION['location'][$i];
        echo $_SESSION['price'][$i];
        echo $_SESSION['qty'][$i];
        echo $_SESSION['seats'][$i];
    }
?>

</body>
</html>