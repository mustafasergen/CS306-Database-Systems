<!DOCTYPE html>
<html>
<head>
    <title>Store İnformation</title>

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
  background-color: #920d76;
}
tr:nth-child(odd) {
  background-color: #6df289;
}
</style>

</head>
<body>


<div align="center">

    <table style="margin-top:1px; margin-right:1px;">

<tr> <th> ID </th> <th> Name </th> <th> Address </th>  <th> Email </th> </tr> 


<?php 

include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM store"; 

$result = mysqli_query($db, $sql_statement); // Executing query


while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $store_id = $row['sID']; 
    $store_name = $row['name']; 
    $store_address = $row['address']; 
    $store_email = $row['email']; 
    echo "<tr>" . "<th>" . $store_id . "</th>" . "<th>" . $store_name . "</th>" . "<th>" . $store_address . "</th>" . "<th>" . $store_email . "</th>" . "</tr>";
} 

?>


</table>
</div>

</body>
</html>