<!DOCTYPE html>
<html>
<head>
    <title>INSERTION PAGE for STORES</title>

 </head>
<body>


<div align="center">
<b> INSERTION </b>
<br>
<br>
<?php 

include "config.php"; 

if (!empty($_POST['sID'])){ 
    $store_id = $_POST['sID']; 
    $store_name = $_POST['name']; 
    $store_address = $_POST['address']; 
    $store_email= $_POST['email'];

    $sql_statement = "INSERT INTO store(sID, name, address, email) VALUES ($store_id, '$store_name', '$store_address',  '$store_email')"; 

    $result = mysqli_query($db, $sql_statement);
    echo " ID: " . $store_id . " - " . " Name:" . $store_name . " - " . " Address:" . $store_address . " - " . " Email:" . $store_email . "<br>" . "<br>";
    include "storeinformation.php";
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

