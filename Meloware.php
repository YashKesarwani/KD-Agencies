<?php
session_start();
?>
<html>
  <head>
    <title>Meloware</title>
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
					$.post('getList.php',{'value':"Meloware"},function(data){
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
        <form action="Details.php" method="POST" style="margin-left:50px;width:500px;margin-top:60px">
		    <h4>Choose product from list</h4>
			<select name="list" id="list" class="form-control" style="width:350px;font-size:16px;" required>
				<option value="" disabled selected hidden>Dinner Set</option>
			</select>
			<br>  
		    <button class="btn btn-primary btn-medium">View Details</button>
		</form>	



<div class="container-fluid" style="margin-top:150px">
	<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="7000" id="myCarouselGrid">
		<div class="carouselGrid-inner">
		    <div class="item active">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD309"><img src="MELOWARE\OPAL.jpg"title="CLIMAX OPAL" style="width:200px;height:200px"><br>Climax opal<br>&#8377 1400</a></div>
            </div>
            <div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD308"><img src="MELOWARE\TULIP.jpg"title="CLIMAX TULIP" style="width:200px;height:200px"><br>Climax Tulip<br>&#8377 1610</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD311"><img src="MELOWARE\LIBERTY.jpg"title="CLIMAX LIBERTY" style="width:200px;height:200px"><br>Climax Liberty<br>&#8377 1700</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD307"><img src="MELOWARE\PREMIUM.jpg"title="CLIMAX PREMIUM" style="width:200px;height:200px"><br>Climax Premium<br>&#8377 690</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD312"><img src="MELOWARE\FULLPLAIN.jpeg"title="FULL PLATE PLAIN" style="width:200px;height:200px"><br>Full Plate Plain<br>&#8377 280</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD313"><img src="MELOWARE\FULLPRINTED.jpg"title="FULL PLATE PRINTED" style="width:200px;height:200px"><br>Full Plate Printed<br>&#8377 325</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD314"><img src="MELOWARE\QUARTERPLAIN.jpg"title="QUARTER PLATE PLAIN" style="width:200px;height:200px"><br>Quarter Plate Plain <br>&#8377 160</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD315"><img src="MELOWARE\QUARTERPRINTED.jpg"title="QUARTER PLATE PRINTED" style="width:200px;height:200px"><br>Quarter Plate Printed <br>&#8377 210</a></div>
            </div>
			
            
    </div>
    <a class="left carouselGrid-control" href="#myCarouselGrid" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
    <a class="right carouselGrid-control" href="#myCarouselGrid" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
  </div>
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