<?php
  $mysqli = mysqli_connect('localhost', 'root', 'root', 'cinemablock');

  if(mysqli_connect_error()){
    printf("Соединение не установлено", mysqli_connect_error());
    exit();
  }
  //$mysqli->set_charset('utf8');
  mysqli_query($mysqli, "set name utf8mb4");

  $result = mysqli_query($mysqli, 'SELECT * FROM news');

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  //print_r($rows);
  
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
<div class="header">
    <div class="logo">
      <div class="logo_text">
        <h1><a href="/">КиноБлок</a></h1>
           <h2>Все новинки здесь!</h2>
      </div>
    </div>
    <div class="menubar">
        <ul class="menu">
          <li class="selected"><a href="index.php">Главная</a></li>
          <li><a href="films.php">Фильмы</a></li>
          <li><a href="series.php">Сериалы</a></li>
          <li><a href="rating.php">Рейтинг фильмов</a></li>
          <li><a href="contact.php">Контакты</a></li>
        </ul>
    </div>
</div>
    <!-- Основной контент -->
    <div class="site_content"> 
      <div class="sidebar_container">
        <!-- Первый блок поиск -->
        <div class="sidebar">
          <h2>Поиск</h2>
            <form method="post" action="#" id="search_form">
              <input type="search" name="search_field" placeholder="ваш запрос" />
              <input type="submit" class="btn" value="найти" />
            </form>
        </div>
        <!-- второй блок справа вход-->
        <div class="sidebar">
          <h2>Вход</h2>
          <form method="post" action="#" id="login">
            <input type="text" name="login_field" placeholder="логин" />
            <input type="password" name="password_field" placeholder="пароль" />
            <input type="submit" class="btn" value="войти" />
            <div class="lables_passreg_text">
              <span><a href="#">забыли пароль?</a></span> | <span><a href="#">регистрация</a></span>
            </div>
          </form>
        </div>
        <!-- третий блок справа новости -->
        <div class="sidebar">
          <h2>Новости</h2>
          <span>23.09.2021</span>
          <p>Мы запустили расширенный поиск</p>
          <a href="#">читать</a>
        </div>
        <!-- четвертый блок рейтинг фильмов -->
        <div class="sidebar">
          <h2>Рейтинг фильмов</h2>
          <ul>
            <li><a href="show_cruella.php">Круэлла</a><span class="rating_sidebar">7.4</span></li>
            <li><a href="show_palma.php">Пальма</a><span class="rating_sidebar">7.3</span></li>
            <li><a href="show_assasin.php">Ассасин:битва миров</a><span class="rating_sidebar">6.2</span></li>
            <li><a href="show_devitaev.php">Девятаев</a><span class="rating_sidebar">6.2</span></li>
          </ul>
        </div>
      </div>
      <!-- Основной контент по середине -->
      <div class="content">
        <h1>Новые фильмы</h1>
        <div class="films_block">
         <a href="show_cruella.php"><img src="img/cruela3.jpg" alt="Круэлла"></a>
         <a href="show_assasin.php"><img src="img/Assasin.jpg" alt="Ассасин:битва миров"></a>
         <a href="show_devitaev.php"><img src="img/devitaev2.jpg" alt="Девятаев"></a>
         <a href="show_palma.php"><img src="img/palma.jpg" alt="Пальма"></a>
        </div>
        <h1>Новые сериалы</h1>
        <div class="films_block">
         <a href="show_continent.php"><img src="img/continent.jpg" alt="Боевой континент"></a>
         <a href="show_hotel.php"><img src="img/hotel.jpg" alt="Отель феникс" ></a>
         <a href="show_polet.php"><img src="img/polet.jpg" alt="Полёт"></a>
         <a href="show_obitel.php"><img src="img/obitel.jpg" alt="Обитель"></a>
        </div>
      <!-- Пост на странице --> 
      <div class="posts"><?php foreach($rows as $row):?>
         <hr>
         <h2><a href="about_palma.php"><?php echo $row['title'];?></a></h2>
         <div class="posts_content">
          <p>
          <?php echo $row['textnew'];?>
            <!--Фильм «Пальма» – пожалуй, самое эмоциональное и семейное кино последнего времени, и тот редкий случай, когда постановщики во главе с практически дебютантом Александром Домогаровым-младшим не стесняются выводить на первый план животных и детей, с которыми, как известно, всегда трудно конкурировать профессиональным актерам. За проектом «Пальма» мы следили с самого начала и вместе с его авторами вспоминаем, как проходили съемки этого действительно неординарного для современного российского кино фильма.-->
          </p>
         </div>
         <p><a href="<?php echo $row['linknew'];?>">читать</a></p>
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
      <div class="footer">
        <p>
          <a href="index.php">Главная</a> |
          <a href="films.php">Фильмы</a> |
          <a href="series.php">Сериалы</a> |
          <a href="rating.php">Рейтинг фильмов</a> |
          <a href="contact.php">Контакты</a> 
        </p>
      </div> 
    </div>
</body>
</html>