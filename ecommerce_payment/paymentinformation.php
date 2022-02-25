<!DOCTYPE html>
<html>
<head>
    <title>Payment İnformation</title>

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
  background-color: #604c02;
}
tr:nth-child(odd) {
  background-color: #9fb3fd;
}
</style>

</head>
<body>

<div align="center">

    <table style="margin-top:1px; margin-right:1px;">

<tr> <th> CartID </th> <th> tID </th> <th> Bill </th> </tr> 


<?php 

include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM payment"; 

$result = mysqli_query($db, $sql_statement); // Executing query


while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $cartID = $row['cartID']; 
    $tid = $row['tID']; 
    $bill= $row['bill'];
    echo "<tr>" . "<th>" . $cartID . "</th>" . "<th>" . $tid . "</th>" . "<th>" . $bill . "</tr>";
} 

?>


</table>
</div>

</body>
</html>