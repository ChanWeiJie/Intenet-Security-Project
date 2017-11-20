<?php
session_start();
include 'dbh2.php';
$cookielife = 864000;
$date = date_default_timezone_set("Asia/Singapore");
$date = date("Y-m-d H:i:s");
$username = $_SESSION['username'];

if (!isset($_COOKIE['datecookie'])) {
    $datecookie = date("Y-m-d");
    setcookie("datecookie", $datecookie, time()+$cookielife);// cookie will expire in 10days
    $olddatecookie = strtotime($datecookie);
}
else {
    $datecookie = $_COOKIE['datecookie'];
    $olddatecookie = strtotime($_COOKIE['datecookie']);
}

$bluequantity = $_POST['quantityblue'];
$redquantity = $_POST['quantityred'];
$greenquantity = $_POST['quantitygreen'];
$blackquantity = $_POST['quantityblack'];
$brownquantity = $_POST['quantitybrown'];
$discount = 0;
$total = (15 *$bluequantity)+(15 * $redquantity)+(15 * $greenquantity)+(18 * $blackquantity)+(16 * $brownquantity);

$checking = "SELECT * FROM orders WHERE username ='$username'";
$resultofchecking = $conn->query($checking);

if ($total >= 100) {
    $discount = 0.10;
    if ($total >= 100 && ($datacheck=mysqli_fetch_assoc($resultofchecking))) {
        $discount = 0.15;
 }
}
//echo $discount;
$total = $total * (1-$discount);
echo "Thank you! For your Purchase, your total is: $$total";

if (isset($_SESSION['username'])) {
    $bluequantity = $_POST['quantityblue'];
    $redquantity = $_POST['quantityred'];
    $greenquantity = $_POST['quantitygreen'];
    $blackquantity = $_POST['quantityblack'];
    $brownquantity = $_POST['quantitybrown'];
    $username = $_SESSION['username'];
    $totalprice = $total;
    $sql = "INSERT INTO orders (username,date,bluequantity,redquantity,greenquantity,blackquantity,brownquantity,price) 
    VALUES ('$username','$date','$bluequantity', '$redquantity','$greenquantity','$blackquantity',
    '$brownquantity','$totalprice')";
    $result = $conn->query($sql);//run sql command;
}
?>

<html>
<form action="end.php" method="POST">
    <br>
    <br>
    <input type="submit" value="Logout">
</form>
</html>



