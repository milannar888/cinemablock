<?php

$username = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$number = filter_var(trim($_POST['phone']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$pass2 = filter_var(trim($_POST['pass2']),
FILTER_SANITIZE_STRING);

if(mb_strlen($username) < 3 || mb_strlen($username) > 30){
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
}

if($pass != $pass2){
  echo "Пароли несовпадают";
  exit;
}

  include "bd.php";

  $mysqli -> query ("INSERT INTO `register` (`username`, `email`, `phone`, `pass`) VALUES ('$username', '$email', '$number', '$pass')");

  $mysqli->close();

?> 

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Киноблок-это портал о кино">
  <meta name="keywords" content="фильмы,фильмы онлайн,hd">
  <title>КиноБлок</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<div class="main">
 <!--Шапка страницы -->
 <?php
    $page = 'index';
    include "header.php";
  ?>
<!-- Основной контент -->
  <div class="site_content"> 
    <div class="sidebar_container">
<!-- Первый блок поиск -->
<?php
      include "query.php";
    ?>
<!-- второй блок справа вход-->
    <?php
      include "entry.php";
    ?>
<!-- третий блок справа новости -->
    <?php
      include "anonsnews.php";
    ?>
<!-- четвертый блок рейтинг фильмов -->
    <?php
      include "ratingmain.php";
    ?>
<!-- Основной контент по середине страница о фильмах -->
    <div class="content">
      <h1>Личный кабинет</h1>
      <div class="info_film">
      
      
     </div >   
    </div > 
    </div >
<!-- Подвал сайта -->
    <?php
      include "footer.php";
    ?>
  </div>
</body>
</html>