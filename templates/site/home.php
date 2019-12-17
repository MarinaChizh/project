<?php
use App\Core\Dispatcher;
/** @var string $title */
?>


  <title><?= $title ?></title>
  <link rel="stylesheet" href="public/css/style_home.css">
  
<body>
<header class="header">
<div class="overlay"></div>
<div class="container">
<div class="description">
   <h3>
    Hello ,Welcome 
    <p>
    Рады видеть на нашем сайте. Вы можете оставить свой заказ</p>
    <button class="btn btn-outline-secondary"><a href="<?= Dispatcher::dispatcher()->encodeUri("orders/show", ['page' => 1]) ?>" style="color: white">Оставить заказ</a></button>
   </h3>
  </div>
   </div>
</header>
  



<!-- footer -->
<footer class="footer">
<div class="container bottom_border">
  <div class="row">
    <div class=" col-sm-3 col-md col-sm-4  col-12 col">
      <h5 class="headin">Контакты</h5>
      <p>г.Витебск, ул. Терешковой, 11</p>
      <p><i class="fa fa-location-arrow"></i> logist </p>
      <p><i class="fa fa-phone"></i>  +375-33-3333333 </p>
      <p><i class="fa fa fa-envelope"></i> info@example.com  </p>
    </div>

    <div class=" col-sm-4 col-md  col-6 col">
      <h5 class="headin">Полезные ссылки</h5>
      <ul class="footer_ul">
      <li><a href="">Ссылка</a></li>
      <li><a href="">Ссылка</a></li>
      </ul>
    </div>

    <div class=" col-sm-4 col-md  col-6 col">
      <h5 class="headin">Info</h5>
      <ul class="footer_ul">
      <li><a href="">information</a></li>
      <li><a href="">information</a></li>
      </ul>
    </div>
</div>
</div>



<div class="container">
  <ul class="footer_bottom_ul">
  <li><a href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">Home</a></li>
  <li><a href="<?= Dispatcher::dispatcher()->encodeUri("site/about") ?>">About</a></li>
  </ul>
<p class="text-center">Copyright @2019 | Designed With by <a href="#">My</a></p>

  <ul class="social_footer_ul">
  <li><a href="http://project/home"><i class="fab fa-facebook-f"></i></a></li>
  <li><a href="http://project/home"><i class="fab fa-twitter"></i></a></li>
  <li><a href="http://project/home"><i class="fab fa-instagram"></i></a></li>
  </ul>
</div>

</footer>
</body>
