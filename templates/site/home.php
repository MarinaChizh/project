<?php
use App\Core\Dispatcher;
/** @var string $title */
?>

  <title><?= $title ?></title>
  <link rel="stylesheet" href="public/css/style_home.css">
  
  
<body>
<!-- <h1><?= ($title) ?></h1> -->
<div class="mainimg">
  <span>
  Доставка грузов
    <div class="zakaz">
    <a href="<?= Dispatcher::dispatcher()->encodeUri("orders/show", ['page' => 1]) ?>">Оставить заказ</a>
    </div>
  </span>
</div>
</body>
