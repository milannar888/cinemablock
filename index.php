<?php
  session_start();
  
  include "bd.php";
 
  $result = mysqli_query($mysqli, 'SELECT * FROM main WHERE type = "films"');
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  $result2 = mysqli_query($mysqli, 'SELECT * FROM main WHERE type = "series"');
  $rows2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

  $result3 = mysqli_query($mysqli, 'SELECT * FROM news');
  $rows3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
  
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
    $page = 'index';
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
<!-- Основной контент по середине -->
  <div class="content">
    <h1>Новые фильмы</h1>
    <div class="films_block">
    <?php foreach($rows as $row):?>
      <a href="/page.php?id=<?php echo $row['post_id'];?>"><img src="img/<?php echo $row['img'];?>" alt="Круэлла"></a>
    <?php endforeach;?>
    </div>
    <h1>Новые сериалы</h1>
    <div class="films_block">
      <?php foreach($rows2 as $row2):?>  
        <a href="/page.php?id=<?php echo $row2['post_id'];?>"><img src="img/<?php echo $row2['img'];?>" alt="Круэлла"></a>
      <?php endforeach;?>
    </div>
<!-- Пост на странице --> 
  <div class="posts"><?php foreach($rows3 as $row3):?>
    <hr>
    <h2><a href="about_palma.php"><?php echo $row3['title'];?></a></h2>
    <div class="posts_content">
    <p>
    <?php echo $row3['content'];?>
    </p>
  </div>
    <p><a href="<?php echo $row3['linknew'];?>">читать</a></p>
    <?php endforeach;?>
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