<!DOCTYPE html>
<html>
<head>
    <title>Categorize İnformation</title>

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
  background-color: #1273f5;
}
tr:nth-child(odd) {
  background-color: #ed8c0a;
}
</style>


</head>
<body>


<div align="center">

  <table style="margin-top:1px; margin-right:1px;">

<tr> <th> ID </th> <th> Brand </th> <th> Type </th>  <th> Colours </th>  </tr> 

<?php 

include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM categorize"; 

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $categorize_ID = $row['catID']; 
    $categorize_Brand  = $row['Catbrand']; 
    $categorize_Type  = $row['Cattype']; 
    $categorize_Colours  = $row['catcolours']; 
    echo "<tr>" . "<th>" . $categorize_ID . "</th>" . "<th>" . $categorize_Brand . "</th>" . "<th>" . $categorize_Type . "</th>" . "<th>" . $categorize_Colours . "</tr>";
} 

?>

</table>
</div>

</body>
</html>