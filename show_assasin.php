<?php
session_start(); // запускаем сессию 
/*var_dump($post_id);// при необходимости выводим информацию о переменной также с помощью var_dump видим тип данных к которым относится переменная, выводит все типы данных, помогает в отладке кода
echo $query; // выводит при необходимости числовые и строковые переменные
exit; */ // выводит сообщение и прекращает выполнения текущего скрипта

include 'bd.php'; // include включает отдаленные файлы в данном случаем подключение к базе данных 
$filename = basename(__FILE__); // эта функция возвращает имя текущего файла
$query = sprintf("SELECT post_id FROM `main` WHERE linkpage =  '%s'", $filename); // пишем запрос к базе данных а именно к таблице main чтобы получить номер post_id где linkpage текущая страница 
$result = mysqli_query($mysqli, $query); // выполняем запрос записанный выше, база данных возвращает нам нужный результат

$post_id = mysqli_fetch_row($result); // получаем массив с нужной выбранной строкой  

if ($_SERVER["REQUEST_METHOD"] === 'POST'){//прописываем условие в котором указываем каким методом был произведен запрос

  $name = $_POST['review_name']; // данные введеные пользователем находятся в глобальном ассоциативном массиве $_POST переданным методом POST где по ключу name, получаем значение-введеные пользователем данные
  $comment_id = $_POST['review_text']; // тут используется уже другой ключ атрибута name

  mysqli_query($mysqli, "INSERT INTO `comment` (`name`, `comment_id`, `post_id` ) VALUES ('$name', '$comment_id', '$post_id[0]')"); //добавляем в базу данных а именно в таблицу comment значение тем самым заполнянем строку 
 
  header('Location: ' . $filename); // переадресуем страницу на этот же файл( перезагружаем )
  exit; // прекращает выполнения текущего скрипта
 
}

$comment = mysqli_query($mysqli, "SELECT * FROM `comment` WHERE post_id = '$post_id[0]'"); // выполняем запрос на получение данных из таблицы comment где post_id полученое число ранее (номер id в таблице main)
 
$rows = mysqli_fetch_all($comment, MYSQLI_ASSOC); // возвращаем двумерный массив со всеми записями из последнего запроса

$mysqli->close(); // закрываем подключение к базе даннных, в целях безопасности

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
        
       <div class="reviews">
          <?php foreach($rows as $row):?>  <!--делаем перебор полученного массива-$rows со значениями $row-->
        <div class="review_name">
          <?php echo $row['name'];?> <!--получаем значение из массива с ключем name--> 
        </div>
        <div class="review_text">
          <?php echo $row['comment_id'];?> <!-- получаем значение из массива с ключем comment_id--> 
        </div>
          <?php endforeach;?> <!--закрываем цикл--> 
        </div>
        <!-- Форма оставить отзыв -->
        <div class="send">
          <form id="review" action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="POST">
            <input name="review_name" type="text" placeholder="ваше имя" required>
            <textarea name="review_text" required ></textarea>
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

