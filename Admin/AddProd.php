<?php
session_start();
$thispage="Log";
	if(empty($_SESSION["admin"]))
	{
		header("Location:index.php");
	}
	include_once "../Connection.php";
	include_once "Header.php";
?>
<html>
	<head>
		<title>Add Products</title>
	</head>
	<body style="background-color:#E8DAEF">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
			<form action="Product.php" method="POST" enctype="multipart/form-data">
				<input type="text" name="pname" placeholder="Product Name" required class="form-control">
				<br>
				<input type="text" name="pcode" placeholder="Product Code" required class="form-control">
				<br>
				<input type="int" name="price" placeholder="Product Price" required class="form-control">
				<br>
				<input type="text" name="brand" placeholder="Product Brand" required class="form-control">
				<br>
				<input type="int" name="pqty" placeholder="Product Quantity" required class="form-control">
				<br>
				<input type="text" name="pptype" placeholder="Packaging Type" required class="form-control">
				<br>
				<input type="text" name="pmat" placeholder="Product Material" class="form-control">
				<br>
				<input type="text" name="color" placeholder="Product Color" class="form-control">
				<br>
				<input type="text" name="size" placeholder="Product Size" class="form-control">
				<br>
				<input type="text" name="height" placeholder="Product Height" class="form-control">
				<br>
				<input type="text" name="type" placeholder="Product Type" required class="form-control">
				<br>
				<input type="file" name="apic" class="form-control">
				<br>
				<button class="btn btn-primary btn-medium">Add</button>
			</form>
		</div>
	</body>