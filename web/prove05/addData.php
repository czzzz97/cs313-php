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
      <h2>Add A Game</h2>
      <p>please include all information available</p>
	  <form action="action.php" method="post">
			<label for="title">Title</label><input type="text" name="title">
			<label for="price">Price</label><input type="text" name="price">
			<label for="platform">Platform</label><input type="text" name="platform">
			<label for="author">Author</label><input type="text" name="author">
		</select><br>
		<button type="submit">Add</button>
	  </form>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
    </div>
<div class="jumbotron text-center">
  <p>Dedicated to helping you find what you're looking for.</p>
  <!--<a href="#">Back To Top</a>-->
</div>

</body>
</html>
