<div class="reviews">
  <?php foreach($rows as $row):?> <!--делаем перебор полученного массива-$rows со значениями $row-->
  <div class="review_name">
    <?php echo $row['name'];?> <!--получаем значение из массива с ключем name--> 
  </div>
  <div class="review_text">
    <?php echo $row['content'];?> <!-- получаем значение из массива с ключем content--> 
  </div>
  <?php endforeach;?> <!--закрываем цикл-->
</div>