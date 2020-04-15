<?php
session_start();
?>
<html>
  <head>
    <title>Household</title>
    <script src="jquery-1.11.0.min.js"></script>
    <script src="bootstrap.js"></script>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
    <script src="jquery.min.js"></script>
<?php
	include_once "Header.php";
?>        
<link href="carousel.css" rel="stylesheet" type="text/css">
	<script>
		$(document).ready(function()
		{
			$('#list').on("focus",function()
				{
					$.post('getList.php',{'value':"Household"},function(data){
						$('#list').append(data);					
					});				
				});
		});
	</script>
	<style>
		a,a:hover
		{
			text-decoration:none;
			color:black;
			font-weight:bold;
		}
	</style>
  </head>
  <body>
        <form action="Details.php" method="POST" style="margin-left:50px;width:500px;margin-top:60px">
		    <h4>Choose product from list</h4>
			<select name="list" id="list" class="form-control" style="width:350px;font-size:16px;"required>
				<option value="" disabled selected hidden>Household Items</option>
			</select>
			<br> 
			<button class="btn btn-primary btn-medium">View Details </button>
		</form>	
	<div class="container-fluid"  style="margin-top:200px">
		<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="7000" id="myCarouselGrid">

			<div class="carouselGrid-inner">
				<div class="item active">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD101"><img src="TNT\SUMO TOWEL STAND.jpg" title="SUMO TOWEL STAND" style="width:200px;height:200px"><br>Sumo Towel Stand<br>&#8377 1620</a></div>
                </div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD102"><img src="TNT\SS SUMO.jpg"title="SS SUMO TOWEL STAND" style="width:200px;height:200px"><br>SS Sumo Towel Stand<br> 2350</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD103"><img src="TNT\MINI SUMO.jpg"title="MINI SUMO TOWEL STAND" style="width:200px;height:200px"><br>Mini Sumo Towel Stand<br>&#8377 1400</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD104"><img src="TNT\OYSTER.jpeg"title="OYESTER TOWEL STAND"style="width:200px;height:200px"><br>Oyester Towel Stand<br>&#8377 1400</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD105"><img src="TNT\WINSOME.jpg"title="WINSOME TOWEL STAND.JPG" style="width:200px;height:200px"><br>Winsome Towel Stand<br>&#8377 1410</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD106"><img src="TNT\SMART STAND.jpg"title="SMART TOWEL STAND" style="width:200px;height:200px"><br>Smart Towel Stand<br>&#8377 2225</a></div>
				</div>
    			<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD107"><img src="TNT\JUMBO.jpg"title="JUMBO TOWEL STAND" style="width:200px;height:200px"><br>Jumbo Towel Stand<br>&#8377 2225</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD108"><img src="TNT\SUPER JUMBO.JPG"title="SUPER JUMBO TOWEL STAND" style="width:200px;height:200px"><br>Super Jumbo Towel Stand<br>&#8377 3050</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD109"><img src="TNT\Cameo 2.jpeg"title="CAMEO 2 STEP LADDER" style="width:200px;height:200px"><br>Cameo 2 Step Ladder<br>&#8377 1150</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD110"><img src="TNT\Cameo 3.jpeg"title="CAMEO 3 STEP LADDER" style="width:200px;height:200px"><br>Cameo 3 Step Ladder<br>&#8377 1650</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD111"><img src="TNT\Cameo 4.jpeg"title="CAMEO 4 STEP LADDER" style="width:200px;height:200px"><br>Cameo 4 Step Ladder<br>&#8377 2100</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD112"><img src="TNT\Cameo 5.jpg"title="CAMEO 5 STEP LADDER" style="width:200px;height:200px"><br>Cameo 5 Step Ladder<br>&#8377 2650</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD113"><img src="TNT\Cameo 6.jpg"title="CAMEO 6 STEP LADDER"style="width:200px;height:200px"><br>Cameo 6 Step Ladder<br>&#8377 3300</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD115"><img src="TNT\Mapple 4.jpg"title="MAPPLE 4 STEP LADDER"style="width:200px;height:200px"><br>Mapple 4 Step Ladder<br>&#8377 2700</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD116"><img src="TNT\Mapple 5.jpg"title="MAPPLE 5 STEP LADDER"style="width:200px;height:200px"><br>Mapple 5 Step Ladder<br>&#8377 3350</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD117"><img src="TNT\Mapple 6.png"title="MAPPLE 6 STEP LADDER"style="width:200px;height:200px"><br>Mapple 6 Step Ladder<br>&#8377 3950</a></div>
				</div>
				<div class="item">
					<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD118"><img src="TNT\Mapple 7.jpg"title="MAPPLE 7 STEP LADDER"style="width:200px;height:200px"><br>Mapple 7 Step Ladder<br>&#8377 4450</a></div>
				</div>
				
			</div>
			<a class="left carouselGrid-control" href="#myCarouselGrid" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
			<a class="right carouselGrid-control" href="#myCarouselGrid" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
		</div>
	</div>
  <div class="container-fluid"  style="margin-top:210px">
  <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="7000" id="myCarouselGrid">

    <div class="carouselGrid-inner">
