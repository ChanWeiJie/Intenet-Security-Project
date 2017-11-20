<?php
session_start();
include 'dbh.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $Username =$_POST['username'];
    $Password =$_POST['password'];
    $encrypted_password = md5($Password);
    $sql = "SELECT * FROM users WHERE username='$Username' AND password = '$encrypted_password'";
    $result = mysqli_query($conn, $sql);
    if (!$login=mysqli_fetch_assoc($result)) {
        echo "Your username or password is incorrect!";
    }
    else {
        $_SESSION['username'] = $login['username'];
        header("Location:store.php");
    }
}
?>

<html>
<body>
<h1>WELCOME TO CMGL PTD LTD</h1>    
<h1>Please log in to continue</h1>
<form action ="" method="POST">
    Username:<br>
    <input type="text" name = "username" value="" required><br>
    Password: <br>
    <input type = "password" name="password" value="" required><br><br>
    <input type="submit" value="Login"><br><br>
    </form>
<form action="signup.php" method="POST">
    New User? <input type="submit" value="Create Account">
    </form>
</body>
</html>
