<!DOCTYPE html>
<html>
<head>
    <title>INSERTION PAGE for CUSTOMERS</title>

 </head>
<body>


<div align="center">
<b> INSERTION </b>
<br>
<br>
<?php 

include "config.php"; 

if (!empty($_POST['cID'])){ 
    $customer_ID = $_POST['cID']; 
    $customer_name = $_POST['name']; 
    $customer_address = $_POST['address']; 
    $customer_email = $_POST['email']; 
    $customer_tel_no = $_POST['telno']; 

    $sql_statement = "INSERT INTO customer(cID, name, address, email, telno) VALUES ($customer_ID, '$customer_name', '$customer_address',  '$customer_email', $customer_tel_no )"; 

    $result = mysqli_query($db, $sql_statement);
     echo " ID: " . $customer_ID . " - " . " Name:" . $customer_name . " - " . " Address:" . $customer_address . " - " . " Email:" . $customer_email . " - " . " TelNo:" . $customer_tel_no . "<br>" . "<br>";

    include "customerinformation.php";
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
