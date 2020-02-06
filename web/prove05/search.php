<?php
if ($_POST[searchBy] = 'author'){
foreach ($db->query('SELECT game.price, game.title, author.name FROM game INNER JOIN author ON
game.author_id = author.author_id WHERE author.name = \'' . $_POST[search] . '\'') as $row) {
  echo $row['game.price'] . ' | ' . $row['game.title'] . ' - by ' . $row['author.name'];
  echo '<br/>';
}}
else if ($_POST[searchBy] = 'title'){
foreach ($db->query('SELECT game.price, game.title, author.name FROM game INNER JOIN author ON
game.author_id = author.author_id WHERE game.title = \'' . $_POST[search] . '\'') as $row) {
  echo $row['game.price'] . ' | ' . $row['game.title'] . ' - by ' . $row['author.name'];
  echo '<br/>';
}} 

foreach ($db->query('SELECT ' . , price FROM game') as $row)
{
  echo $row['title'] . ' costs ';
  echo $row['price'];
  echo '<br/>';
}

?>