
<!DOCTYPE html>
<html>
<head>
    <title>DELETE PAGE for PRODUCTS</title>

 </head>
<body>
<style>
.button
{
	background: linear-gradient(to bottom, green 5%, green 100%);
	background-color: green;
    padding: 10px 15px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
header.page-header {
    background: no-repeat left/cover url(resim1.jpeg);
    display: flex;
    height: 120px;
    min-width: 120px;
    align-items: center;
    color: white;
}

header.page-header > h1 {
    font: bold calc(1em + 2 * (100vw - 120px) / 100) 'Dancing Script', cursive,
        fantasy;
    margin: 2%;
}

main {
    font: 1rem 'Fira Sans', sans-serif;
}
</style>
<div align="center">
<header class="page-header">
    <h1>Delete Products</h1>
    <br>If there is a row you want to delete, select it and click delete<br>
</header>



<?php 

include "config.php";
include "productinformation.php";

?>

<form action="delete.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT pID, name, price, stocksize, stockstatus FROM product";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $pID = $id_rows['pID'];
        $name = $id_rows['name'];
        $price = $id_rows['price'];
        $stocksize = $id_rows['stocksize'];
        $stockstatus = $id_rows['stockstatus'];
        echo "<option value=$pID>". $pID. " - " . $name . " - " . $price . "</option>";
    }

?>

</select>
    <input type="submit" value="Delete" class="button"/>
</form>


</div>
</body>
</html>