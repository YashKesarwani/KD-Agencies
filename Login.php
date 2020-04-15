<html>
	<head>
		<title>Login</title>
<?php
	include_once "Header.php";
	include_once "Validate.js";
?>
	<script src="jquery.min.js"></script>
	<script src="bootstrap.js"></script>
	</head>
	<body>
	<div style="width:350px; margin-top:8.5%;margin-left:35%;border:4px solid black;padding:15px;">
		<form action="LoginFile.php" method="POST" autocomplete="off">
			<input type="email" name="email" placeholder="Email" required class="form-control" onchange="checkmail(this.value)">
			<span id="chck1"></span>
			<br>
			<input type="password" name="password" placeholder="Password" required class="form-control">
			<br>
			<center><button class="btn btn-primary btn-medium" style="font-weight:bold">Login</button></center>
		</form>
	</div>
	<div style="width:350px;margin-left:35%;border-bottom:4px solid black"></div>
	<div style="margin-top:19.2%">
	</div>
	</body>
<br><br>
</html>
<?php
	include_once "Footer.php";
?>	