<?php
session_start();
?>
<html>
  <head>
    <title>Kitchenware</title>
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
					$.post('getList.php',{'value':"Kitchenware"},function(data){
						$('#list').append(data);					
					});				
				});
		});
	</script>
	<style>
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
           color:2B0B33;
          } 
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
				<option value="" disabled selected hidden>Kitchenware Items</option>
			</select>
			<br> 
			<button class="btn btn-primary btn-medium"> View Details </button>
		</form>	


<div class="container-fluid" style="margin-top:150px;">
    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="7000" id="myCarouselGrid">

        <div class="carouselGrid-inner">
            <div class="item active">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD201"><img src="RITU\REGULAR.jpg"title="REGULAR LIGHTER" style="width:200px;height:200px"><br>Regular Lighter <br>&#8377 85</a></div>
            </div>
            <div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD202"><img src="RITU\REGULAR GIFT.jpg"title="REGULAR  FREE GIFT LIGHTER" style="width:200px;height:200px"><br>Regular Lighter with gift<br>&#8377 99</a></div>
            </div>
          
            <div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD203"><img src="RITU\MICKEY.jpg"title="MICKEY LIGHTER" style="width:200px;height:200px"><br>Mickey Lighter<br>&#8377 80</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD204"><img src="RITU\CHOPPER.jpg"title="CHOPPER" style="width:200px;height:200px"><br>Chopper<br>&#8377 600</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD205"><img src="RITU\PREMIUM CUTLERY SET.jpg"title="PREMIUM CUTLERY SET.jpg" style="width:200px;height:200px"><br>Premium Cutlery Set<br>&#8377 645</a></div>
            </div>
			
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD206"><img src="RITU\DELUXE CUTLERY SET.jpg"title="DELUXE CUTLERY SET" style="width:200px;height:200px"><br>Deluxe Cutlery Set<br>&#8377 575</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD207"><img src="RITU\BABY FORK.jpg"title="BABY FORK" style="width:200px;height:200px"><br>Baby Fork (10 pcs)<br>&#8377 118</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD208"><img src="RITU\FRUIT FORK.jpg"title="FRUIT FORK" style="width:200px;height:200px"><br>Fruit Fork (10 pcs)<br>&#8377 96</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD239"><img src="RITU\POTATO MESHER STEEL HANDLE.jpg"title="POTATO MESHER STEEL HANDLE"style="width:200px;height:200px"><br>Potato Mesher Steel Handle<br>&#837790 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD209"><img src="RITU\GRATER SMALL.jpg"title="GRATER SMALL" style="width:200px;height:200px"><br>Grater Small<br>&#8377 95</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD210"><img src="RITU\CHOPPING BOARD 1.jpg"title="CHOPPING BOARD 1" style="width:200px;height:200px"><br>Chopping Board 1<br>&#8377 110</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD211"><img src="RITU\CHOPPING BOARD 3.jpg"title="CHOPPING BOARD 3" style="width:200px;height:200px"><br>Chopping Board 3<br>&#8377 155</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD212"><img src="RITU\CHOPPING BOARD 5.jpg"title="CHOPPING BOARD 5" style="width:200px;height:200px"><br>Chopping Board 5<br>&#8377 200</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD213"><img src="RITU\CHOPPING BOARD W 1.jpg"title="CHOPPING BOARD W 1" style="width:200px;height:200px"><br>Chopping Board White 1<br>&#8377 160</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD214"><img src="RITU\CHOPPING BOARD W 3.jpg"title="CHOPPING BOARD W 3" style="width:200px;height:200px"><br>Chopping Board White 3<br>&#8377 245</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD215"><img src="RITU\CUT N WASH WOODEN.jpg"title="CUT N WASH WOODEN" style="width:200px;height:200px"><br>Cut N Wash<br>&#8377 110</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD216"><img src="RITU\CUT N WASH WHITE.jpg"title="CUT N WASH WHITE" style="width:200px;height:200px"><br>Cut N Wash<br>&#8377 110</a></div>
            </div>
			
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD220"><img src="RITU\RIVET 8.jpg"title="RIVET HANDLE KNIFE 8" style="width:200px;height:200px"><br>Rivet Handle Knife 8"<br>&#8377 43</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD221"><img src="RITU\RIVET 9.jpg"title="RIVET HANDLE KNIFE 9" style="width:200px;height:200px"><br>Rivet Handle Knife 9"<br>&#8377 47</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD226"><img src="RITU\BH PLAIN 8.jpg"title="BLACK HANDLE KNIFE PLAIN 8" style="width:200px;height:200px"><br>Black Handle Knife plain 8"<br>&#8377 49</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD227"><img src="RITU\BH PLAIN 9.jpg"title="BLACK HANDLE KNIFE PLAIN 9" style="width:200px;height:200px"><br>Black Handle Knife plain 9"<br>&#8377 53</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD224"><img src="RITU\BH LASER 8.jpg"title="BLACK HANDLE KNIFE LASER 8" style="width:200px;height:200px"><br>Black Handle Knife Laser 8"<br>&#8377 49</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD222"><img src="RITU\SG 8.jpg"title="SOFT GRIP STAR KNIFE PLAIN 8" style="width:200px;height:200px"><br>Soft Grip Star Knife plain 8"<br>&#8377 64</a></div>
            </div>        
		
        </div>
		<a class="left carouselGrid-control" href="#myCarouselGrid" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
		<a class="right carouselGrid-control" href="#myCarouselGrid" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
    </div>
