<?php
session_start(); 

include 'bd.php';  
$filename = basename(__FILE__); 
$query = sprintf("SELECT post_id FROM `main` WHERE linkpage =  '%s'", $filename); 
$result = mysqli_query($mysqli, $query); 

$post_id = mysqli_fetch_row($result);   

if ($_SERVER["REQUEST_METHOD"] === 'POST'){
  $name = $_POST['review_name']; 
  $comment_id = $_POST['review_text']; 
  mysqli_query($mysqli, "INSERT INTO `comment` (`name`, `comment_id`, `post_id` ) VALUES ('$name', '$comment_id', '$post_id[0]')"); 
 
  header('Location: ' . $filename); 
  exit; 
}

$comment = mysqli_query($mysqli, "SELECT * FROM `comment` WHERE post_id = '$post_id[0]'"); 
$rows = mysqli_fetch_all($comment, MYSQLI_ASSOC); 

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
        <div class="reviews">
          <?php foreach($rows as $row):?>
        <div class="review_name">
          <?php echo $row['name'];?>
        </div>
        <div class="review_text">
          <?php echo $row['comment_id'];?>
        </div>
          <?php endforeach;?>
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
