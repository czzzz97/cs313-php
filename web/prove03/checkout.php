<!doctype html> 
<html lang="en-US" style="height:100%">
<head>
<script src="https://kit.fontawesome.com/a23918c4fb.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="prove03.css">
</head>
<body>
<header>
	<div class="nav">
	<a href="cart.php">Return to cart</a>
	</div>
	<h1>Replica Weapons</h1>
	<h2>for stage, practice, or display</h2>
</header>
	<h3>Your order:</h3>
	<p><?php echo $_POST["orderCart"];?></p>
	<form>
	<h3>Delivery address information</h3>
	<p>Street</p><input></input>
	<p>City</p><input></input>
	<p>State</p><input></input>
	<p>ZIP Code</p><input></input>
	</form>

</body>
</html>