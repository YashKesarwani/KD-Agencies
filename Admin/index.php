<?php
session_start();
	if(empty($_SESSION["admin"]))
	{   
	    $thispage="Home";
	    include_once "Header.php";
?>
<title> Admin Login</title>
<body style="background-color:#E8DAEF">
	<div class="container-fluid">
		<div style="width:350px; margin-top:8.5%;margin-left:30%;border:4px solid black;padding:15px;">
			<form action="LoginAdmin.php" method="POST" autocomplete="off">
				<input type="text" name="name" placeholder="Admin Name" required class="form-control">
				<br>
				<input type="password" name="password" placeholder="Password" required class="form-control">
				<br>
				<center><button class="btn btn-primary btn-medium" style="font-weight:bold">Login</button></center>
			</form>
		</div>
	</div>
<?php
	}
	else
	{
		header("Location:Orders.php");
	}
?>
	<div style="margin-top:21.5%"></div>
</body>
<?php
	include_once "../Footer.php";
?>