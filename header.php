<?php
  $mysqli = mysqli_connect('localhost', 'root', 'root', 'cinemablock');

  if(mysqli_connect_error()){
    printf("Соединение не установлено", mysqli_connect_error());
    exit();
  }
  //$mysqli->set_charset('utf8');
  mysqli_query($mysqli, "set name utf8mb4");

  $result5 = mysqli_query($mysqli, 'SELECT * FROM header');

  $rows5 = mysqli_fetch_all($result5, MYSQLI_ASSOC);
  
  //print_r($rows);
  
  $mysqli->close(); 
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
    <?php foreach($rows5 as $row5):?>
      <li <?php echo ($page == $row5['page'] ? "class = selected" : "")?>><a href="<?php echo $row5['linktitle'];?>"><?php echo $row5['title'];?></a></li>
    <?php endforeach;?> 
    </ul>
  </div>
</div>


