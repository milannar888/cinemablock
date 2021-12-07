<?php

if (empty($_GET['id'])) {
  echo "Empty id";
  exit;
}

include "bd.php";

$filename = basename("page.php?id={$_GET['id']}"); 
//var_dump($filename );

$query = sprintf("SELECT post_id FROM `main` WHERE post_id = {$_GET['id']}"); 

$result = mysqli_query($mysqli, $query); 
//var_dump($result);
//var_dump($query);
$post_id = mysqli_fetch_row($result); 
//var_dump($post_id);  

if ($_SERVER["REQUEST_METHOD"] === 'POST'){
  $name = $_POST['review_name']; 
  $content = $_POST['review_text'];
  $value =  $_POST['date'];
  mysqli_query($mysqli, "INSERT INTO `comment` (`name`, `content`, `post_id` ) VALUES ('$name', '$content', '$post_id[0]')"); 
  header('Location:'. $filename); 
  exit; 
}

$comment = mysqli_query($mysqli, "SELECT * FROM `comment` WHERE post_id = '$post_id[0]'"); 
$rows = mysqli_fetch_all($comment, MYSQLI_ASSOC); 
//echo ($rows);

?>