<?php
  include "bd.php";

  $result = mysqli_query($mysqli, 'SELECT * FROM films');

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
<!-- Основной контент по середине страница о фильмах -->
    <div class="content"><?php foreach($rows as $row):?>
      <div class="info_film">
        <img src="img/<?php echo $row['img'];?>">
        <?php echo $row['maintext'];?>
        <!--<img src="img/cruela3.jpg" >-->
          <!--Великобритания, 1960-е годы. Эстелла была необычным ребёнком, и особенно трудно ей было мириться со всякого рода несправедливостью. Вылетев из очередной школы, она с мамой отправляется в Лондон. По дороге они заезжают в особняк известной модельерши по имени Баронесса, где в результате ужасного несчастного случая мама погибает. Добравшись до Лондона, Эстелла знакомится с двумя мальчишками — уличными мошенниками Джаспером и Хорасом. 10 лет спустя та же компания промышляет на улицах британской столицы мелким воровством, но Эстелла никак не может оставить мечту сделать карьеру в мире моды. Хитростью устроившись в фешенебельный универмаг, девушка привлекает внимание Баронессы, и та берёт её к себе в штат дизайнеров.-->
        <div class="button"><a href="<?php echo $row['linkfilm'];?>">Смотреть</a>
        </div>
      </div>
        <!--<div class="info_film">
          <img src="img/Assasin.jpg">
          В неком фэнтезийном мире правит жестокий Бог, которому нужны лишь смерть и разрушения. Потеряв сестру, но обретя волшебный доспех, молодой воин Кунвэнь отправляется в путешествие, чтобы разыскать и убить Бога. В это время в нашем мире мужчина Гуань Нин уже шесть лет находится на грани отчаяния, разыскивая пропавшую дочку. Он выходит на торговцев детьми, но полиция ошибочно принимает его за преступника и арестовывает. Сбежать Нину помогает ассистентка влиятельного бизнесмена и предлагает ему сделку. Один популярный писатель в данный момент пишет роман в жанре фэнтези, который каким-то образом вредит здоровью её босса, а Нин в обмен на информацию о местонахождении дочери должен этого писателя убить.
          <div class="button"><a href="show_assasin.php">Смотреть</a>
          </div>
        </div>
        <div class="info_film">
          <img src="img/devitaev2.jpg">
          Лето 1944 года. Советские войска ведут наступление, но враг еще очень силен. Летчик-истребитель Михаил Девятаев попадает в плен. Ему предстоит сделать выбор — вернуться в небо, продолжив войну на стороне врага, или отправиться в концлагерь на остров Узедом. Отчаянный ас Девятаев выбирает третье — побег. Но с засекреченного острова, где идут испытания немецких крылатых ракет, нельзя убежать. Зато можно улететь — на аэродроме стоит новейший вражеский бомбардировщик с «оружием возмездия» Третьего рейха на борту. Улететь — и совершить самый дерзкий побег в военной истории.
          <div class="button"><a href="show_devitaev.php">Смотреть</a>
          </div>
        </div>
        <div class="info_film">
          <img src="img/palma.jpg">
          Овчарка по кличке Пальма вынужденно расстается с хозяином: тот улетает за границу, а верную собаку не берут на рейс и оставляют прямо на летном поле. Пальма прячется в аэропорту и каждый день встречает самолеты в надежде, что хозяин вернулся. Но время идет… 9-летний Коля — тоже новенький в аэропорту: он потерял маму и переехал к отцу-пилоту, которого почти не знает. Пальма становится для мальчика родственной душой и лучшим другом. А отцу Коли, летчику Лазареву, предстоит заслужить доверие и любовь сына, сделав нелегкий выбор между карьерой и семьей. И найти способ не разлучить друзей, когда за Пальмой однажды возвращается хозяин.
          <div class="button"><a href="show_palma.php">Смотреть</a>
          </div>
        </div>-->
        <?php endforeach;?>
    </div > 
  </div >
<!-- Подвал сайта -->
    <?php
      include "footer.php";
    ?>
  </div>
</body>
</html>