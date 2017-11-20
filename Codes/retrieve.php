<?php
include 'dbh2.php';
session_start();
$username = $_SESSION['username'];

$sql = "SELECT * FROM orders WHERE username='$username'";
$result =  $conn->query($sql);

if ($result->num_rows != 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $date = 'date';
        $bluequantity = 'bluequantity';
        $redquantity = 'redquantity';
        $greenquantity = 'greenquantity';
        $blackquantity = 'blackquantity';
        $brownquantity = 'brownquantity';
        $pricetotal = 'price';
        echo "<br>";
        echo "$username at $row[$date]";
        echo "<br>";
        echo "You have purchased $row[$bluequantity] blue shirt ";
        echo "<br>";
        echo "You have purchased $row[$redquantity] red shirt ";
        echo "<br>";
        echo "You have purchased $row[$greenquantity] green shirt ";
        echo "<br>";
        echo "You have purchased $row[$blackquantity] black shirt ";
        echo "<br>";
        echo "You have purchased $row[$brownquantity] brown shirt ";
        echo "<br>";
        echo "The total was $$row[$pricetotal]";
        echo "<br>";
    }
}
else {
    echo "you have not purchashed anything yet!";
}

?>

<html>
<form action="end.php" method="POST">
    <br>
    <br>
    <input type="submit" value="Logout">
</form>
</html>
