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
    $catID = $_POST['ids'];
    $sql_statement = "DELETE FROM categorize WHERE catID = $catID";
    $result = mysqli_query($db, $sql_statement);

}
include "categorizeinformation.php";
?>

<br>
<br>
Deletion is successful
<br>
<br>

</div>
</body>
</html>