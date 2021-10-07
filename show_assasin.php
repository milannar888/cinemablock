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
      <!-- Основной контент по середине Ассасин: битва миров> -->
      <div class="content">
        <h1>Ассасин: битва миров</h1>
        <!-- Видео -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/zkwiqd8Bp5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="info_film_page">
          <span class="label">рейтинг: </span><span class="value">6.2 / 10</span>
          <span class="label">год: </span><span class="value">2021</span>
          <span class="label">режиссер: </span><span class="value">Лу Ян</span>
        </div>
        <!-- Описание фильма -->
        <hr>
        <h2>Описание Ассасин: битва миров</h2>
        <div class="description_film">
          <img src="img/Assasin.jpg" alt="Ассасин:битва миров" width="180" height="210">
          В неком фэнтезийном мире правит жестокий Бог, которому нужны лишь смерть и разрушения. Потеряв сестру, но обретя волшебный доспех, молодой воин Кунвэнь отправляется в путешествие, чтобы разыскать и убить Бога. В это время в нашем мире мужчина Гуань Нин уже шесть лет находится на грани отчаяния, разыскивая пропавшую дочку. Он выходит на торговцев детьми, но полиция ошибочно принимает его за преступника и арестовывает. Сбежать Нину помогает ассистентка влиятельного бизнесмена и предлагает ему сделку. Один популярный писатель в данный момент пишет роман в жанре фэнтези, который каким-то образом вредит здоровью её босса, а Нин в обмен на информацию о местонахождении дочери должен этого писателя убить.
        </div>
       <!--  Отзывы -->
        <hr>
        <h2>Отзывы об Ассасин:битва миров</h2>
        <!-- Первый отзыв -->
        <div class="reviews">
          <div class="review_name">
            Егор
          </div>
          <div class="review_text">
            Отличный фильм,один из лучших,что я смотрел в своей жизни,. И сюжет и графика и монтаж. Коротко- главный герой в поиске своей дочери, которую похитили. У главного героя при броске меткость. И еще Фильм очень крутой! Неужели китайцы научились снимать классную фэнтезийную фантастику? Превосходная графика, фантазийный полёт мысли, классные смелые идеи, восточная изюминка, прекрасные актёры! Гармоничный фильм во итогу и прекрасное послевкусие. он читает фантаст.истории писателя, которые сбываются.Бескомпромиссно и достойно показанная история. Понравилось. Бескомпромиссно и достойно показанная история. Понравилось. Рекомендую
          </div>
        </div>
        <!-- Второй отзыв -->
          <div class="reviews">
        <div class="review_name">
          Екатерина
        </div>
        <div class="review_text">
          Шикарная фантастика. На удивление интересный сюжет, шикарно снят и поставлен. Рекомендую к просмотру. 
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
          <a href="prob.php">Главная</a> |
          <a href="films_block">Фильмы</a> |
          <a href="series.php">Сериалы</a> |
          <a href="rating.php">Рейтинг фильмов</a> |
          <a href="contact.php">Контакты</a> 
        </p>
      </div> 
    </div>
</body>
</html>

