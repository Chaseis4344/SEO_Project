<!DOCTYPE html>
<html lang="en">
  <head>
    	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Car to Sky</title>
    	<!-- Bootstrap -->
		<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
		<!--Main CSS-->
		<link href="css/main.css" rel="stylesheet">
	  	<!--Javascript-->
	  	<script src="js/membershipForm.js"></script>
	</head>
  <body style="background-color: #92B9BD ">
	<!--Navagation-->
	<?php include("navbar.php")?>
	  
  <div class="container-bg">
    <hr class="dashed">
		<div class="row">
			<div class="col-xl-4 form-margin">
			<div class="form-text">
				<h1>Create Account</h1>
				<form method="get" action="" id="mainForm">
					<div class="form-group">
					  <input type="text" class="form-control required highlightable" id="inputFirst" placeholder="First Name">
					</div>
					<div class="form-group">
					  <input type="text" class="form-control required highlightable" id="inputLast" placeholder="Last Name">
					</div>
					<div class="form-group">
					  <input type="phone" class="form-control highlightable" id="inputPhone" placeholder="Phone Number">
					</div>
					<div class="form-group">
						<input type="email" class="form-control required highlightable" id="inputEmail" placeholder="Email">
					</div>
				  	<div class="form-group">
						<input type="password" class="form-control highlightable" id="inputPassword" placeholder="Password">
				  	</div>
					<div id="message">
						<h4>Password must contain the following:</h4>
						<p id="letter" class="invalid">A lowercase letter</p>
						<p id="number" class="invalid">A number</p>
						<p id="length" class="invalid">Minimum 6 characters Maximum 9</p>
					</div>
					<p>
				  <h4>Select Car Size*</h4>
				  <br>
						<label>
						<input type="radio" name="carTypeRadio" value="radio" id="carTypeRadio_0">
						Small</label>
						<label>
						<input type="radio" name="carTypeRadio" value="radio" id="carTypeRadio_1">
						Medium</label>
						<label>
						<input type="radio" name="carTypeRadio" value="radio" id="carTypeRadio_2">
						Large</label>
					</p>
				<br>
					<h4>Select Color</h4>
					<select name="Colors" id="colors">
						<option value="red">Select Color</option>
						<option value="red">Red</option>
						<option value="orange">Orange</option>
						<option value="yellow">Yellow</option>
						<option value="blue">Blue</option>
						<option value="green">Green</option>
					</select>
					<br>
					<br>
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="reset" class="btn btn-danger">Reset</button>
					<br>
					<p>*Don't know what size? Check our helpful <a href="url">guide</a></p>
				</form>
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
