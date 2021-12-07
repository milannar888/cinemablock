<?php
  session_start();
  
  include "bd.php";

  $result = mysqli_query($mysqli, 'SELECT * FROM main');

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    $page = 'rating';
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
<!-- Основной контент по середине страница рейтинг фильмов -->
    <div class="content">
      <table class="rating">
        <tr>
          <th></th>
          <th>Фильмы и Сериалы</th>
          <th class="center">Год</th>
          <th class="center">Рейтинг</th>
        </tr>
      <?php foreach($rows as $row):?>
        <tr>
          <td class="center"><img src="img/<?php echo $row['img'];?>"></td>
          <td><?php echo $row['post_id'];?> <a href="/page.php?id=<?php echo $row['post_id'];?>"><?php echo $row['name'];?></a></td>
          <td class="center"><?php echo $row['year'];?></td>
          <td class="center rating"><?php echo $row['rating'];?></td>
        </tr>
      <?php endforeach;?>
      </table>       
    </div>
  </div>     
<!-- Подвал сайта -->
  <?php
    include "footer.php";
  ?>     
  </div>
</body>
</html>