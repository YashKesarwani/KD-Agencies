<?php
	$con=mysqli_connect("localhost","root","","kdagencies");
	$oid=$_GET["oid"];
	$del="delete from ordermaster where id='$oid'";
	$query=mysqli_query($con,$del);
	if($query)
	{
		header("Location:Orders.php?task=done");
	}
	else
	{
		header("Location:Orders.php?task=notdone");
	}
?>