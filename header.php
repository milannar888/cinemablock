<?php
  include "bd.php";

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


