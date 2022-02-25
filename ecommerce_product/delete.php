<!DOCTYPE html>
<html>
<head>
    <title>DELETE PAGE</title>

 </head>
<body>


<div align="center">
<b> DELETE </b>
<br>
<br>


<?php

include "config.php";


if(!empty($_POST['ids']))
{
    $pID = $_POST['ids'];
    $sql_statement = "DELETE FROM product WHERE pID = $pID";
    $result = mysqli_query($db, $sql_statement);
    


}
include "productinformation.php";

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