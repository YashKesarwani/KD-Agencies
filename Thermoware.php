<?php
session_start();
?>
<html>
	<head>
		<title>Thermoware</title>
		<script src="jquery-1.11.0.min.js"></script>
		<script src="bootstrap.js"></script>
		<link rel="stylesheet" href="bootstrap.css">
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
					$.post('getList.php',{'value':"Thermoware"},function(data){
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
		<form action="Details.php" method="POST" style="margin-left:50px;width:500px;margin-top:60px;">
		   <h4>Choose product from list</h4>
			<select name="list" id="list" class="form-control" style="width:350px;font-size:16px;" required>
				<option value="" disabled selected hidden>Thermoware Items</option>
			</select>
			<br> 
			<button class="btn btn-primary btn-medium">View Details </button>
		</form>	



<div class="container-fluid" style="margin-top:150px">
	<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="7000" id="myCarouselGrid">
		<div class="carouselGrid-inner">
			<div class="item active">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD101"><img src="KWALITY\CONA 12.jpg"title="CONA 12" style="width:200px;height:200px"><br>Insulated Water Jug CONA 12<br>&#8377 1620</a></div>     
			</div>
            <div class="item">
                 <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD101"><img src="KWALITY\CONA 18.jpg"title="CONA 18" style="width:200px;height:200px"><br>Insulated Water Jug CONA 18<br>&#8377 1620</a></div>
            </div>
			<div class="item">
                 <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD101"><img src="KWALITY\COOLER 18.jpg"title="COOLER 18" style="width:200px;height:200px"><br>Insulated Water Jug COOLER 18<br>&#8377 1620</a></div>
            </div>
			<div class="item">
                 <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD101"><img src="KWALITY\AMAZE 10.jpeg"title="AMAZE 10" style="width:200px;height:200px"><br>Hot/Cool Steel Jug Jug AMAZE 10<br>&#8377 1620</a></div>
            </div>
			<div class="item">
                 <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD101"><img src="KWALITY\MOJO 4.jpg"title="MOJO 4" style="width:200px;height:200px"><br>MOJO 4 <br>&#8377 360</a></div>
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