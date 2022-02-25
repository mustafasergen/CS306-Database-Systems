<!DOCTYPE html>
<html>
<head>
    <title>DELETE PAGE</title>

 </head>
<body>


<div align="center">
<b> Delete </b>
<br>
<br>

<?php

include "config.php";

if(!empty($_POST['ids']))
{
    $cID = $_POST['ids'];
    $sql_statement = "DELETE FROM customer WHERE cID = $cID";
    $result = mysqli_query($db, $sql_statement);
}
include "customerinformation.php";


?>

<body>

<br>
<br>
Deletion is successful
<br>
<br>

</div>
</body>
</html>