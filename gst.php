<!DOCTYPE html>
<html>
<head>
<title>TABLE CREATION</title>
</head>
<body style = "background-color:powderblue;text-align:center;">
<h1> CREATING TABLE IN MYSQL </h1>
<form action="" method="POST"  >
<h3>User : <input type="text" name="name" style="height:25px; width:160px"></h3>
<h3>Amount : <input type="text" name="amt" style="height:25px; width:160px"></h3>
<input type="submit" name="submit" value="submit" style="height:30px; width:100px">
</form>
</body>
</html>

<?php
$user=$_POST['name'];
$conn=mysqli_connect('localhost','root','');
if(!$conn)
{	
	echo "error";
}
$sql = "CREATE DATABASE intern";
$conn->query($sql);
$n=mysqli_connect('localhost','root','','intern');
if(isset($_POST['name']))
{
	$amt = $_POST['amt'];
	if($amt<=999)
	{
		$a=$amt*(2.5/100);
		$b=$amt*(2.5/100);
		$tot=$amt+$a+$b;
		
	}
	else if($amt>=1000)
	{	
		$a=$amt*(6/100);
		$b=$amt*(6/100);
		$tot=$amt+$a+$b;
	}
$query = "CREATE TABLE gst (user varchar(30),amount int (100),SGST int(250),CGST int(100),total int(100))";
$y=mysqli_query($n,$query);
$x="Insert into gst values('$user','$amt','$a','$b','$tot')";
$res=mysqli_query($n,$x);
}
?>