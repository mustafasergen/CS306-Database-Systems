<!DOCTYPE html>
<html>
<head>
    <title>Product İnformation</title>

<style>
table {
  font-family: italic, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 10px solid #dddddd;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: orange;
}
tr:nth-child(odd) {
  background-color: brown;
}
</style>

</head>
<body>



<div align="center">

    <table style="margin-top:1px; margin-right:1px;">

<tr> <th> ID </th> <th> Name </th> <th> Price </th>  <th> Stocksize </th> <th> Stockstatus </th> </tr> 


<?php 

include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM product"; 

$result = mysqli_query($db, $sql_statement); // Executing query


while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $product_id = $row['pID']; 
    $product_name = $row['name']; 
    $product_price = $row['price']; 
    $product_stocksize = $row['stocksize']; 
    $product_stockstatus = $row['stockstatus']; 
    echo "<tr>" . "<th>" . $product_id . "</th>" . "<th>" . $product_name . "</th>" . "<th>" . $product_price . "</th>" . "<th>" . $product_stocksize . "</th>" . "<th>" . $product_stockstatus . "</th>" . "</tr>";
} 

?>


</table>
</div>

</body>
</html>
