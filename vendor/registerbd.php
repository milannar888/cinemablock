<?php
session_start();
include '../bd.php';


/*$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];*/
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

/*if(mb_strlen($username) < 3 || mb_strlen($username) > 30){
  echo 'Недопустимая длина имени';
  exit();
}if(mb_strlen($email) < 3 || mb_strlen($email) > 30){
  echo 'Недопустимая длина email';
  exit();
} if(mb_strlen($number) < 6 || mb_strlen($number) > 14){
  echo 'Недопустимая длина телефона';
  exit();
}if(mb_strlen($pass) < 2 || mb_strlen($pass) > 30){
  echo 'Недопустимая длина пароля';
  exit();
}*/

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
