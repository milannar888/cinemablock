<?php
if (empty($_GET['id'])) {
  echo "Empty id";
  exit;
}

session_start();

include "bd.php";

function get_by_id($id){
 global $mysqli;
 $res = $mysqli->query("SELECT * FROM `main` WHERE post_id = '$id'");
 return mysqli_fetch_assoc($res);
}

$res = get_by_id($_GET['id']);

include "comment_list.php";

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
      $page = $res['type'];
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
      <h1><?php echo $res['name'];?></h1>
<!-- Видео -->
      <iframe width="560" height="315" src="<?php echo $res['video'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <div class="info_film_page">
          <span class="label">рейтинг: </span><span class="value"><?php echo $res['rating'];?> / 10</span>
          <span class="label">год: </span><span class="value"><?php echo $res['year'];?></span>
          <span class="label">режиссер: </span><span class="value"><?php echo $res['producer'];?></span>
        </div>
<!-- Описание фильма -->
        <hr>
        <h2>Описание: </h2>
        <div class="description_film">
          <img src="img/<?php echo $res['img'];?>" alt="<?php echo $res['name'];?>" width="160" height="210">
          <?php echo $res['content'];?>
        </div>
<!--  Отзывы -->
        <hr>
        <h2>Отзывы</h2>
        <?php
          include "action_add_comment.php";
        ?> 
<!-- Форма оставить отзыв -->
        <?php
          include "add_comment_form.php";
        ?> 
      </div>
    </div>
<!-- Подвал сайта -->
      <?php
        include "footer.php";
      ?> 
  </div>
</body>
</html>