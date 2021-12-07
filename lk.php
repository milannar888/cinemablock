<?php
session_start();

if(!$_SESSION['user']){
  header('Location: avto.php');
}
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
        <h2>Логин: <?=  $_SESSION['user']['username'] ?></h2>
        <a href="#">Email: <?= $_SESSION['user']['email'] ?> </a>
        <p>Телефон: <?= $_SESSION['user']['phone'] ?></p>
        <div class="button"><a href="vendor/exit.php">Выход</a></div >
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