<!DOCTYPE html>
<html lang="en">
  <head>
    	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Car to Sky - Shopping</title>
    	<!-- Bootstrap -->
		<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
		<!--Main CSS-->
		<link href="css/main.css" rel="stylesheet">
	  	<!--Javascript-->
	  	<script src="js/membershipForm.js"></script>
	</head>
  <body style="background-color: #92B9BD ">
	<!--Navagation-->
	<header>
		<?php include("navbar.php")?>
	</header>	
	  
  <div class="container-bg">
	<div class="banner">
		<hr class="dashed">
	</div>
	<div class="filter-containter">
		<div class="filter-titles">
		<p>Sort:</p>
		<p>Collections:</p>
		</div>
		<div class="filter-options">
		<input type="text" placeholder="Featured">
		<select name="cars" id="collection">
  			<option value="Cargo Van">Cargo Van</option>
  			<option value="Convertible">Convertible</option>
  			<option value="Coupe">Coupe</option>
  			<option value="Hatchback">Hatchback</option>
			<option value="Minivan">Minivan</option>
			<option value="Passenger Van">Passenger Van</option>
			<option value="Pickup Truck">Pickup Truck</option>
			<option value="SUV">SUV</option>
			<option value="Sedan">Sedan</option>
			<option value="Wagon">Wagon</option>
		</select>
		</div>
	</div>
	<div class="products-container">
	<div class= "product-block">
		<div class="product-image">
			<img src="img/SUV.jpg" alt="">
		</div>
		<p class="product-title"> SUV Helicopter Kit</p>
		<p> $1000.00</p>
		<div class="product-button">
			<button>Details</button>
		</div>
		</div>
	<div class= "product-block">
		<div class="product-image">
			<img src="img/Convertible.jpg" alt="">
		</div>
		<p class="product-title"> Convertible Helicopter Kit</p>
		<p> $1000.00</p>
		<div class="product-button">
			<button>Details</button>
		</div>
		</div>
	<div class= "product-block">
		<div class="product-image">
			<img src="img/Pickup_Truck.jpg" alt="">
		</div>
		<p class="product-title"> Pickup Truck Helicopter Kit</p>
		<p> $1000.00</p>
		<div class="product-button">
			<button>Details</button>
		</div>
		</div>
	<div class= "product-block">
		<div class="product-image">
			<img src="img/Minivan.jpg" alt="">
		</div>
		<p class="product-title"> Minivan Helicopter Kit</p>
		<p> $1000.00</p>
		<div class="product-button">
		<button>Details</button>
		</div>
		</div>
	<div class= "product-block">
		<div class="product-image">
			<img src="img/Coupe.jpg" alt="">
		</div>
		<p class="product-title"> Coupe Helicopter Kit</p>
		<p> $1000.00</p>
		<div class="product-button">
			<button>Details</button>
		</div>
		</div>
	<div class= "product-block">
		<div class="product-image">
		<img src="img/Hatchback.jpg" alt="">
		</div>
		<p class="product-title"> Hatchback Helicopter Kit</p>
		<p> $1000.00</p>
		<div class="product-button">
			<button>Details</button>
		</div>
		</div>
	</div>
<hr class="dashed">
  </div>
	  
	<?php include("footer.php")?>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>