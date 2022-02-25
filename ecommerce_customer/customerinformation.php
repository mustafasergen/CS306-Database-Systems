<!DOCTYPE html>
<html>
<head>
    <title>Customer İnformation</title>

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
  background-color: #065a01;
}
tr:nth-child(odd) {
  background-color: #a1111b;
}
</style>

</head>
<body>

<div align="center">

    <table style="margin-top:1px; margin-right:1px;">

<tr> <th> ID </th> <th> Name </th> <th> Address </th>  <th> Email </th> <th> TelNo </th> </tr> 


<?php 

include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM customer"; 

$result = mysqli_query($db, $sql_statement); // Executing query



while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $cID = $row['cID']; 
    $customer_name = $row['name']; 
    $customer_address = $row['address']; 
    $customer_email = $row['email']; 
    $customer_telno = $row['telno']; 
    echo "<tr>" . "<th>" . $cID . "</th>" . "<th>" . $customer_name . "</th>" . "<th>" . $customer_address . "</th>" . "<th>" . $customer_email . "</th>" . "<th>" . $customer_telno . "</th>" . "</tr>";
} 

?>


</table>
</div>

</body>
</html>