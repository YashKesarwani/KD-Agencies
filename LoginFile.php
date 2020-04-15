
<?php     
	if(isset($_POST["email"]))
	{
		session_start();
		$email=$_POST["email"];
		$pass=sha1($_POST["password"]);
		include_once "Connection.php";
		include_once "Header.php";
		$obj=new Register;
		$a=$obj->log($email,$pass);
		if($a==-1)
		{
			echo "<title>Login</title>";
			echo "<body style=\"background-color:#E8DAEF;\">";
			echo "<center><h3 style='color:red'> Login Failed.<br> Sorry for the inconvenience caused.<br></h3>";
			echo "<h4 style='color:Red'>Make sure you have registerd yourself first.</h4>";
			echo "<a href='Register.php' class='btn btn-primary'>Register</a>&nbsp";			
			echo "<a href='Login.php' class='btn btn-primary'>Login</a>";			
			echo "<br><br><br><img src='Sorry2.jpeg' style='width:500px;height:250px'></center>";
			echo "<div style='margin-top:13%'></div>";
			include_once "Footer.php";
		}	
		else 
		{
			$_SESSION["uid"]=$a;
			header("Location:index.php");
		}	
	}
	else
		header("Location:Login.php");
?>