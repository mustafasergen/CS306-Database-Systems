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
    $cartID = $_POST['ids'];
    $sql_statement = "DELETE FROM payment WHERE cartID = $cartID";
    $result = mysqli_query($db, $sql_statement);
    
}
include "paymentinformation.php";

?>

<br>
<br>
Deletion is successful
<br>
<br>

</div>
</body>
</html>