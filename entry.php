<div class="sidebar">
    <h2>Вход</h2>

  <?php 
    if(isset($_SESSION['user'])){?>
      <div class="btn_entry"><a href="lk.php">Личный кабинет</a></div>
  <?php }else{?>
      <div class="btn_entry"><a href="avto.php">Вход</a></div>
      <br>
      <div class="btn_entry"><a href="register.php">Регистрация</a></div>
  <?php }?>
</div>