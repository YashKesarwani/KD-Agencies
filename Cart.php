<?php
	session_start();
	if(empty($_SESSION["uid"]))
	{
		header("Location:Login.php");
	}
?>
<body style="background-color:#E8DAEF;">
<script src="jquery.min.js"></script>
<script src="bootstrap.js"></script>
<title> Cart </title>

<script>
    function f2()
	{
		var x = document.getElementById("cb").checked;
		if(x==true)
		{	
			var ref=prompt("Pay the bill by Phone Pe /Paytm / Google Pay on Mob:9336362119\n Enter Transaction ID/Reference no.");
			if(ref==null || ref=="")
			{
				document.getElementById("sp2").innerHTML="Order failed to be placed. Try again!";
				return;
			}	
			var uid=document.getElementById("sp1").value;
			var a=new XMLHttpRequest();
			var det=uid+","+ref;
			a.open("GET","Place.php?det="+det,true);
			a.send();
			a.onreadystatechange=function test()
			{
				if(a.readyState==4)
				{
					document.location.reload();
					alert(a.responseText);
				}	
			}
		}
		else
			document.getElementById("sp").innerHTML="We Currently Don't Deliver Outside Allahabad";
	}
</script>

<?php
	$uid=$_SESSION['uid'];
	echo "<input type='hidden' id='sp1' value=".$uid.">";
	include_once "Header.php";
	include_once "Connection.php";
	if(isset($_GET["task"]))
	{
		if($_GET["task"]=="done")
			echo "<center><h4 style='color:green'>Item Removed from Cart</h4></center>";
		else if($_GET["task"]=="notdone")
			echo "<center><h4 style='color:red'>Item Removal from Cart Failed</h4></center>";
	}
	$obj=new Cart;
	//$obj->display($uid);
	$arr=json_decode($obj->display($uid),true);
	$i=0;
	$tot=0;
	$sum=0;

	foreach($arr as $key=>$value)
	{
		echo "<div class='container-fluid'>";
			echo "<div class='jumbotron'>";
			echo "Item ID:<input type='text' value='".$value[1]."' class='form-control' style='width:300px;' readonly><br>";
			$det=json_decode($obj->item($value[1]),true);
			//echo $det[0];
			
			echo "<img src='".$det[1]."' style='width:300px;height:300px;float:right'/>";
			echo "Name: <input type='text' value='".$det[0]."' class='form-control' style='width:300px' readonly><br>";
			echo "Cost: <input type='text' value='".$value[3]."' class='form-control' style='width:300px;' readonly><br>";
			echo "Quantity: <input type='text' value='".$value[4]."' class='form-control' style='width:300px;' readonly><br>";
			
			$sum=$value[3]*$value[4];
			echo "Total Cost: <input type='text' value='".$sum."' class='form-control' style='width:300px;' readonly><br>";
			
			echo "<a href=\"Delete.php?id=$value[0]\" class=\"btn btn-danger\">Delete</a><br>";
			$tot=$tot+$sum;
			$i++;
			echo "</div>";
		echo "</div>";
	}
	echo "<div class='container'>";
		echo "<div class='jumbotron'>";
		echo "<h4  style='font-weight:bold;font-style:arial'>Types of Items Selected: ".$i."</h4>";
		echo "<h4 style='font-weight:bold;font-style:arial'>Total Amount: &#8377 ".$tot."</h4>";
		if($tot>0)
		{
			echo "<h4  style='font-weight:bold;font-style:arial'>Delivery charge: &#8377 79 </h4>";
			$amt=$tot+79;
			echo "<h4  style='font-weight:bold;font-style:arial'>Total Payable Amount: &#8377 ".$amt."</h4>";
		}
		else
		{
			echo "<h4  style='font-weight:bold;font-style:arial'>Total Payable Amount: &#8377 ".$tot."</h4>";
		}
		if($i>0 && $amt>500)
		{
?>
			<input type='checkbox' id='cb' name='cb'>Delivery place is in Allahabad<br>
			<center><button onclick="f2()" class="btn btn-success btn-medium">Place Order</button></center>
<?php	
		}
		else if($i>0 && $amt<500)
		{
			echo "<input type='checkbox' id='cb' name='cb' disabled>Delivery place is in Allahabad<br>";
			echo "<center><button class='btn btn-success btn-medium' disabled >Place Order</button></center>";
			echo "<h5>Total Payable Amount Should Be Greater Than 499<br>";
		}
		else
		{
			echo "<input type='checkbox' id='cb' name='cb' disabled>Delivery place is in Allahabad<br>";
			echo "<center><button class='btn btn-success btn-medium' disabled >Place Order</button></center>";
		}	
?>		
				<span id="sp"></span>
				<span id="sp2"></span>
			</div>
		</div>	