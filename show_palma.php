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
<!-- Основной контент по середине Пальма -->
    <div class="content">
      <h1>Пальма</h1>
        <!-- Видео -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/2t8ckmFuAcc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="info_film_page">
          <span class="label">рейтинг: </span><span class="value">7.3 / 10</span>
          <span class="label">год: </span><span class="value">2021</span>
          <span class="label">режиссер: </span><span class="value">Александр Домогаров мл.</span>
        </div>
        <!-- Описание фильма -->
        <hr>
        <h2>Описание Пальма</h2>
        <div class="description_film">
          <img src="img/palma.jpg" alt="Пальма" width="200" height="250">
          Овчарка по кличке Пальма вынужденно расстается с хозяином: тот улетает за границу, а верную собаку не берут на рейс и оставляют прямо на летном поле. Пальма прячется в аэропорту и каждый день встречает самолеты в надежде, что хозяин вернулся. Но время идет… 9-летний Коля — тоже новенький в аэропорту: он потерял маму и переехал к отцу-пилоту, которого почти не знает. Пальма становится для мальчика родственной душой и лучшим другом. А отцу Коли, летчику Лазареву, предстоит заслужить доверие и любовь сына, сделав нелегкий выбор между карьерой и семьей. И найти способ не разлучить друзей, когда за Пальмой однажды возвращается хозяин.
        </div>
       <!--  Отзывы -->
        <hr>
        <h2>Отзывы об Пальма</h2>
        <!-- Первый отзыв -->
        <div class="reviews">
          <div class="review_name">
            Владимир
          </div>
          <div class="review_text">
            Очень ярко талантливо рассказана давняя история хотя может быть немного приукрашено в свете сегодняшних реалий но всё равно очень приятно и эмоционально Уверен что не только женщины плакали во время просмотра но и у многих мужчин в некоторых сценах слезы сами наворачивались на глаза Безусловно это великолепная удача молодого режиссёра  и очень органичны и мальчик и собака и вот почему то я заметил что чем меньше фильм рекламируется хотя бы на ТВ тем приятнее его смотреть Может это связано с тем что  то  о чём больше говорят   без неё смотреть не будут а шедевры в большой рекламе  и не нуждаются
          </div>
        </div>
        <!-- Второй отзыв -->
          <div class="reviews">
        <div class="review_name">
          Марина
        </div>
        <div class="review_text">
          Фильм просто замечательный. Снят отлично,очень трогательно, фильм не однодневка, вызывает какие то противоречивые чувства, с одной стороны очень жаль собаку, что её так предал хозяин, так жестоко с ней поступил, с другой стороны и радость берет за неё, что все же о ней позаботились, и все у неё хорошо сложилось. Актёры все хорошие, и играют достоверно, никто не раздражает. Ну и главная актриса Лили, красавица невероятная, душка такая, обаяшка, и умница, а эти глаза, сколько в них души, печали, отчаинья передано, вот артистка так артистка настоящая) Спасибо всем создателям, за такой замечательный фильм. 
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

