<?php
	if(isset($_GET["pid"]))
	{
		$pid=$_GET["pid"];
		$uid=$_GET["uid"];
		$con=mysqli_connect("localhost","root","","kdagencies");
		$cmd="delete from ordermaster where pid='$pid' and uid='$uid'";
		$res=mysqli_query($con,$cmd);
		if($res)
			header("Location:index.php?task=done");
	}
	else
		header("Location:index.php");
?>