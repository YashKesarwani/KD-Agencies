<html>
	<head>
		<title>Register</title>
<?php
	include_once "Header.php";
	include_once "Validate.js";
?>
	<script src="jquery.min.js"></script>
	<script src="bootstrap.js"></script>
	</head>
	<body>
	<div style="width:350px; margin-top:6%;margin-left:35%;border:4px solid black;padding:15px;">
		<form action="SaveUser.php" method="POST" autocomplete="off">
			<input type="text" name="fname" placeholder="First Name" required class="form-control">
			<br>
			<input type="text" name="lname" placeholder="Last Name" required class="form-control">
			<br>
			<input type="text" name="mobile" placeholder="Mobile No." required class="form-control" onkeyup="checknum(this.value)">
			<span id="chck2"></span>
			<br>			
			<input type="email" name="email" placeholder="Email" required class="form-control" onchange="checkmmail(this.value)">
			<span id="chck1"></span>
			<br>			
			<textarea cols=42 rows=2 name="addr" placeholder="Address" class="form-control"></textarea>
			<br>			
			<input type="password" name="password" placeholder="Password" required class="form-control" onkeyup="checkpass(this.value)">
			<span id="chck0"></span>
			<br>
			<center><button class="btn btn-primary btn-medium" id="but">Register</button></center>
		</form>
	</div>
	<div style="width:350px;margin-left:35%;border-bottom:4px solid black"></div>
	<div style="margin-top:8%">
	</div>
	</body>
</html>
<?php
	include_once "Footer.php";
?>	