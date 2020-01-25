<!doctype html> 
<html lang="en-US" style="height:100%">
<head>
<script src="https://kit.fontawesome.com/a23918c4fb.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="prove03.css">

</head>
<body>
<header>
	<div class="nav">
	<form action="cart.php" method="post">
	<input id="order" name="order"></input>
	<p><span id="numItems"></span> items in cart.</p>
	<button type="submit">View cart/Checkout</button>
	</form>
	</div>
	
	<h1>Replica Weapons</h1>
	<h2>for stage, practice, or display</h2>
</header>

<div class="container">
<div class="gallery">
    <img src="https://cdn11.bigcommerce.com/s-sd2rb2jpmz/images/stencil/1280x1280/products/2789/4008/HK-079-500__00426.1485291127.jpg" alt="samurai" width="600" height="400">
  <div class="desc">Samurai Sword</div>
  
  <div class="price">$24.99
  <button id="addSamurai"><span class="fas fa-cart-plus"></span></button>
  </div>
</div>

<div class="gallery">
    <img src="https://www.japaneseswords4samurai.com/wp-content/uploads/2018/04/SW-1022.jpg" alt="spartan" width="600" height="400">
  <div class="desc">Spartan Gladius</div>
  
  <div class="price">$29.99
  <button id="addSpartan"><span class="fas fa-cart-plus"></span></button>
  </div> 
</div>  
  
<div class="gallery">
    <img src="https://swordskingdom.com/media/catalog/product/cache/1/thumbnail/1000x/17f82f742ffe127f42dca9de82fb58b1/b/l/black-glamdring-sword-of-gandalf-replica-from-lotr.jpg" alt="knight" width="600" height="400">
  <div class="desc">Knight's Longsword</div>
  
  <div class="price">$34.99
  <button id="addKnight"><span class="fas fa-cart-plus"></span></button>
  </div>  
</div> 

<div class="gallery">
    <img src="https://images-na.ssl-images-amazon.com/images/I/31kdcGzSieL._SX425_.jpg" alt="fencing" width="600" height="400">
  <div class="desc">Fencing Rapier</div>
  
  <div class="price">$22.99
  <button id="addFencing"><span class="fas fa-cart-plus"></span></button>
  </div>
</div>  

<div class="gallery">
    <img src="https://media.entertainmentearth.com/assets/images/063885fa4c3e4822a1b18ac245244d50lg.jpg" alt="viking" width="600" height="400">
  <div class="desc">Viking Waraxe</div>
  
  <div class="price">$26.99
  <button id="addViking"><span class="fas fa-cart-plus"></span></button>
  </div>  
</div> 

<div class="gallery">
    <img src="https://www.cosplayinspire.com/media/catalog/product/cache/1/image/1200x1200/b71367d728d91e800ca570447f5dce11/o/l/oliver-queen-green-arrow-season-5-weapon-cosplay-replica-bow-buy.jpg" alt="compound" width="600" height="400">
  <div class="desc">Compound Bow</div>
  
  <div class="price">$32.99
  <button id="addCompound"><span class="fas fa-cart-plus"></span></button>
  </div>  
</div> 

<div class="gallery">
    <img src="https://swordskingdom.com/media/catalog/product/cache/1/thumbnail/1000x/17f82f742ffe127f42dca9de82fb58b1/g/i/gimli-battle-axe-replica-gold-plated.jpg" alt="battleaxe" width="600" height="400">
  <div class="desc">Battleaxe</div>
  
  <div class="price">$25.99
  <button id="addBattleaxe"><span class="fas fa-cart-plus"></span></button>
  </div>  
</div> 

<div class="gallery">
    <img src="https://herocity.de/en/wp-content/uploads/2018/08/xucu40322-800x793.jpg" alt="longbow" width="600" height="400">
  <div class="desc">Longbow Traditional</div>
  
  <div class="price">$28.99
  <button id="addLongbow"><span class="fas fa-cart-plus"></span></button>
  </div>  
</div> 
 
 


</div>

<script>
var order = [];
var items = -1;
updateItems();

document.getElementById("addSamurai").addEventListener("click", function(){ order.push("samurai");updateItems();});
document.getElementById("addSpartan").addEventListener("click", function(){ order.push("spartan");updateItems();});
document.getElementById("addKnight").addEventListener("click", function(){ order.push("knight");updateItems();});
document.getElementById("addFencing").addEventListener("click", function(){ order.push("fencing");updateItems();});
document.getElementById("addViking").addEventListener("click", function(){ order.push("viking");updateItems();});
document.getElementById("addCompound").addEventListener("click", function(){ order.push("compound");updateItems();});
document.getElementById("addBattleaxe").addEventListener("click", function(){ order.push("battleaxe");updateItems();});
document.getElementById("addLongbow").addEventListener("click", function(){ order.push("longbow");updateItems();});

function updateItems() {
	items += 1;
	document.getElementById("numItems").innerHTML = items;
	document.getElementById("order").value = order;
}
</script>
</body>
</html>