<div class="item active">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD119"><img src="TNT\Trendy 3.jpg"title="TRENDY RACK 3 SHELF" style="width:200px;height:200px"><br>Trendy Rack 3 Shelf<br>&#8377 850</a></div>
            </div>
            <div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD120"><img src="TNT\Trendy 4.jpg"title="TRENDY RACK 4 SHELF" style="width:200px;height:200px"><br>Trendy Rack 4 Shelf<br>&#8377 1025</a></div>
            </div>
			<div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD121"><img src="TNT\Trendy 5.jpg"title="TRENDY RACK 5 SHELF" style="width:200px;height:200px"><br>Trendy Rack 5 Shelf<br>&#8377 1200</a></div>
            </div>
			<div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD122"><img src="TNT\Trendy 6.jpg"title="TRENDY RACK 6 SHELF" style="width:200px;height:200px"><br>Trendy Rack 6 Shelf<br>&#8377 1380</a></div>
            </div>
            <div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD123"><img src="TNT\Smart 3.jpg"title="SMART RACK 3 SHELF" style="width:200px;height:200px"><br>Smart Rack 3 Shelf<br>&#8377 650</a></div>
            </div>
            <div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD124"><img src="TNT\Smart 4.jpg"title="SMART RACK 4 SHELF" style="width:200px;height:200px"><br>Smart Rack 4 Shelf<br>&#8377 780</a></div>
            </div>
			<div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD125"><img src="TNT\Smart 5.jpg"title="SMART RACK 5 SHELF" style="width:200px;height:200px"><br>Smart Rack 5 Shelf<br>&#8377 940</a></div>
            </div>
			<div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD126"><img src="TNT\Smart 6.JPG"title="SMART RACK 6 SHELF" style="width:200px;height:200px"><br>Smart Rack 3 Shelf<br>&#8377 1100</a></div>
            </div>
			<div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD127"><img src="TNT\Shoe Cabinet 3.JPG"title="SHOE CABINET 3 SHELF 21" style="width:200px;height:200px"><br>Shoe Cabinet 3 Shelf 21"<br>&#8377 3700</a></div>
            </div>
			<div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD128"><img src="TNT\Shoe Cabinet 4.JPG"title="SHOE CABINET 4 SHELF 21" style="width:200px;height:200px"><br>Shoe Cabinet 4 Shelf 21"<br>&#8377 4450</a></div>
            </div>
			<div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD129"><img src="TNT\Shoe Cabinet 5.JPG"title="SHOE CABINET 5 SHELF 21" style="width:200px;height:200px"><br>Shoe Cabinet 5 Shelf 21"<br>&#8377 5200</a></div>
            </div>
			<div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD135"><img src="TNT\DELUX.JPG"title="DELUX IRON TABLE" style="width:200px;height:200px"><br>Iron Table Deluxe<br>&#8377 1100</a></div>
            </div>
			<div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD101"><img src="TNT\REGULAR.JPG"title="REGULAR IRON TABLE" style="width:200px;height:200px"><br>Iron Table Regular 18"<br>&#8377 975</a></div>
            </div>
			<div class="item">
				<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD136"><img src="TNT\Multipurpose Table.JPG"title="MULTIPURPOSE TABLE" style="width:200px;height:200px"><br>Multipurpose Table Small<br>&#8377 690</a></div>
			</div>
			<div class="item">
				<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD138"><img src="TNT\TOP LOOK CABINET.JPG"title="TOP LOOK CABINET"style="width:200px;height:200px"><br>Top Look Cabinet<br>&#8377 1575</a></div>
			</div>
			<div class="item">
     			<div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD139"><img src="TNT\NEW LOOK CABINET.JPG"title="NEW LOOK CABINET"style="width:200px;height:200px"><br>New Look Cabinet<br>&#8377 1800</a></div>
			</div>
		            
    </div>
    <a class="left carouselGrid-control" href="#myCarouselGrid" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
    <a class="right carouselGrid-control" href="#myCarouselGrid" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
  </div>
  </div>





<script>

$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next(); // grabs the next sibling of the carouselGrid
  if (!next.length) { // if ther isn't a next
    next = $(this).siblings(':first'); // this is the first
  }
  next.children(':first-child').clone().appendTo($(this)); // put the next ones on the array
 


  for (var i=0;i<3;i++) { // THIS LOOP SPITS OUT EXTRA ITEMS TO THE CAROUSEL
    next=next.next(); 
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
  }

  
});


</script>
  </body>
<br><br>
</html>

<?php
	include_once "Footer.php";
?>