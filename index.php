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
  <!--<div class="wrap">-->
    <h1>Новые фильмы</h1>
    <div class="films_block">
     <div class="gallery" data-setting="setup1">
		    <div class="slider">
			    <div class="stage">
      
    <?php foreach($rows as $row):?>
      <div>
      <a href="/page.php?id=<?php echo $row['post_id'];?>"><img src="img/<?php echo $row['img'];?>" alt="<?php echo $row['name'];?>"></a>
      </div>
    <?php endforeach;?>
    </div>
		</div>
		<div class="control">
			<div class="nav-ctrl" data-hidden="true">
				<span class="prev" data-shift="prev">Назад</span>
				<span class="next" data-shift="next">Вперед</span>
			</div>
			<ul class="dots-ctrl" data-hidden="true"></ul>
		</div>
	</div>
  </div>
 
    <!--</div>-->

    
    <h1>Новые сериалы</h1>
    <div class="films_block">	  
     <div class="gallery" data-setting="setup1">
		    <div class="slider">
			    <div class="stage">
               
      <?php foreach($rows2 as $row2):?>  
        <div>
          
          <a href="/page.php?id=<?php echo $row2['post_id'];?>"><img src="img/<?php echo $row2['img'];?>" alt="<?php echo $row2['name'];?>" class="shown"></a>
          
        </div> 
      <?php endforeach;?>
      </div>
		</div>
		<div class="control">
			<div class="nav-ctrl" data-hidden="true">
				<span class="prev" data-shift="prev">Назад</span>
				<span class="next" data-shift="next">Вперед</span>
			</div>
			<ul class="dots-ctrl" data-hidden="true"></ul>
		</div>
	</div>
  </div>
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
<script type="text/javascript">
		const setting = {
			setup1: {
				// включаем постраничную навигацию
				dots: true,
				// включаем управление с клавиатуры клавишами навигации "вправо / влево"
				keyControl: true,
				// настройки галереи в зависимости от разрешения
				adaptive: {
					// настройка работает в диапазоне разрешений 320-560px
					320: {
						// одновременно выводится 1 элемент
						visibleItems: 1,
						// расстояние между изображениями 5px
						margin: 5,
						// запрещаем постраничную навигацию
						dots: false
					},
					// настройка работает в диапазоне разрешений 560-768px
					560: {
						// одновременно выводится 1 элемент
						visibleItems: 2,
						// расстояние между изображениями 5px
						margin: 5,
						// запрещаем постраничную навигацию
						dots: false
					},
					// настройка работает в диапазоне разрешений 768-1024px
					768: {
						// одновременно выводятся 2 элемента
						visibleItems: 3,
					},
					// настройка работает в диапазоне разрешений 1024 и выше
					1024: {
						// одновременно выводятся 3 элемента
						visibleItems: 4
					}
				}
			},
			setup2: {
				// одновременно выводится 4 элемента
				visibleItems: 4,
				// разрешаем постраничную навигацию
				dots: true,
				// разрешаем управление с клавиатуры клавишами навигации "вправо / влево"
				keyControl: true,
				// выключаем адаптивность
				responsive: false
			}
		};
	</script>

<script src="js/script2.js"></script>
</body>
</html>