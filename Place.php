<?php
	if(isset($_GET["det"]))
	{
		include "Connection.php";
		$det=preg_split("/,/",$_GET["det"]);
		$obj=new Order;
		$ins=$obj->move($det[0],$det[1]);
		if($ins==1)
			echo "0rder Placed";
		else
			echo "Order Failed to Place. Try Again";
	}
	else
		header("Location:Login.php");
?>