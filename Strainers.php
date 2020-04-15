<?php
session_start();
?>
<html>
	<head>
		<title>Strainers</title>
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
						$.post('getList.php',{'value':"Strainers"},function(data){
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
				<option value="" disabled selected hidden>Strainers</option>
			</select>
			<br> 
			<button class="btn btn-primary btn-medium">View Details </button>
		</form>	

<div class="container" style="margin-top:150px">
	<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="7000" id="myCarouselGrid">
		<div class="carouselGrid-inner">
			<div class="item active">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD401"><img src="STRAINERS\NET COVER 7.jpg"title="NET COVER 7 NO" style="width:200px;height:200px"><br>Net Cover 7<br>&#8377 63 </a></div>
            </div>
			<div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD404"><img src="STRAINERS\NET COVER 10.jpg"title="NET COVER 10 NO" style="width:200px;height:200px"><br>Net Cover 10<br>&#8377 100 </a></div>
            </div>
			<div class="item">
			    <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD406"><img src="STRAINERS\NET COVER 12.jpg"title="NET COVER 12 NO" style="width:200px;height:200px"><br>Net Cover 12<br>&#8377 138 </a></div>
            </div>
            <div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD410"><img src="STRAINERS\SOUP STRAINER.jpg"title="SOUP STRAINER" style="width:200px;height:200px"><br>Soup Strainer 7 no<br>&#8377 158 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD414"><img src="STRAINERS\DOUBLE NET 2.jpeg"title="DOUBLE NET" style="width:200px;height:200px"><br>Double Net Strainer 2 no<br>&#8377 41 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD416"><img src="STRAINERS\CONE STRAINER 2.jpg"title="CONE STRAINER" style="width:200px;height:200px"><br>Cone Strainer 2 no<br>&#8377 80 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD420"><img src="STRAINERS\COLENDER BASKET.jpeg"title="COLENDER BASKET" style="width:200px;height:200px"><br>Colender Basket 10 no<br>&#8377 260 </a></div>
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