</div>
<div class="container-fluid" style="margin-top:160px">
    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="7000" id="myCarouselGrid">
        <div class="carouselGrid-inner">
            <div class="item active">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD101"><img src="RITU\POTATO MESHER DELUXE.jpg"title="POTATO MESHER DELUXE"style="width:200px;height:200px"><br>Potato Mesher Deluxe <br>&#8377 90 </a></div>
            </div>	
            <div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD231"><img src="RITU\PEELER PLASTIC H.jpg"title="PEELER PLASTIC HANDLE"style="width:200px;height:200px"><br>Peeler Plastic Handle<br>&#8377 24 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD232"><img src="RITU\PEELER PIPE H.jpg"title="PEELER PIPE H"style="width:200px;height:200px"><br>Peeler Pipe Handle<br>&#8377 35 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD233"><img src="RITU\PEELER DELUXE.jpg"title="PEELER DELUXE"style="width:200px;height:200px"><br>Peeler Deluxe<br>&#8377 30 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD234"><img src="RITU\PEELER (10PCS).jpg"title="PEELER (10PCS)"style="width:200px;height:200px"><br>Peeler (10 pcs) Pack<br>&#8377 165 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD235"><img src="RITU\PEELER JUMBO.jpg"title="PEELER JUMBO"style="width:200px;height:200px"><br>Peeler Jumbo<br>&#8377 40 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD236"><img src="RITU\PEELER MOVABLE.jpg"title="PEELER MOVABLE"style="width:200px;height:200px"><br>Peeler Movable<br>&#8377 35 </a></div>
            </div>
			
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD246"><img src="RITU\GLASS STAND SUPER.jpg"title="GLASS STAND SUPER" style="width:200px;height:200px"><br>Glass Stand Super<br>&#8377 85</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD247"><img src="RITU\GLASS STAND STEEL.jpg"title=" GLASS STAND STEEL" style="width:200px;height:200px"><br>Glass Stand Steel<br>&#8377 305</a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD246"><img src="RITU\SUPER MIXI.jpg"title="SUPER MIXI" style="width:200px;height:200px"><br>Super Mixi<br>&#8377 69</a></div>
            </div>
			
		    <div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD240"><img src="RITU\ATTA MAKER(2 IN 1).jpg"title="ATTA MAKER(2 IN 1)" style="width:200px;height:200px"><br>Atta Maker(2 IN 1)<br>&#8377250 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD241"><img src="RITU\ATTA MAKER.jpeg"title="ATTA MAKER" style="width:200px;height:200px"><br>Atta Maker(3 IN 1)<br>&#8377315 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD242"><img src="RITU\KHAL BATTA.jpg"title="KHAL BATTA" style="width:200px;height:200px"><br>Khal Batta<br>&#8377 190 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD243"><img src="RITU\SPROUT MAKER.jpg"title="SPROUT MAKER" style="width:200px;height:200px"><br>Sprout Maker<br>&#8377 180 </a></div>
            </div>
            <div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD244"><img src="RITU\CYLINDER TROLLEY.jpg"title="CYLINDER TROLLEY" style="width:200px;height:200px"><br>Potato Mesher Deluxe Lighter<br>&#837790 </a></div>
            </div>
			<div class="item">
              <div class="col-lg-15 col-md-3 col-sm-4 col-xs-6"><a href="Details.php?pid=KD245"><img src="RITU\HOT MAT.jpg"title="HOT MAT" style="width:200px;height:200px"><br>Hot Mat<br>&#8377 145 </a></div>
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