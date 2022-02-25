<!DOCTYPE html>
<html>
<head>
    <title>MAIN PAGE for CUSTOMERS</title>

<style>
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

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.button2 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  } /* Blue */

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<style type="text/css">
.form-style-9{
	max-width: 450px;

	background: #FAFAFA;
	padding: 30px;
	margin: 50px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #305A72;
}
.form-style-9 ul{
	padding:0;
	margin:0;
	list-style:none;
}
.form-style-9 ul li{
	display: block;
	margin-bottom: 10px;
	min-height: 35px;
}
.form-style-9 ul li  .field-style{
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	padding: 8px;
	outline: none;
	border: 1px solid #B0CFE0;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
	box-shadow: 0 0 5px #B0CFE0;
	border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
	width: 49%;
}
.form-style-9 ul li .field-full{
	width: 100%;
}
.form-style-9 ul li input.align-left{
	float:left;
}
.form-style-9 ul li input.align-right{
	float:right;
}
.form-style-9 ul li textarea{
	width: 100%;
	height: 100px;
}
.form-style-9 ul li input[type="button"], 
.form-style-9 ul li input[type="submit"] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover, 
.form-style-9 ul li input[type="submit"]:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
}
</style>


</head>
<body>

<div align="center">
<header class="page-header">
    <h1>Welcome to our DataBase of Customer!</h1>
</header>

<?php 
include "customerinformation.php";
?>

<form class="form-style-9" action="insertcustomer.php" method="POST" >
<ul>
<li>
    <input type="text" id="cID" name="cID" class="field-style field-full align-none" placeholder="cID" />
</li>  
<li>
    <input type="text" id="name" name="name" class="field-style field-full align-none" placeholder="Name" />
</li>
<li>
    <input type="text" id="address" name="address" class="field-style field-full align-none" placeholder="address" />
</li>
<li>
    <input type="email" id="email" name="email" class="field-style field-full align-none" placeholder="email" />
</li>
<li>
    <input type="text" id="telno" name="telno" class="field-style field-full align-none" placeholder="telno" />
</li>

<li>
<input type="submit" value="Insert" />
</li>
</ul>
</form>

</div>

<div align="left">
    <h1>For a delete click the image <a href="http://localhost/ecommerce_customer/admin.php"><img src="resim2.png" style="width:42px;height:42px;"></a></h1>
</div>

</body>
</html>