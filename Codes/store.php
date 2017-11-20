<?php
include 'dbh.php';
session_start();
$username = $_SESSION['username'];?>
<html>
<head>
<script>
function validateForm(){
    var bluevalue = document.forms["checkForm"]["quantityblue"].value;
    var redvalue = document.forms["checkForm"]["quantityred"].value;
    var greenvalue = document.forms["checkForm"]["quantitygreen"].value;
    var blackvalue = document.forms["checkForm"]["quantityblack"].value;
    var brownvalue = document.forms["checkForm"]["quantitybrown"].value;
    
console.log(bluevalue);
console.log(redvalue);
console.log(greenvalue);
console.log(blackvalue);
console.log(brownvalue);

if (bluevalue >0 || redvalue>0 || greenvalue>0 || blackvalue>0 || brownvalue>0 ) {
    return true;
}
    else{
        return false;
    }
}
</script>    
</head>
<body>
<h1> Welcome to CMGL shop, <?php echo "$username!"; ?> <br><br>OFFER!</h1>
<h1>10% discount for all orders above $100!</h1>
<h1>addtional 5% for orders repeated within 10 days!</h1>
<form name ="checkForm" action="discount.php" onsubmit="return validateForm()" method="POST" ><br><br><br>  
<h1>Categories</h1>
    <h1>T-shirts</h1>
    <h2>Blue T-shirts ($15 per piece)</h2>
    <img src="bluetshirt.jpg" width="270" height="270"/> 
    Quantity(minimum 1) <input type="number" name="quantityblue" min="0"><br>
    
    <h2>Red T-shirts ($15 per piece)</h2>
    <image src="redtshirt.jpg" width"100" hright="300"/>
    Quantity(minimum 1) <input type="number" name="quantityred" min="0"><br>
    
    <h2>Green T-shirts ($15 per piece)</h2>
    <image src="greentshirt.jpg" width"200" hright="300"/>
    Quantity(minimum 1) <input type="number" name="quantitygreen" min="0"><br>
    
    <h2>Black T-shirts ($18 per piece)</h2>
    <img src="blacktshirt.jpg" width="350" height="270"/> 
    Quantity(minimum 1) <input type="number" name="quantityblack" min="0"><br>
    
    <h2>Brown T-shirts ($16 per piece)</h2>
    <img src="brownstshirt.jpg" width="270" height="270"/> 
    Quantity(minimum 1) <input type="number" name="quantitybrown" min="0"><br><br><br>
    
    Check out? <input type="submit" value="Pay">
    </form>    
    
<form action="retrieve.php" method="POST">
    Check Previous Orders <input type="submit" value="Display">
</form>
    </body>
</html>
