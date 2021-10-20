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
<!-- Основной контент по середине Круэлла -->
    <div class="content">
      <h1>Круэлла</h1>
        <!-- Видео -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/9F2-eR2dfMY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="info_film_page">
          <span class="label">рейтинг: </span><span class="value">7.4 / 10</span>
          <span class="label">год: </span><span class="value">2021</span>
          <span class="label">режиссер: </span><span class="value">Крэйг Гиллеспи</span>
        </div>
        <!-- Описание фильма -->
        <hr>
        <h2>Описание Круэлла</h2>
        <div class="description_film">
          <img src="img/cruela2.jpg" alt="Круэлла" width="360" height="210">
          Великобритания, 1960-е годы. Эстелла была необычным ребёнком, и особенно трудно ей было мириться со всякого рода несправедливостью. Вылетев из очередной школы, она с мамой отправляется в Лондон. По дороге они заезжают в особняк известной модельерши по имени Баронесса, где в результате ужасного несчастного случая мама погибает. Добравшись до Лондона, Эстелла знакомится с двумя мальчишками — уличными мошенниками Джаспером и Хорасом. 10 лет спустя та же компания промышляет на улицах британской столицы мелким воровством, но Эстелла никак не может оставить мечту сделать карьеру в мире моды. Хитростью устроившись в фешенебельный универмаг, девушка привлекает внимание Баронессы, и та берёт её к себе в штат дизайнеров.
        </div>
       <!--  Отзывы -->
        <hr>
        <h2>Отзывы об Круэлла</h2>
        <!-- Первый отзыв -->
        <div class="reviews">
          <div class="review_name">
            Елена
          </div>
          <div class="review_text">
            Замечательно сыграли душещипательную историю становления злодейки Круэллы… в фильме перевели как Стервеллу. Костюмы просто супер, музыка понравилась.
            Это уже третий фильм - реабилитация злодеев в кино: Малифисента, Джокер и теперь Круэлла. Создатели этих фильмов пытаются вызвать чувство жалости к злодеям и переиначить их историю. 
          </div>
        </div>
        <!-- Второй отзыв -->
          <div class="reviews">
        <div class="review_name">
          Алексей
        </div>
        <div class="review_text">
          Как же Я долго ждал выход фильма "Круэлла" - приквел к истории про Стервеллу же Виль, которая хотела сшить манто из далматинцев. Чудная игра двум Эмм, оригинальный сюжет, декорации... Рекомендую к просмотру!
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

