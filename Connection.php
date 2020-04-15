<?php
	class db
	{
		function  __construct()
		{
			if(mysqli_connect("localhost","root","","kdagencies"))
				$this->con=mysqli_connect("localhost","root","","kdagencies");
			else
				die("Could Not Connect to database:".mysqli_error($this->con));
		}
	}
	class Register extends db
	{
		function insert($fname,$lname,$mob,$email,$pass,$addr)
		{
			$sel="";
			$this->cmd="Insert into usermaster(fname,lname,mobile,email,pass,address) values('$fname','$lname','$mob','$email','$pass','$addr')";
			if(mysqli_query($this->con,$this->cmd))
			{
				$sel=1;
			}	
			else
			{
				$sel=-1;
			}	
			return $sel;
		}
		
		function log($email,$pass)
		{
			$inf="";
			$this->cmd="Select * from usermaster where email='$email' and pass='$pass'";
			$res=mysqli_query($this->con,$this->cmd);
			$row=mysqli_fetch_array($res);
			if($row[0])
				$inf=$row[0];
			else
				$inf=-1;
			return $inf;
		}
	}
	
	class Cart extends db
	{
		function add($a,$b,$c,$d)
		{
			$token="";
			$this->cmd="insert into cartmaster(qty,pid,price,uid) values('$a','$b','$c','$d')";
			if(mysqli_query($this->con,$this->cmd))
				$token=1;
			else
			{
				$token=mysqli_error($this->con);
			}	
			return $token;
		}
		
		function display($uid)
		{
			$this->cmd="Select * from cartmaster where uid='$uid'";
			$res=mysqli_query($this->con,$this->cmd);
			$arr=array();
			while($row=mysqli_fetch_array($res))
			{
				$arr[]=$row;
			}
			$array=json_encode($arr);
			//echo $array;
			return $array;
		}
		
		function item($pid)
		{
			$this->cmd="Select name,image from products where code='$pid'";
			$res2=mysqli_query($this->con,$this->cmd);
			$arr2=array();
			while($row2=mysqli_fetch_array($res2))
			{
				$arr2=$row2;
			}
			$array2=json_encode($arr2);
			return $array2;
		}
	}
	
	class Order extends db
	{
		function move($uid,$ref)
		{
			$inf="";
			$this->cmd="Select * from cartmaster where uid='$uid'";
			$res=mysqli_query($this->con,$this->cmd);
			while($row=mysqli_fetch_array($res))
			{
				$this->ins="Insert into ordermaster(pid,uid,price,qty,transid) values('$row[1]','$row[2]','$row[3]','$row[4]','$ref')";
				$query=mysqli_query($this->con,$this->ins);
			}
			$this->del="delete from cartmaster where uid='$uid'";
			if($res2=mysqli_query($this->con,$this->del))
				$inf=1;
			else
				$inf=-1;
			return $inf;
		}
		
		function display($uid)
		{
			$this->cmd="Select * from ordermaster where uid='$uid'";
			$res=mysqli_query($this->con,$this->cmd);
			$arr=array();
			while($row=mysqli_fetch_array($res))
			{
				$arr[]=$row;
			}
			$array=json_encode($arr);
			return $array;
		}
	}
	
	class Products extends db
	{
		function display()
		{
			$this->cmd="Select * from ordermaster order by uid";
			$res=mysqli_query($this->con,$this->cmd);
			$arr=array();
			while($row=mysqli_fetch_array($res))
			{
				$arr[]=$row;
			}
			$array=json_encode($arr);
			return $array;
		}
		
		function disp_user($uid)
		{
			$this->cmd2="Select fname,lname,address from usermaster where uid='$uid'";
			$res2=mysqli_query($this->con,$this->cmd2);
			$arr2=array();
			$row2=mysqli_fetch_array($res2);
			$arr2=$row2;
			$array2=json_encode($arr2);
			return $array2;
		}
	}
?>