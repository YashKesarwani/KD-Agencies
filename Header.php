<head>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<div>
<nav class="navbar navbar-inverse navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">K.D AGENCIES</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">HOME</a></li>
      <li class="dropdown" class="active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PRODUCTS <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Kitchenware.php">KITCHENWARE</a></li>
          <li><a href="Household.php">HOUSEHOLDS</a></li>
          <li><a href="Meloware.php">MELOWARE</a></li>
		  <li><a href="Thermoware.php">THERMOWARE</a></li>
          <li><a href="Strainers.php">STRAINERS</a></li>

        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">COMPANIES <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Kitchenware.php">RITU</a></li>
          <li><a href="Household.php">TNT</a></li>
          <li><a href="Meloware.php">MEHRAN ENTERPRISES</a></li>
		  <li><a href="Thermoware.php">AASHI ENTERPRISES</a></li>
          <li><a href="Strainers.php">ATAL MAL INDUSTRIES</a></li>

        </ul>
	   </li>		
		<li><a href="Contact.php">CONTACT US</a></li>
<?php	
		if(empty($_SESSION["uid"]))
		{	
?>	
		<li><a href="Register.php">REGISTER</a></li>	
		<li><a href="Login.php">LOGIN</a></li>	
<?php	
		}
		if(!empty($_SESSION["uid"]))
		{
?>
		<li><a href="Cart.php">MY CART</a></li>
		<li><a href="Orders.php">MY ORDERS</a></li>
		<li><a href="Logout.php">LOGOUT</a></li>
<?php	
		}
?>		
    </ul>
  </div>
 
   
</nav>
</div>
<style>     
    .navbar navbar-inverse navbar
	{
		text-color:white;	
	}	
	body
	{ 
		background-color:#E8DAEF;
	}
	.carouselGrid-inner img
	{
		transition:1s;
	    cursor:pointer;	 
	}
	.carouselGrid-inner img:hover
	{
	    transform:scale(1.1);
	}
	.carouselGrid-inner h4,h5 
	{
        font-weight: bold;
        font-family: "Comic Sans MS";
        color:2B0B33;
    } 
	h3
	{
		font-family:"Cooper Black";
	}
</style>
</head>