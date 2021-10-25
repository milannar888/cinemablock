<?php

$mysqli = mysqli_connect('localhost', 'root', 'root', 'cinemablock');

if(mysqli_connect_error()){
  printf("Соединение не установлено", mysqli_connect_error());
  exit();
}
//$mysqli->set_charset('utf8');
mysqli_query($mysqli, "set names utf8mb4");

?>