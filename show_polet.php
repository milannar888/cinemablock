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
    $page = 'series';
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
<!-- Основной контент по середине Боевой континент -->
    <div class="content">
      <h1>Полёт</h1>
        <!-- Видео -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/NGRxblhRGu8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="info_film_page">
          <span class="label">рейтинг: </span><span class="value">6.9 / 10</span>
          <span class="label">год: </span><span class="value">2021</span>
          <span class="label">режиссер: </span><span class="value">Пётр Тодоровский</span>
        </div>
        <!-- Описание фильма -->
        <hr>
        <h2>Описание Полёт</h2>
        <div class="description_film">
          <img src="img/polet.jpg" alt="Полёт" width="200" height="250">
          Сотрудники московской строительной компании собираются лететь в Пермь, но в зале вылета они понимают, что перепутали аэропорт. Чуть позже коллеги узнают, что самолет рейса, на который они опоздали, разбился сразу после взлета. Пережитый стресс и близость смерти заставляют героев задуматься о жизни, переосмыслить ее и попытаться понять, кто они и чего хотят на самом деле.
        </div>
       <!--  Отзывы -->
        <hr>
        <h2>Отзывы об Полёт</h2>
        <!-- Первый отзыв -->
        <div class="reviews">
          <div class="review_name">
            Марфа
          </div>
          <div class="review_text">
            Интересный сериал. Я бы сказала, что это психологическая драма. Не буду писать про содержание , его узнаёте посмотрев кино. Артисты великолепны, Добровольская - талантище, Ефремов , как актёр , мне нравится.Все играют очень достоверно. Ну, а концовка, она предсказуема . Сериал понравился.
          </div>
        </div>
        <!-- Второй отзыв -->
          <div class="reviews">
        <div class="review_name">
          Иван
        </div>
        <div class="review_text">
          Кучка офисных планктонов решили поиграть с нехорошим дядей, братком из 90х. Что получилось? А все тоже, что и в 90х. Полет закончился так и не начавшись. Сериал огонь: и сюжет, и смысл, и актеры - все отлично
        </div>
        </div>
        <!-- Форма оставить отзыв -->
      <div class="send">
        <form id="review" action="#" method="POST">
          <input name="review_name" type="text" placeholder="ваше имя">
          <textarea name="review_text"></textarea>
          <input class="btn" type="submit" value="отправить">
        </form>
      </div>
    </div>
  </div>
<!-- Подвал сайта -->
  <?php
    include "footer.php";
  ?>
  </div>
</body>
</html>