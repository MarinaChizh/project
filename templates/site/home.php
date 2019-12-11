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
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
<!--headin5_amrc-->
<p class="mb10">г.Витебск, ул. Терешковой, 11</p>
<p><i class="fa fa-location-arrow"></i> logist </p>
<p><i class="fa fa-phone"></i>  +375-33-3333333 </p>
<p><i class="fa fa fa-envelope"></i> info@example.com  </p>


</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Полезные ссылки</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="">Ссылка</a></li>
<li><a href="">Ссылка</a></li>
<li><a href="">Ссылка</a></li>
<li><a href="">Ссылка</a></li>
<li><a href="">Ссылка</a></li>
<li><a href="">Ссылка</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Info</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="">information</a></li>
<li><a href="">information</a></li>
<li><a href="">information</a></li>
<li><a href="">information</a></li>
<li><a href="">information</a></li>
<li><a href="h">information</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul2_amrc">
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#"></a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#"></a></p></li>
<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#"></a></p></li>
</ul>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class="container">
<ul class="foote_bottom_ul_amrc">
<li><a href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">Home</a></li>
<li><a href="<?= Dispatcher::dispatcher()->encodeUri("site/about") ?>">About</a></li>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright @2019 | Designed With by <a href="#">My</a></p>

<ul class="social_footer_ul">
<li><a href="http://project/home"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="http://project/home"><i class="fab fa-twitter"></i></a></li>
<li><a href="http://project/home"><i class="fab fa-linkedin"></i></a></li>
<li><a href="http://project/home"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>

</footer>
</body>
