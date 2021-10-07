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
      <!-- Основной контент по середине Боевой континент -->
      <div class="content">
        <h1>Боевой континент</h1>
        <!-- Видео -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/8oFoYwuXN0g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="info_film_page">
          <span class="label">рейтинг: </span><span class="value">8.9 / 10</span>
          <span class="label">год: </span><span class="value">2021</span>
          <span class="label">режиссер: </span><span class="value">Ян Чжэньюй</span>
        </div>
        <!-- Описание фильма -->
        <hr>
        <h2>Описание Боевой континент</h2>
        <div class="description_film">
          <img src="img/continent.jpg" alt="Боевой континент" width="200" height="250">
          Ещё ребёнком Тан Сань потерял мать, и вскоре отец отправил его обучаться боевым искусствам. В шестилетнем возрасте Сань был принят в академию Ношань и там крепко подружился с несколькими ребятами. Через некоторое время, как один из самых способных учеников, парень поступает в академию Тайшань, где преподают пятеро выдающихся мастеров.
        </div>
       <!--  Отзывы -->
        <hr>
        <h2>Отзывы об Боевой континент</h2>
        <!-- Первый отзыв -->
        <div class="reviews">
          <div class="review_name">
            Евгений
          </div>
          <div class="review_text">
            Есть выражение если книга нравится , читать "запоем"- без перерыва на приём пищи и сон, так вот просмотр  сериала "Боевой континент" мне очень понравился и  просмотр стал " запойным", На Боевом континенте развито большое количество школ боевых искусств, они разные дорогие и не очень. У школы боевых искусств " Ши Лань Кэ" было и другое название "школа Чудаков", вот в эту школу и поступил Тан Сань со своей названной сестрой Сяо У. В новом наборе оказалось семь чудаков и зритель будет следить как из  неопытных юнцов ученики превратятся в лучшую команду "духовных мастеров"  Боевого континента. Жду с нетерпением второго сезона. Рекомендую.
          </div>
        </div>
        <!-- Второй отзыв -->
          <div class="reviews">
        <div class="review_name">
          Елена
        </div>
        <div class="review_text">
          Очень хороший сериал. Замечательный. Легкий и серьезный. Смотрится на одном дыхании. Актеры прекрасны. Я уже давно поняла, энергия группы молодых актеров-это что-то непередаваемое. А Сяо Чжань просто прекрасен.
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
