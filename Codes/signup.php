<?php
session_start();
include 'dbh.php';
//echo json_encode($_POST);
if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
    $email=$_POST['email'];
    $username =$_POST['username'];
    $password =$_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    if ($signup=mysqli_fetch_assoc($result)) {
        echo "You cant sign up for the same account twice!";
    }
    elseif (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
        $email=$_POST['email'];
        $username =$_POST['username'];
        $password =$_POST['password'];
        $encrypted_password = md5($password);
        $sql = "INSERT INTO users (username,password,email) 
        VALUES ('$username','$encrypted_password', '$email')";
        $result = $conn->query($sql);//run sql command;
        header("Location:index.php");
    }
}

?>

<html>
<form action = "" method="POST">
Please Enter in your Email Address:
<input type="text" name = "email" value="" required><br>
Please Enter in an user name:
<input type="text" name = "username" value=""><br>
Please enter in a password:
<input type="password" name = "password" value="" required><br>
<input type="submit" value="Submit"><br><br>
</form>
</html>