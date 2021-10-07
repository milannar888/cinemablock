<?php
  $mysqli = mysqli_connect('localhost', 'root', 'root', 'cinemablock');

  if(mysqli_connect_error()){
    printf("Соединение не установлено", mysqli_connect_error());
    exit();
  }
  //$mysqli->set_charset('utf8');
  mysqli_query($mysqli, "set name utf8mb4");

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
    <div class="header">
      <div class="logo">
        <div class="logo_text">
          <h1><a href="/">КиноБлок</a></h1>
          <h2>Все новинки здесь!</h2>
        </div>
      </div>
      <div class="menubar">
        <ul class="menu">
          <li ><a href="index.php">Главная</a></li>
          <li><a href="films.php">Фильмы</a></li>
          <li><a href="series.php">Сериалы</a></li>
          <li class="selected"><a href="rating.php">Рейтинг фильмов</a></li>
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
      <div class="footer">
        <p>
          <a href="index.php">Главная</a> |
          <a href="films.php">Фильмы</a> |
          <a href="series.php">Сериалы</a> |
          <a href="rating.php">Рейтинг фильмов</a> |
          <a href="contact.php">Контакты</a> 
        </p>
      </div> 
    </div>
</body>
</html>