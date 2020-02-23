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

<div class="jumbotron text-center header">
  <h1>Ultimate Roguelike Database</h1>
  <p>You search your surroundings. You discover a hidden door!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="prove05.php">Browse</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="search.php">Search</a>
      </li>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="addData.php">Add New Data</a>
      </li>   
    </ul>
  </div>  
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2>Find Your Game</h2>
      <p>search games by title, price, platform...</p>
	  <form action="search.php" method="post">
		<label for="searchBy">Search By:</label>
		<select name="searchBy">
			<option value="title">Title</option>
			<option value="price">Price</option>
			<option value="platform">Platform</option>
		</select><br>
		<input type="text" name="search">
		<button type="submit">Search</button>
	  </form>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
<?php
if (isset($_POST['search'])){
	
$searchBy = $_POST['searchBy'];
$search = $_POST['search'];

try
{
	if ($searchBy = 'title'){
		$query = 'SELECT title, price FROM game WHERE title = :search';
		$statement = $db->prepare($query);
		$statement->bindValue(':search', $search, PDO::PARAM_STR);
		$statement->execute();
		
		$r = $statement->fetchAll();
		echo $r[0] . '###';
		echo $r[0]['title'] . '1000';
		echo $r[0][0] . '2000';
		echo $statement->fetchAll();
		echo 'fffff<br>';
		echo var_dump($statement);
		echo 'fffff<br>';
		echo var_dump($statement->fetchAll());
		echo 'fffff<br>';
		echo $statement->execute();
		echo 'fffff<br>';
		echo $statement;
	}	
	else if ($searchBy = 'platform'){
	}
	else if ($searchBy = 'price'){
	}
}
catch (Exception $ex)
{
	echo $ex;
	die();
}
die();
}
?>
    </div>  
<div class="jumbotron text-center">
  <p>Dedicated to helping you find what you're looking for.</p>
  <!--<a href="#">Back To Top</a>-->
</div>

</body>
</html>