<div class="send">
  <form id="review" action="<?php  'page.php?id =' $_GET['id']?>" method="POST">
    <input name="review_name" type="text" placeholder="ваше имя" required>
    <textarea name="review_text" required ></textarea>
    <input type="hidden" name="date" value="<?php echo $_GET['id'] ?>">
    <input class="btn" type="submit" value="отправить">
  </form>
 </div>