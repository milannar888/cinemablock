<?php
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);

  $menu =   array (
    array (
      'id' => '1',
      'title' => 'Главная',
      'linktitle' => 'index.php',
      'page' => 'index',
    ),
    array (
      'id' => '2',
      'title' => 'Фильмы',
      'linktitle' => 'films.php',
      'page' => 'films',
    ),
    array (
      'id' => '3',
      'title' => 'Сериалы',
      'linktitle' => 'series.php',
      'page' => 'series',
    ),
    array (
      'id' => '4',
      'title' => 'Рейтинг фильмов',
      'linktitle' => 'rating.php',
      'page' => 'rating',
    ),
    array (
      'id' => '5',
      'title' => 'Контакты',
      'linktitle' => 'contact.php',
      'page' => 'contact',
    ),
  )
?>

<div class="header">
  <div class="logo">
    <div class="logo_text">
      <h1><a href="/">КиноБлок</a></h1>
      <h2>Все новинки здесь!</h2>
    </div>
  </div>
  <div class="menubar">
    <ul class="menu">
    <?php foreach($menu as $row5):?>
      <li <?php echo ($page == $row5['page'] ? "class = selected" : "")?>><a href="<?php echo $row5['linktitle'];?>"><?php echo $row5['title'];?></a></li>
    <?php endforeach;?> 
    </ul>
  </div>
</div>
