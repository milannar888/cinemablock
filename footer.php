<?php
  include "bd.php";

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