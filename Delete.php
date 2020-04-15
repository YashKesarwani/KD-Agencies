<?php
	$con=mysqli_connect("localhost","root","","kdagencies");
	$id=$_GET["id"];
	$del="delete from cartmaster where id='$id'";
	$query=mysqli_query($con,$del);
	if($query)
	{
		header("Location:Cart.php?task=done");
	}
	else
	{
		header("Location:Cart.php?task=notdone");
	}
?>