
<!DOCTYPE html>
<html>
<head>
    <title>DELETE PAGE for CUSTOMERS</title>

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

<<div align="center">
<header class="page-header">
    <h1>Delete Customer</h1>
    <br>If there is a row you want to delete, select it and click delete<br>
</header>

<?php 

include "config.php";
include "customerinformation.php";

?>

<form action="delete.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT cID, name, address , email, telno FROM customer";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $cID = $id_rows['cID'];
        $customer_name = $id_rows['name'];
        $customer_address = $id_rows['address'];
        $customer_email = $id_rows['email'];
        $customer_tel_no = $id_rows['telno'];
        echo "<option value=$cID>". $cID . " - " . $customer_name . " - " . $customer_address . " - " . $customer_email . "</option>";
    }

?>

</select>
    <input type="submit" value="Delete" class="button"/>
</form>


</div>
</body>
</html>