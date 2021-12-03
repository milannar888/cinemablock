<?php
session_start();

include "bd.php";

$filename = basename(__FILE__); 
//var_dump($filename );
$query = sprintf("SELECT post_id FROM `main` WHERE linkpage =  '%s'", $filename); 
$result = mysqli_query($mysqli, $query); 
//var_dump($query);
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

function get_by_id($id){
  global $mysqli;
  $resul = $mysqli->query("SELECT * FROM main WHERE post_id = $id");
  
  foreach($resul as $res){
    return $res;
  }
}
//print_r($rows);

$res = get_by_id($_GET['id']);


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
    <?/*php foreach($resul as $res): */?>
      <h1><?php echo $res['name'];?></h1>
        <!-- Видео -->
      <iframe width="560" height="315" src="<?php echo $res['video'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="info_film_page">
          <span class="label">рейтинг: </span><span class="value"><?php echo $res['rating'];?></span>
          <span class="label">год: </span><span class="value"><?php echo $res['year'];?></span>
          <span class="label">режиссер: </span><span class="value"><?php echo $res['producer'];?></span>
        </div>
        <!-- Описание фильма -->
        <hr>
        <h2>Описание: </h2>
        <div class="description_film">
          <img src="img/<?php echo $res['img'];?>" alt="<?php echo $res['name'];?>" width="160" height="210">
          <?php echo $res['maintext'];?>
        <?php /*endforeach;*/?>
        </div>
       <!--  Отзывы -->
        <hr>
        <h2>Отзывы</h2>
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
       <?php foreach($rows as $row):?> <!--делаем перебор полученного массива-$rows со значениями $row-->
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