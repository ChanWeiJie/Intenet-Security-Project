<?php

$conn = mysqli_connect("localhost:3307", "root", "password", "testsql");

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
?>