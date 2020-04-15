<style>
	#grow
	{
		-webkit-animation-name:anim1;
		-webkit-animation-duration:10s;
		-webkit-animation-iteration-count:infinite;
		
	}
	@-webkit-keyframes anim1
	{
		10%{transform:scale(1.3,1.1);color:red}
		20%{transform:scale(1,1);color:blue}
		30%{transform:scale(1.3,1.1);color:green}
		40%{transform:scale(1,1);color:#fc6203}
		50%{transform:scale(1.3,1.1);color:red}
		60%{transform:scale(1,1);color:blue}
		70%{transform:scale(1.3,1.1);color:green}
		80%{transform:scale(1.3,1.1);color:red}
		90%{transform:scale(1,1);color:blue}
		100%{transform:scale(1.3,1.1);color:green}
	}
</style>
<title>Register</title>
<?php
	if(isset($_POST["fname"]))
	{
		$fnam=$_POST["fname"];
		$fname=filter_var($fnam,FILTER_SANITIZE_SPECIAL_CHARS);
		$lnam=$_POST["lname"];
		$lname=filter_var($lnam,FILTER_SANITIZE_SPECIAL_CHARS);
		$mobile=$_POST["mobile"];
		$mail=$_POST["email"];
		$email=filter_var($mail,FILTER_SANITIZE_EMAIL);
		$pass=sha1($_POST["password"]);
		$add=$_POST["addr"];
		$addr=filter_var($add,FILTER_SANITIZE_SPECIAL_CHARS);
		include_once "Connection.php";
		include_once "Header.php";
		echo "<script src=\"jquery.min.js\"></script>";
		echo "<script src=\"bootstrap.js\"></script>";
		$obj=new Register;
		$sel=$obj->insert($fname,$lname,$mobile,$email,$pass,$addr);
		if($sel==1)
		{
			echo "<center><h3 style='color:Green'>Now you are registered in our site.</h3>";
			echo "<br><h3 id='grow' style='color:Green'>Happy Shopping!!!!<br>Login to our website and shop from the vivid range of products.</h3>";
			echo "<a href='Login.php' class='btn btn-primary'>Login</a>";			
			echo "<br><br><br><img src='3.jpeg' style='width:500px;height:250px'></center>";
		}
		else if($sel==-1)
		{
			echo "<center><h3 style='color:Red'>Sorry for the inconvenience caused. Please try again after some time.</h3>";
			echo "<br><h3 id='grow' style='color:Green'><br>Register to our website and shop from the vivid range of products.</h3>";
			echo "<a href='Register.php' class='btn btn-primary'>Register</a></center>";			
			echo "<br><br><br><img src='Sorry2.jpeg' style='width:500px;height:250px'>";
			//echo mysqli_error($this->con);
		}
	}
	else
		header("Location:Register.php");
?>
<br>
<div style="margin-top:29.3%"></div>
<?php
	include_once "Footer.php";
?>