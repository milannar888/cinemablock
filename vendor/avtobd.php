<?php
session_start();

include '../bd.php';
$username = $_POST['username'];
$pass = md5($_POST['pass']);

$check_user = mysqli_query($mysqli, "SELECT * FROM `register` WHERE `username` = '$username' AND `pass` = '$pass'");
if(mysqli_num_rows($check_user) > 0){
  $user = mysqli_fetch_assoc($check_user);

  $_SESSION['user'] = [
    "id" => $user['id'],
    "username" => $user['username'],
    "email" => $user['email'],
    "phone" => $user['phone'],
  ];

  header( 'Location: ../lk.php' );
}else{
  $_SESSION['message'] = "неверный логин или пароль";
  header( 'Location: ../avto.php' );
}

?>