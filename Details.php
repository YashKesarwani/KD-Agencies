<?php
session_start();
if(empty($_SESSION["uid"]))
{
	header("Location:Login.php");
}
?>
<body style="background-color:#E8DAEF">
<head>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.js"></script>
	<script>
		function sub()
		{
			var a=document.getElementById("qty").value;
			var b=document.getElementById("pid").value;
			var c=document.getElementById("price").value;
			var d=document.getElementById("uid").value;
			var str=a+","+b+","+c+","+d;
			var v=new XMLHttpRequest();
			v.open("GET","pick.php?str="+str,true);
			v.send();
			v.onreadystatechange=function test()
			{
				if(v.readyState==4)
					document.getElementById("sp").innerHTML=v.responseText;
			}
		}
	</script>
	<style>
		#sp
		{
			font-size:25px;
			-webkit-animation-name:anim1;
			-webkit-animation-duration:4s;
			-webkit-animation-iteration-count:infinite;			
		}
		@-webkit-keyframes anim1
		{
			35%{color:green}
			70%{color:blue}
			100%{color:green}
		}
	</style>
</head>
<?php
	include_once "Header.php";
	$con=mysqli_connect("localhost","root","","kdagencies");
	$pid="";
	$price="";
	if(isset($_POST["list"]))
	{
		$var=$_POST["list"];
		$a="Select * from products where NAME='$var'";
		$b=mysqli_query($con,$a);
		echo "<table border=2 style=\"margin-top:30px;width:100%;text-align:center\">";
		echo "<tr>";
		echo "<th>IMAGE</th>";
		echo "<th>Name</th>";
		echo "<th>Code</th>";
		echo "<th>Price</th>";
		echo "<th>Brand</th>";
		echo "<th>Packaging Type</th>";
		echo "<th>Material</th>";
		echo "<th>Size</th>";
		echo "<th>Height</th>";
		echo "<th>Width</th>";
		echo "</tr>";
		while($r=mysqli_fetch_array($b))
		{
			echo "<tr>";
			echo "<td><img src='".$r[12]."' style=\"width:200px;height:200px;\"/></td>";
			echo "<td>".$r[0]."</td>";
			echo "<td>".$r[1]."</td>";
			echo "<td>".$r[2]."</td>";
			echo "<td>".$r[3]."</td>";
			echo "<td>".$r[5]."</td>";
			echo "<td>".$r[6]."</td>";
			echo "<td>".$r[8]."</td>";
			echo "<td>".$r[9]."</td>";
			echo "<td>".$r[10]."</td>";
			$pid=$r[1];
			$price=$r[2];
			echo "</tr>";
		}		
		echo "</table>";
	}
	else if(isset($_GET["pid"]))
	{
		$name=$_GET["pid"];
		$a="Select * from products where code='$name'";
		$b=mysqli_query($con,$a);
		echo "<table border=2 style=\"margin-top:30px;width:100%;text-align:center\">";
		echo "<tr>";
		echo "<th>IMAGE</th>";
		echo "<th>Name</th>";
		echo "<th>Code</th>";
		echo "<th>Price</th>";
		echo "<th>Brand</th>";
		echo "<th>Packaging Type</th>";
		echo "<th>Material</th>";
		echo "<th>Size</th>";
		echo "<th>Height</th>";
		echo "<th>Width</th></tr>";
		$r=mysqli_fetch_array($b);
		echo "<tr>";
		echo "<td><img src='".$r[12]."' style=\"width:200px;height:200px;\"/></td>";
		echo "<td>".$r[0]."</td>";
		echo "<td>".$r[1]."</td>";
		echo "<td>".$r[2]."</td>";
		echo "<td>".$r[3]."</td>";
		echo "<td>".$r[5]."</td>";
		echo "<td>".$r[6]."</td>";
		echo "<td>".$r[8]."</td>";
		echo "<td>".$r[9]."</td>";
		echo "<td>".$r[10]."</td>";
		echo "</tr></table>";
		$pid=$r[1];
		$price=$r[2];
	}
	echo "<input type=\"hidden\" id='pid' value=".$pid.">";
	echo "<input type=\"hidden\" id='price' value=".$price.">";
	if(isset($_SESSION["uid"]))
		echo "<input type=\"hidden\" id='uid' value=".$_SESSION["uid"].">";
	
  ?>
<?php 
	if(!empty($_SESSION["uid"]))
	{
?>	
	<div style="margin-left:8px;">
		<h4>Quantity</h4>	
		<input type="number" name="qty" id="qty" placeholder="Quantity" value="1" required>
		<button type="button" class="btn btn-success" onclick="sub()">Add to Cart</button>
		<br><span id="sp"></span>
	</div>	
<?php 
	}
	echo "<div style='margin-top:21%'></div>";
	include_once "Footer.php";
?> 