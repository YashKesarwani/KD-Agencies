<?php
session_start(); 
 if(isset($_POST["name"]))
 {
	$name=$_POST["name"];
	$pass=sha1($_POST["password"]);

	$con=mysqli_connect("localhost","root","","kdagencies");
	$cmd="select * from admin where name='$name' and  pass='$pass'";
	$rst=mysqli_query($con,$cmd);
	$row=mysqli_fetch_array($rst);
	if($row==0)
	{
		echo "Invalid user" ;
	}
	else 
	{
		$_SESSION["admin"]=$name;
		header("Location:Orders.php?name=$name");
	}
 }		
 else
 {
	header("Location:index.php");
 }	
?>

