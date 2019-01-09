<?php
include 'db/dbConfig.php';
$id = $_GET['article'];
if(filter_var($id, FILTER_VALIDATE_INT) === false){
  die("No valid ID");
}

$statusMsg = '';
$query = "DELETE FROM `articles` WHERE id = '.$id.'";

if(mysqli_query($link, $query)){
  $statusMsg = 'Article'.'$article["headline"]'.'deleted';
} else {
  $statusMsg = 'There was a problem deleting the article';
}
?>
