<?php
session_start();
	include_once "Header.php";	
	if(isset($_GET["task"]))
	{
		if($_GET["task"]=="kill")
			echo "<center><h3 style='color:green'>You Have Been Successfully Logged Out</h3></center>";
	}

?>
<html>
<head>
  <title>KD AGENCIES</title>
  <script src="jquery.min.js"></script>
  <script src="bootstrap.js"></script>
  <style>
		body
		{
			background-color:#E8DAEF;
		}
       .slide1,.slide2,.slide3,.slide4,.slide5,.slide6
			{
				
				height:400px;
				repeat:no-repeat;
				background-position:center;
				background-size:cover;
			}
			.slide1
			{
				background-image: url(1.jpg);
			}
			.slide2
			{
				background-image: url(2.jpg);
			}
			.slide3
			{
				background-image: url(3.jpeg);
			}
			.slide4
			{
				background-image: url(4.jpg);
			}
			.slide5
			{
				background-image: url(5.jpg);
			}
			.slide6
			{
				background-image: url(6.jpg);
			}
            .featured-categories
	        {
	           margin-left:80px;
			   margin-top:10px;
	        }
			.featured-categories img
	        { 
				height:200px;
				width:195px;
				padding:20px 0px;
				transition:1s;
				cursor:pointer;	 
	        }
			.featured-categories img:hover
	        {
				transform:scale(1.1);
	        }
			a,a:hover
			{
				text-decoration:none;
				color:black;
			}
    </style>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body>
 <div class="container-fluid" style="margin-top:30px;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
	  <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
				<div class="item active">
					<div class="slide1"></div>
					<div class="carousel-caption">			</div>
				</div>
				
				<div class="item">
					<div class="slide2"></div>
					<div class="carousel-caption">
					</div>
				</div>
				
				<div class="item">
					<div class="slide3"></div>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<div class="slide4"></div>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<div class="slide5"></div>
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<div class="slide6"></div>
					<div class="carousel-caption">
					</div>
				</div>
				
    </div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
	</div>
 </div> 
     
      <section class="featured-categories"> 
	  
            <div class="container-fluid">   
                <div class="row">
                    <div class="col-md-2">
                        <figure>
						    <a href="Kitchenware.php">
							<img src="A.jpg"/>
							<figcaption><b>KITCHENWARE</b></figcaption>
							</a>
						</figure>     
                    </div>
                    <div class="col-md-2">
					    <figure>
						    <a href="Household.php">
							<img src="TNT/Cameo 6.jpg">
							<figcaption><b>HOUSEHOLDS</b></figcaption>
							</a>
						</figure>     
                    </div>	
					<div class="col-md-"></div>
				    <div class="col-md-2">
					    <figure>
						    <a href="Meloware.php">
							<img src="Dinnerware.jpg">
							<figcaption><b>DINNERWARE</b></figcaption>
							</a>
						</figure>     
                    </div>	
					<div class="col-md-"></div>
                    <div class="col-md-2">
					    <figure>
						    <a href="Thermoware.php">
							<img src="AMAZE.jpeg">
							<figcaption><b>THERMOWARE</b></figcaption> 
							</a>
						</figure>	
                    </div>
					<div class="col-md-2">
					    <figure>
						    <a href="Strainers.php">
							<img src="STRAINERS.jpg">
							<figcaption><b>STRAINERS</b></figcaption>
                            </a>							
						</figure>	
                    </div>
                    				
			    </div>					
			</div>	
      </section>			

</body>
<br><br>
</html>
<?php
	include_once "Footer.php";
?>	