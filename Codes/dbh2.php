<?php

$conn = mysqli_connect("localhost:3307", "root", "password", "orders");

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
?>