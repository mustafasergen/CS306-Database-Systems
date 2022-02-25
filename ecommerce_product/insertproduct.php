<!DOCTYPE html>
<html>
<head>
    <title>INSERTION PAGE for PRODUCTS</title>

 </head>
<body>


<div align="center">
<b> INSERTION </b>
<br>
<br>
<?php 

include "config.php"; 


if (!empty($_POST['pID'])){ 
    $product_id = $_POST['pID']; 
    $product_name = $_POST['name']; 
    $product_price = $_POST['price']; 
    $product_stocksize = $_POST['stocksize']; 
    $product_stockstatus = $_POST['stockstatus']; 

    $sql_statement = "INSERT INTO product(pID, name, price, stocksize, stockstatus) VALUES ($product_id, '$product_name', $product_price,  $product_stocksize, '$product_stockstatus' )"; 

    $result = mysqli_query($db, $sql_statement);
    echo " ID: " . $product_id . " - " . " Name:" . $product_name . " - " . " Price:" . $product_price . " - " . " StockSize:" . $product_stocksize . " - " . " StockStatus:" . $product_stockstatus . "<br>" . "<br>";
    include "productinformation.php";

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
