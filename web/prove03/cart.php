<!doctype html> 
<html lang="en-US" style="height:100%">
<head>
<script src="https://kit.fontawesome.com/a23918c4fb.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="prove03.css">
</head>
<body>
<header>
	<div class="nav">
	<form action="checkout.php" method="post">
	<input id=orderCart name="order"><?php echo $_POST["order"];?></input>
	<button type="submit">Proceed to checkout</button>
	</form>
	</div>
	<div class="nav">
	<button onclick="location.href='browse.php'" type="button">Cancel order and browse</button>
	</div>
	<h1>Replica Weapons</h1>
	<h2>for stage, practice, or display</h2>
</header>
	<h3>Your order:</h3>
	<?php echo  $_POST["order"];?> 
	<table id="cart">
		<tr>
			<td>Price</td>
			<td>Item</td>
		</tr>
		<tr>
			<td>$9.99</td>
			<td>Example Item</td>
		</tr>
		<tr><td></td><td></td></tr>
		<tr>
			<td>$20.44</td>
			<td>total</td>
		</tr>
	</table>


</body>
</html>