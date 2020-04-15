<?php
	if(isset($_GET["str"]))
	{
		include_once "Connection.php";
		$str=preg_split("/\,/",$_GET['str']);
		$obj=new Cart;
		$token=$obj->add($str[0],$str[1],$str[2],$str[3]);
		if($token==1)
			echo "Added to Cart";
		else
			echo "Not Added to Cart<br>".$token;
	}
	else
		header("Location:Login.php");
?>
