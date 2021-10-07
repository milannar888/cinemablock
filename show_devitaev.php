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
          <li class="selected"><a href="films.php">Фильмы</a></li>
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

