<?php
session_start();
$thispage="Log";
	if(empty($_SESSION["admin"]))
	{
		header("Location:index.php");
	}
	include_once "../Connection.php";
	include_once "Header.php";
	echo "<title>Orders</title>";
	echo "<body style=\"background-color:#E8DAEF\">";
	$obj=new Products;
	$res=json_decode($obj->display(),true);
	echo "<table border=2 class='table-striped'>";
	echo "<tr>";
	echo "<th>Product Code</th>";
	echo "<th>Product Name</th>";
	echo "<th>Price per Piece</th>";
	echo "<th>Quantity</th>";
	echo "<th>Total Sum</th>";
	echo "<th>User Name</th>";
	echo "<th>Delivery Address</th>";
	echo "<th>Operation</th>";
	echo "</tr>";
	$obj2=new Cart;
	foreach($res as $key=>$value)
	{
		$det=json_decode($obj2->item($value[1]),true);
		echo "<tr>";
		echo "<td>".$value[1]."</td>";
		echo "<td>".$det[0]."</td>";
		echo "<td>".$value[3]."</td>";
		echo "<td>".$value[4]."</td>";
		$sum=$value[3]*$value[4];
		echo "<td>".$sum."</td>";
		$user=json_decode($obj->disp_user($value[2]),true);
		echo "<td>".$user[0]." ".$user[1]."</td>";
		echo "<td>".$user[2]."</td>";
		//echo "<td>".$value[2]."</td>";
		echo "<td><a href='Complete.php?pid=$value[1]&uid=$value[2]' class='btn btn-success btn-small'>Order Complete</a></td>";
		echo "</tr>";
	}
	echo "</table>";
	if(isset($_GET["task"]))
		echo "Order Removed";
?>