<?php
  $mysqli = mysqli_connect('localhost', 'root', 'root', 'cinemablock');

  if(mysqli_connect_error()){
    printf("Соединение не установлено", mysqli_connect_error());
    exit();
  }
  //$mysqli->set_charset('utf8');
  mysqli_query($mysqli, "set name utf8mb4");

  $result = mysqli_query($mysqli, 'SELECT * FROM series');

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
    <!-- Шапка страницы -->
    <div class="header">
      <div class="logo">
        <div class="logo_text">
          <h1><a href="/">КиноБлок</a></h1>
          <h2>Все новинки здесь!</h2>
        </div>
      </div>
      <div class="menubar">
        <ul class="menu">
          <li><a href="index.php">Главная</a></li>
          <li><a href="films.php">Фильмы</a></li>
          <li class="selected"><a href="series.php">Сериалы</a></li>
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
      <!-- Основной контент по середине страница о фильмах -->
      <div class="content"><?php foreach($rows as $row):?>
        <div class="info_film">
          <img src="img/<?php echo $row['img'];?>">
          <?php echo $row['maintext'];?>
          Ещё ребёнком Тан Сань потерял мать, и вскоре отец отправил его обучаться боевым искусствам. В шестилетнем возрасте Сань был принят в академию Ношань и там крепко подружился с несколькими ребятами. Через некоторое время, как один из самых способных учеников, парень поступает в академию Тайшань, где преподают пятеро выдающихся мастеров.
          <div class="button"><a href="<?php echo $row['linkseries'];?>">Смотреть</a>
          </div>
        </div>
        <!--<div class="info_film">
          <img src="img/hotel.jpg">
          19-летняя Лера Пичугина просыпается в гостиничном номере, залитом кровью. Она видит, как ее безжизненное тело лежит в ванной... что с ней случилось? Убегая от гостиницы, она пытается позвать на помощь, но никто ее не замечает. Через несколько дней все сомнения развеваются. Тело Леры вылавливают из затопленного карьера. Неужели она действительно мертва? Если да, то почему она все еще ходит среди живых? И почему на самом деле ее могут видеть только несколько человек? И почему именно они? Ей придется найти ответы - живой или мертвой.
          <div class="button"><a href="show_hotel.php">Смотреть</a>
          </div>
        </div>
        <div class="info_film">
          <img src="img/polet.jpg">
          Сотрудники московской строительной компании собираются лететь в Пермь, но в зале вылета они понимают, что перепутали аэропорт. Чуть позже коллеги узнают, что самолет рейса, на который они опоздали, разбился сразу после взлета. Пережитый стресс и близость смерти заставляют героев задуматься о жизни, переосмыслить ее и попытаться понять, кто они и чего хотят на самом деле.
          <div class="button"><a href="show_polet.php">Смотреть</a>
          </div>
        </div>
        <div class="info_film">
          <img src="img/obitel.jpg">
          Время действия – конец 20-х годов 20 века, место действия – Соловецкий лагерь, печально знаменитые Соловки. Страх и отвага, отчаянное желание выжить, понять главное в себе и жизни – все это становится фоном страстной любовной истории двух героев: заключенного Артема Горяинова и чекистки Галины. Это любовь на краю пропасти, ведь гражданский муж Галины – всесильный начальник лагеря Федор Эйхманис...
          <div class="button"><a href="show_obitel.php">Смотреть</a>
          </div>
        </div>-->
        <?php endforeach;?>
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