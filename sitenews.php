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
<!-- Основной контент нововедения на сайте -->
  <div class="content">
    <h1>Новости</h1>
  <div class="info_film">
    <h2>Все о фильмах и сериалах.</h2>
      <br>
    <p>Подборки, рецензии, обзоры и новости из мира кино. Здесь Вас ждут новинки из мира кинематографа, свежий и интересный взгляд на фильмы и сериалы. Новых публикаций пока нет.  
      <br><br>
      Загрузка... Все о фильмах и сериалах. ...
      <br><br>
      Сентябрь оказался невероятно богат не только на продолжения полюбившихся сериалов, но и на абсолютно новые интереснейшие премьеры. Некоторые из них достойны называться не только лучшими осени, но и года..
    </p>
    <i>30.09.2021</i>
    </div> 
  <div class="info_film">
    <h2>Мы запустили расширенный поиск</h2>
      <br>
    <p>Расширенный поиск позволяет избавиться от беспорядка на сайте и сосредоточиться на именно тех результатах поиска, которые вы ищете. Расширенный поиск может приносить пользу всем.
      <br><br>  
      В конце концов, вы не всегда хотите, пересматривать все страницы. Иногда хочется что-то более точное. Например, конкретный фильм или поиск по году выпуска или по рейтингу.
      <br><br>
      В этом посте будут рассмотрены наиболее полезные расширенные функции поиска и рассмотрено, как можно использовать их для оптимизации для конкретного поиска.
    </p>
    <i>23.09.2021</i>
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