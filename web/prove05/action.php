<?php
$title = $_POST['title'];
$price = $_POST['price'];
$platform = $_POST['platform'];
$author = $_POST['author'];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'SELECT name FROM author WHERE name = \'' . $author . '\'';
	$statement = $db->prepare($query);
	$check = $statement->execute();
	if ($check != $author){
		$query = 'INSERT INTO author(name) VALUES(:name)';
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $author);
	$statement->execute();
	}
	$query = 'SELECT author_id FROM author WHERE name = \'' . $author . '\'';
	$statement = $db->prepare($query);
	$check = $statement->execute();
	
	$query = 'INSERT INTO game(title, price, author, release_date, link) VALUES(:title, :price, :author, :release_date, :link)';
	$statement = $db->prepare($query);

	$statement->bindValue(':title', $title);
	$statement->bindValue(':price', $price);
	$statement->bindValue(':author', $check);
	$statement->bindValue(':release_date', '01-01-01');
	$statement->bindValue(':link', 'http://www.google.com');
	
	$statement->execute();

	$check = $db->lastInsertId("game_id_seq");
	$query = 'SELECT platform_id FROM platform WHERE platform = \'' . $platform . '\'';
	$statement = $db->prepare($query);
	$platform_id = $statement->execute();
	
	$query = 'INSERT INTO game_platform(game_id, platform_id) VALUES(:game_id, :platform_id)';
	$statement = $db->prepare($query);

	$statement->bindValue(':game_id', $check);
	$statement->bindValue(':platform_id', $platform_id);
	
	$statement->execute();

}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: prove05.php");

die();
?>