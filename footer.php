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

<div class="footer">  
  <p>
  <?php foreach($rows5 as $row5):?>
    <a href="<?php echo $row5['linktitle'];?>"><?php echo $row5['title'];?></a> |
  <?php endforeach;?>  
  </p>
</div> 