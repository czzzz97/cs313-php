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
	<input id="orderCart" name="orderCart" value="<?php echo $_POST["order"];?>"></input>
	<button type="submit">Proceed to checkout</button>
	</form>
	<button onclick="location.href='browse.php'" type="button">Cancel order and browse</button>
	</div>
	<h1>Replica Weapons</h1>
	<h2>for stage, practice, or display</h2>
</header>
<div class="yourOrder">
	<h3>Your order:</h3>
	<?php $list = explode(",", $_POST["order"]);
	$total = 0.00;
	$idNum = -1;
	foreach ($list as $item) {
		$idNum += 1;
		$id = "button" . $idNum;
		switch($item) {
			case "samurai":
				echo "<p>\$24.99 - Samurai Sword <button id=\"" . $id .  "\" onclick=\"document.getElementById(" . $id . ").style.display=\"none\"\" type=\"button\">" . 
				"<i class=\"fas fa-trash\"></i></button></p>";
				$total += 24.99;
				break;
			case "spartan":
				echo "<p>\$29.99 - Spartan Gladius <button type=\"button\">" . 
				"<i class=\"fas fa-trash\"></i></button></p>";
				$total += 29.99;
				break;
			case "knight":
				echo "<p>\$34.99 - Knight's Longsword <button type=\"button\">" . 
				"<i class=\"fas fa-trash\"></i></button></p>";
				$total += 34.99;
				break;
			case "fencing":
				echo "<p>\$22.99 - Fencing Rapier <button type=\"button\">" . 
				"<i class=\"fas fa-trash\"></i></button></p>";
				$total += 22.99;
				break;
			case "viking":
				echo "<p>\$26.99 - Viking Waraxe <button type=\"button\">" . 
				"<i class=\"fas fa-trash\"></i></button></p>";
				$total += 26.99;
				break;	
			case "compound":
				echo "<p>\$32.99 - Compound Bow <button type=\"button\">" . 
				"<i class=\"fas fa-trash\"></i></button></p>";
				$total += 32.99;
				break;
			case "battleaxe":
				echo "<p>\$25.99 - Battleaxe <button type=\"button\">" . 
				"<i class=\"fas fa-trash\"></i></button></p>";
				$total += 25.99;
				break;
			case "longbow":
				echo "<p>\$28.99 - Traditional Longbow <button type=\"button\">" . 
				"<i class=\"fas fa-trash\"></i></button></p>";
				$total += 28.99;
				break;
		}
	}
	echo "<b><p>\$" . $total . ": TOTAL</p></b>";?> 
</div>

</body>
</html>