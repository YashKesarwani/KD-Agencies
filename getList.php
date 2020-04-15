<?php
	$val=$_POST["value"];
	$con=mysqli_connect("localhost","root","","kdagencies");
	$cmd="Select * from products where type='$val'";
	$query=mysqli_query($con,$cmd);
	while($row=mysqli_fetch_array($query))
	{
		echo "<option value='$row[0]'>".$row[0]."</option>";
	}
?>