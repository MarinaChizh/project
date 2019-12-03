<?php

use App\Core\{Auth, ErrorHandler};
use App\Core\Dispatcher;
use App\View\Helper\HTML;
/* @var $this App\View\View */

/** @var string $title */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/style_show.css">
  <link rel="stylesheet" href="public/css/style_singup.css">
  <link rel="stylesheet" href="public/css/style_AddEditForm.css">
</head>

<body>
  <div class="two">
    <h1>TransLogist</h1>
    <h2>ГРУЗОПЕРЕВОЗКА <br> в любую точку <br> +375 xx xxx xx xx</h2>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <nav class="top-menu">
      <div>
        <ul class="menu-main">
          <li class="left-item">
            <a href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">Главная</a>
          </li>
          <li class="left-item">
            <a href="<?= Dispatcher::dispatcher()->encodeUri("site/about") ?>">О нас</a>
          </li>
          <li class="left-item">
            <a href='<?= Dispatcher::dispatcher()->encodeUri('cars/show', ['page' => 1]) ?>'>Автомобили</a>
          </li>
          <li class="left-item">
            <a href="<?= Dispatcher::dispatcher()->encodeUri("orders/show", ['page' => 1]) ?>">Заказы</a>
          </li>
          <?php
          if (!isset($_SESSION['user']['cod'])) {
            echo
         "<li class='right-item'>
            <a href=" . Dispatcher::dispatcher()->encodeUri('site/loginform') . ">Войти на сайт</a>
          </li>
          <li class='right-item'>
            <a href=" . Dispatcher::dispatcher()->encodeUri('signup/showform') . ">Регистрация</a>
          </li>";}
          else{ 
          echo
          "<div class='right-item'>
          ". Auth::currentUserInfo() . ' ' . (isset($_SESSION['user']) ? '<div class="exit"><a href="?a=logout">Выход</a></div>' : ""). "
        </div>";
          }

          if ($deleteEditAccess) {
            echo
          "<li class='left-item'>
            <a href=" . Dispatcher::dispatcher()->encodeUri('usergroup/show', ['page' => 1]) . ">Группа пользователей</a>
           </li>
           <li>
            <a href=" . Dispatcher::dispatcher()->encodeUri('users/show', ['page' => 1]) . ">Пользователи</a>
           </li>";
          }
          
          
          ?>




        </ul>
        <a class="navbar-logo" href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">
          <img src='public/css/123.png' width="300" height="220">
        </a>
      </div>
    </nav>
  </nav>

  
  <br />


  <div>
    <?php $this->body(); ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>