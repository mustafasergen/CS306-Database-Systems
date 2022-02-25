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
    $sID = $_POST['ids'];
    $sql_statement = "DELETE FROM store WHERE sID = $sID";
    $result = mysqli_query($db, $sql_statement);

}
include "storeinformation.php";

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