<?php
  session_start();
  
  include "bd.php";

      if ($_SERVER["REQUEST_METHOD"] === 'POST'){  
      $search = $_POST['search_field'];  
      $result = mysqli_query($mysqli, "SELECT * FROM main WHERE `name` LIKE '%$search%'"); 
      $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);  
      }      

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
      /*foreach($rows as $row){*/
      $page = 'films';
      /*$page = $row['type'];
    }*/
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
    <h1>Результат поиска</h1>
    <div class="films_block">
    <?php if (!empty($result->num_rows == 0)) {?>
  <div class="error"><?php echo 'По вашему запросу ничего не найдено!' ?></div>
    <?php  } ?>
    <?php foreach($rows as $row):?>
      <a href="/page.php?id=<?php echo $row['post_id'];?>" class ="link"><?php echo $row['name'];?></a>
      <div class="description_film">
      <a href="/page.php?id=<?php echo $row['post_id'];?>"><img src="img/<?php echo $row['img'];?>" alt="Круэлла"></a>
    <?php echo $row['content'];?>
      </div>
    <?php endforeach;?>
    </div>
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