<?php
require('dbConnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prove 05</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="prove05.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Ultimate Roguelike Database</h1>
  <p>Axes high!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="prove05.php">Search</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Add New Data</a>
      </li>   
    </ul>
  </div>  
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>Find Your Game</h2>
      <p>search games by title, price, author, platform...</p>
	  <form action="search.php" method="post">
		<label for="searchBy">Search By:</label>
		<select name="searchBy">
			<option value="title">Title</option>
			<option value="price">Price</option>
			<option value="platform">Platform</option>
			<option value="author">Author</option>
		</select><br>
		<input type="text" name="search">
		<button type="submit">Search</button>
	  </form>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
		
<?php

if ($_POST['searchBy'] = 'author'){
foreach ($db->query('SELECT game.price, game.title, author.name FROM game INNER JOIN author ON
game.author_id = author.author_id WHERE author.name = \'' . $_POST['search'] . '\'') as $row) {
  echo $row['game.price'] . ' | ' . $row['game.title'] . ' - by ' . $row['author.name'];
  echo '<br/>';
}}
else if ($_POST['searchBy'] = 'title'){
foreach ($db->query('SELECT game.price, game.title, author.name FROM game INNER JOIN author ON
game.author_id = author.author_id WHERE game.title = \'' . $_POST['search'] . '\'') as $row) {
  echo $row['game.price'] . ' | ' . $row['game.title'] . ' - by ' . $row['author.name'];
  echo '<br/>';
}}

/*
foreach ($db->query('SELECT ' . , price FROM game') as $row)
{
  echo $row['title'] . ' costs ';
  echo $row['price'];
  echo '<br/>';
}
*/
?>
    </div>  
<div class="jumbotron text-center">
  <p>Dedicated to helping you find what you're looking for.</p>
  <!--<a href="#">Back To Top</a>-->
</div>

</body>
</html>