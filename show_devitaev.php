<?php
session_start();
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
    $page = 'films';
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
<!-- Основной контент по середине Девятаев -->
    <div class="content">
      <h1>Девятаев</h1>
        <!-- Видео -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/risii8g1MzI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="info_film_page">
          <span class="label">рейтинг: </span><span class="value">6.2 / 10</span>
          <span class="label">год: </span><span class="value">2021</span>
          <span class="label">режиссер: </span><span class="value">Тимур Бекмамбетов, <br> Сергей Трофимов</span>
        </div>
        <!-- Описание фильма -->
        <hr>
        <h2>Описание Девятаев</h2>
        <div class="description_film">
          <img src="img/devitaev2.jpg" alt="Девятаев" width="160" height="210">
          Лето 1944 года. Советские войска ведут наступление, но враг еще очень силен. Летчик-истребитель Михаил Девятаев попадает в плен. Ему предстоит сделать выбор — вернуться в небо, продолжив войну на стороне врага, или отправиться в концлагерь на остров Узедом. Отчаянный ас Девятаев выбирает третье — побег. Но с засекреченного острова, где идут испытания немецких крылатых ракет, нельзя убежать. Зато можно улететь — на аэродроме стоит новейший вражеский бомбардировщик с «оружием возмездия» Третьего рейха на борту. Улететь — и совершить самый дерзкий побег в военной истории.
        </div>
       <!--  Отзывы -->
        <hr>
        <h2>Отзывы об Девятаев</h2>
        <!-- Первый отзыв -->
        <div class="reviews">
          <div class="review_name">
            Сергей
          </div>
          <div class="review_text">
            Отличный фильм, 2 часа пролетели незаметно.
          </div>
        </div>
        <!-- Второй отзыв -->
          <div class="reviews">
        <div class="review_name">
          Дмитрий
        </div>
        <div class="review_text">
          Интересный фильм, сложно оторваться. Захватывающий сюжет. Держит в напряжении все время просмотра. 
        </div>
        </div>
        <!-- Форма оставить отзыв -->
        <?php
          include "commentfilms.php";
        ?> 
    </div>
  </div>
<!-- Подвал сайта -->
  <?php
    include "footer.php";
  ?>
  </div>
</body>
</html>

