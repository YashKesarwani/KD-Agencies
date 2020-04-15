<html>
<head>
	<link href="../bootstrap.css" rel="stylesheet" type="text/css">
	<nav class="navbar navbar-inverse navbar">
		<div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="index.php">K.D AGENCIES</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="Orders.php" >Orders</a></li>
				<li><a href="AddProd.php" >Add Products</a></li>
<?php
				if($thispage=="Log")
					echo "<li style=\"color:red\"><a href='Logout.php'>Logout</a></li>";
?>
			</ul>
		</div>
	</nav>
</head>
</html>