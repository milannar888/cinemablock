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
      <h1>Отель феникс</h1>
        <!-- Видео -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/DPHI5ekSURk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="info_film_page">
          <span class="label">рейтинг: </span><span class="value">7.4 / 10</span>
          <span class="label">год: </span><span class="value">2021</span>
          <span class="label">режиссер: </span><span class="value">Владимир Койфман</span>
        </div>
        <!-- Описание фильма -->
        <hr>
        <h2>Описание Отель феникс</h2>
        <div class="description_film">
          <img src="img/hotel.jpg" alt="Отель феникс" width="180" height="250">
          19-летняя Лера Пичугина просыпается в гостиничном номере, залитом кровью. Она видит, как ее безжизненное тело лежит в ванной... что с ней случилось? Убегая от гостиницы, она пытается позвать на помощь, но никто ее не замечает. Через несколько дней все сомнения развеваются. Тело Леры вылавливают из затопленного карьера. Неужели она действительно мертва? Если да, то почему она все еще ходит среди живых? И почему на самом деле ее могут видеть только несколько человек? И почему именно они? Ей придется найти ответы - живой или мертвой.
        </div>
       <!--  Отзывы -->
        <hr>
        <h2>Отзывы об Отель феникс</h2>
        <!-- Первый отзыв -->
        <div class="reviews">
          <div class="review_name">
            Милана
          </div>
          <div class="review_text">
            Отличный мини сериал. очень порадовал интересным сюжетом, хорошим актёрским составом. Молодую девушку убивает случайный знакомый, она воскресает и становится призраком и сама ищет своего убийцу.  Хотелось бы продолжение...
          </div>
        </div>
        <!-- Второй отзыв -->
          <div class="reviews">
        <div class="review_name">
          Алена
        </div>
        <div class="review_text">
          Сериал очень понравился, закрученный сюжет обожаю такие сериалы где приходится думать кто же убийца, а в итоге совсем неожиданная развязка. Конец конечно не совсем ясен. Но в целом твёрдая 5ка.
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