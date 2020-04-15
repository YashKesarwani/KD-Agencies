<?php
session_start();
	if(empty($_SESSION["uid"]))
	{
		header("Location:Login.php");
	}
	$uid=$_SESSION['uid'];
	echo "<input type='hidden' id='sp1' value=".$uid.">";
	echo "<script src='jquery.min.js'></script>";
    echo "<script src='bootstrap.js'></script>";
	echo "	<title> Orders </title>";
	include_once "Header.php";
	include_once "Connection.php";
	if(isset($_GET["task"]))
	{
		if($_GET["task"]=="done")
			echo "<center><h4 style='color:green'>Order Cancelled</h4></center>";
		else if($_GET["task"]=="notdone")
			echo "<center><h4 style='color:red'>Order Cancellation Failed</h4></center>";
	}
	$obj=new Order;
	$obj2=new Cart;
	$arr=json_decode($obj->display($uid),true);
	$i=0;
	$tot=0;
	$sum=0;

	foreach($arr as $key=>$value)
	{
		echo "<div class='container-fluid'>";
			echo "<div class='jumbotron'>";
			echo "Item ID:<input type='text' value='".$value[1]."' class='form-control' style='width:300px;' readonly><br>";
			$det=json_decode($obj2->item($value[1]),true);
			//echo $det[0];
			
			echo "<img src='".$det[1]."' style='width:300px;height:300px;float:right'/>";
			echo "Name: <input type='text' value='".$det[0]."' class='form-control' style='width:300px' readonly><br>";
			echo "Cost: <input type='text' value='".$value[3]."' class='form-control' style='width:300px;' readonly><br>";
			echo "Quantity: <input type='text' value='".$value[4]."' class='form-control' style='width:300px;' readonly><br>";
			
			$sum=$value[3]*$value[4];
			echo "Total Cost: <input type='text' value='".$sum."' class='form-control' style='width:300px;' readonly><br>";
			echo "<a href='DelOrder.php?oid=$value[0]' class='btn btn-danger'>Cancel</a>";
			$tot=$tot+$sum;
			$i++;
			echo "</div>";
		echo "</div>";
	}
	echo "<div class='container'>";
		echo "<div class='jumbotron'>";
		echo "<h4 style='font-weight:bold;font-style:arial'>Total Amount:  ".$tot."</h4>";
		if($i>0)
			echo "<h4 style='font-weight:bold;font-style:arial'>Your Order Will Be Delivered Shortly, As Soon As We Recieve Payment";
		else
			echo "<h4 style='font-weight:bold;font-style:arial'>Place Some Order And We Will Deliver It Shortly";
?>
				
			</div>
		</div>	