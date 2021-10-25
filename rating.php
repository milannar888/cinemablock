<?php
  include "bd.php";

  $result = mysqli_query($mysqli, 'SELECT * FROM rating');

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  //print_r($rows);
  
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
          <th>Фильмы</th>
          <th class="center">Год</th>
          <th class="center">Рейтинг</th>
        </tr>
      <?php foreach($rows as $row):?>
        <tr>
          <td class="center"><img src="img/<?php echo $row['img'];?>"></td>
          <td><?php echo $row['id'];?> <a href="<?php echo $row['linkrating'];?>"><?php echo $row['name'];?></a></td>
          <td class="center"><?php echo $row['year'];?></td>
          <td class="center rating"><?php echo $row['rating'];?></td>
        </tr>
      <?php endforeach;?>
          <!--<tr>
            <td class="center"><img src="img/palma.jpg"></td>
            <td>2. <a href="show_palma.php">Пальма</a></td>
            <td class="center">2021</td>
            <td class="center rating">7.3</td>
          </tr>
          <tr>
            <td class="center"><img src="img/Assasin.jpg"></td>
            <td>3. <a href="show_assasin.php">Ассасин: битва миров</a></td>
            <td class="center">2021</td>
            <td class="center rating">6.2</td>
          </tr>
          <tr>
            <td class="center"><img src="img/devitaev2.jpg"></td>
            <td>4. <a href="show_devitaev.php">Девятаев</a></td>
            <td class="center">2021</td>
            <td class="center rating">6.2</td>
          </tr>-->
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