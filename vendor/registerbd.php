<?php
session_start();
include '../bd.php';

$username = filter_var(trim($_POST['username']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST['phone']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$pass2 = filter_var(trim($_POST['pass2']),
FILTER_SANITIZE_STRING);

if($pass === $pass2){
  
  $pass = md5($pass);
  mysqli_query($mysqli, "INSERT INTO `register` ( `username`, `email`, `phone`, `pass` ) VALUES ('$username', '$email', '$phone', '$pass')");
  $_SESSION['message'] = 'регистрация прошла успешно';
    header( 'Location: ../lk.php' );
}else{
  $_SESSION['message'] = "пароли несовпадают";
  header( 'Location: ../register.php' );
}
$mysqli->close(); 

  

?> 
