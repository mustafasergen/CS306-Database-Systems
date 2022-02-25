<!DOCTYPE html>
<html>
<head>
    <title>INSERTION PAGE for PAYMENT</title>

 </head>
<body>


<div align="center">
<b> INSERTION </b>
<br>
<br>
<?php 

include "config.php"; 

if (!empty($_POST['cartID'])){ 
    $cartID = $_POST['cartID']; 
    $tid = $_POST['tID']; 
    $bill= $_POST['bill'];

    $sql_statement = "INSERT INTO payment(cartID, tID, bill) VALUES ($cartID, $tid, $bill)"; 

    $result = mysqli_query($db, $sql_statement);
    
    echo " CartID: " . $cartID . " - " . " tID:" . $tid . " - " . " Bill:" . $bill . "<br>" . "<br>";
    include "paymentinformation.php";
    echo "<br>" . "<br>" . "Insertion is successful.";
} 
else 
{
    echo "You did not enter your name.";
}

?>

<body>


</div>
</body>
</html>
