<?php
include 'dbh3.php';
if (isset($_POST['userNAME']) && isset($_POST['passWORD'])) {
    $sql2 = 'SELECT * FROM people WHERE username ="' .$_POST['userNAME'].'" AND password ="' .$_POST['passWORD']. '"';
    $result = mysqli_query($conn, $sql2);
    if ($pass=mysqli_fetch_assoc($result)) {
        echo "Logged in";

    }
    else {
        echo "Your username or password is incorrect!";


    }
}

?>
