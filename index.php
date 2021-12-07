<?php
  session_start();
  
  include "bd.php";
 
  $result = mysqli_query($mysqli, 'SELECT * FROM main WHERE type = "films"');
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  $result2 = mysqli_query($mysqli, 'SELECT * FROM main WHERE type = "series"');
  $rows2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
  //print_r($rows);

  $result3 = mysqli_query($mysqli, 'SELECT * FROM news');
  $rows3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
  
  $mysqli->close();

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
<!-- Основной контент по середине -->
  <div class="content">
    <h1>Новые фильмы</h1>
    <div class="films_block">
    <?php foreach($rows as $row):?>
      <a href="/page.php?id=<?php echo $row['post_id'];?>"><img src="img/<?php echo $row['img'];?>" alt="Круэлла"></a>
         <!--<a href="show_cruella.php"><img src="img/cruela3.jpg" alt="Круэлла"></a>
         <a href="show_assasin.php"><img src="img/Assasin.jpg" alt="Ассасин:битва миров"></a>
         <a href="show_devitaev.php"><img src="img/devitaev2.jpg" alt="Девятаев"></a>
         <a href="show_palma.php"><img src="img/palma.jpg" alt="Пальма"></a>-->
    <?php endforeach;?>
    </div>
    <h1>Новые сериалы</h1>
    <div class="films_block">
      <?php foreach($rows2 as $row2):?>  
        <a href="/page.php?id=<?php echo $row2['post_id'];?>"><img src="img/<?php echo $row2['img'];?>" alt="Круэлла"></a>
         <!--<a href="show_continent.php"><img src="img/continent.jpg" alt="Боевой континент"></a>
         <a href="show_hotel.php"><img src="img/hotel.jpg" alt="Отель феникс" ></a>
         <a href="show_polet.php"><img src="img/polet.jpg" alt="Полёт"></a>
         <a href="show_obitel.php"><img src="img/obitel.jpg" alt="Обитель"></a>-->
      <?php endforeach;?>
    </div>
<!-- Пост на странице --> 
  <div class="posts"><?php foreach($rows3 as $row3):?>
    <hr>
    <h2><a href="about_palma.php"><?php echo $row3['title'];?></a></h2>
    <div class="posts_content">
    <p>
    <?php echo $row3['content'];?>
            <!--Фильм «Пальма» – пожалуй, самое эмоциональное и семейное кино последнего времени, и тот редкий случай, когда постановщики во главе с практически дебютантом Александром Домогаровым-младшим не стесняются выводить на первый план животных и детей, с которыми, как известно, всегда трудно конкурировать профессиональным актерам. За проектом «Пальма» мы следили с самого начала и вместе с его авторами вспоминаем, как проходили съемки этого действительно неординарного для современного российского кино фильма.-->
    </p>
  </div>
    <p><a href="<?php echo $row3['linknew'];?>">читать</a></p>
         <!--<hr>
         <h2><a href="news_festival.php">Канны подводят итоги и рассказывают о драмах телевизионного закулисья</a></h2>
         <div class="posts_content">
          <p>
          
            Канны-2021 готовятся закрыть занавес, идут последние конкурсные картины. Члены жюри их уже отсмотрели и сейчас в наглухо изолированных покоях делятся впечатлениями, распределяют призы между будущими лауреатами. Вердикты главного жюри будут объявлены на торжественной церемонии.
          </p>
         </div>
         <p><a href="news_festival.php">читать</a></p>-->
    <?php endforeach;?>
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