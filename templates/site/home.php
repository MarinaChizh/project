<?php
use App\Core\Dispatcher;
/** @var string $title */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  <style type="text/css">
.mainimg{
    position: relative;
    display:inline-block;
}

.mainimg span{
    display:inline-block;
    position:absolute;
    top:150px;
    left:150px;
    font-size: 18px;
    color:#FFF;
    font-family:Arial, Helvetica, sans-serif;
    font-size:80px;
    background-color:rgba(0,0,0,.4);
    padding:100px 100px;
}

.zakaz a{
    text-decoration: none;
  outline: none;
  display: inline-block;
  color: black;
  padding: 20px 30px;
  margin: 10px 20px;
  border-radius: 10px;
  font-family: 'Montserrat', sans-serif;
  font-size: 15px;
  text-transform: uppercase;
  letter-spacing: 2px;
  background-image: linear-gradient(to right, #9EEFE1 0%, #4830F0 51%, #9EEFE1 100%);
  background-size: 200% auto;
  box-shadow: 0 0 20px rgba(0,0,0,.1);
  transition: .5s;
}

.zakaz a:hover {background-position: right center;}








</style>
</head>
<body>
<!-- <h1><?= ($title) ?></h1> -->
<div class="mainimg">
<img src="122185-avto-gruzovye_perevozki-trejler_telezhki_semi-trejler_telezhki-freightliner_gruzoviki-1920x1080.jpg">
<span>
Доставка грузов
<div class="zakaz">
<a href="<?= Dispatcher::dispatcher()->encodeUri("orders/show", ['page' => 1]) ?>">Оставить заказ</a>
</div>


</span>
</div>
</body>
</html>