<!DOCTYPE html>
<html>
<head>
    <title>INSERTION PAGE for CATEGORİZE</title>

 </head>
<body>


<div align="center">
<b> INSERTION </b>
<br>
<br>
<?php 

include "config.php"; 

if (!empty($_POST['catID'])){ 
    $categorize_ID = $_POST['catID']; 
    $categorize_Brand = $_POST['Catbrand']; 
    $categorize_Type = $_POST['Cattype']; 
    $categorize_Colours = $_POST['catcolours']; 


    $sql_statement = "INSERT INTO categorize(catID, Catbrand, Cattype, catcolours) VALUES ($categorize_ID, '$categorize_Brand', '$categorize_Type',  '$categorize_Colours')"; 

    $result = mysqli_query($db, $sql_statement);
    echo " ID: " . $categorize_ID . " - " . " Brand:" . $categorize_Brand . " - " . " Type:" . $categorize_Type . " - " . " Colours:" . $categorize_Colours  . "<br>" . "<br>";
    include "categorizeinformation.php";
    echo "<br>" . "<br>" . "Insertion is successful.";
} 
else 
{
    echo "You did not enter your name.";
}

?>

<body>

</div>
</body>
</html>
