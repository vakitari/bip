<?php
$view->component('start');
?>
<div class="pay-page">
  <div class="payment">
    <p>И того: 10000р</p>
    <p>Доставка или заберете сами?</p>
    <button id="button1" value="Самовывоз"></button>
    <button id="button2" value="Доставка"></button>

    <p>123123</p>
    <p>123123</p>
  </div>

  <div class="prod-div">
    <img src="views/components/img/Rectangle.png" alt="12312">
    <p>название: жопоглазки</p>
    <p>цена:10000</p>
    <p>кол-во цветов: 10</p>
    
    <div class="p_b">
      <a href="/bas/buyFlow" class="btn btn-outline-success" type="button" value="купить">купить </a>
      <a href="/bas/description" class="btn btn-outline-success" type="button" value="Подробнее">Подробнее</a>
    </div>
  </div>

</div>
<script>
  button1.onclick = function() {
    <?php 
      $_SESSION['onc'] = true;
      ?>
  };
   button2.onclick = function() {
    <?php 
      $_SESSION['onc2'] = false;
      ?>
  };
</script>
<?php
dd($_SESSION);

$view->component('end')
?>