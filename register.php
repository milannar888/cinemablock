<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Киномонстр-это портал о кино">
  <meta name="keywords" content="фильмы,фильмы онлайн,hd">
  <title>КиноБлок</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<div class="main">
<!-- Шапка страницы -->
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
      <h1>Регистрация</h1>
      <div class="info_film">
      <div class="send send_contact">
        <form  method="POST" action="lk.php">
        <input type="text" name="name" placeholder="Ваше имя">
        <input type="email" name="email" placeholder="Ваш email">
        <input type="number" name="phone" placeholder="Ваш телефон" maxlength="12">
        <input type="password" name="pass" placeholder="Пароль">
        <input type="password" name="pass2" placeholder="Подтвердите пароль" >
        <input class="button" type="submit" value="Зарегистрироваться">
        </form>
      </div>
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