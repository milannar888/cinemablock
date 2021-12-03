<?php 
 session_start();

  if(isset($_SESSION['user'])){
    header('Location: lk.php');
  }
?>
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
<!-- Форма регистрации-->
        <form  method="POST" action="vendor/registerbd.php">
          
        <input type="text" name="username" placeholder="Введите логин">
        <input type="email" name="email" placeholder="Введите email">
        <input type="phone" name="phone" placeholder="Введите телефон" maxlength="12">
        <input type="password" name="pass" placeholder="Пароль">
        <input type="password" name="pass2" placeholder="Подтвердите пароль" >
        <p>У вас уже есть аккаунт? -  <a href='avto.php'>авторизируйтесь</a></p>
        <input class="button" type="submit" value="Зарегистрироваться"> 
        <?php 
           if(isset($_SESSION['message'])){
            echo '<p class="mess">'. $_SESSION['message'] .'</p>';
           }
            unset($_SESSION['message']);
           
          ?>
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