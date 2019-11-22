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
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="public/css/style.css">




</head>

<body>
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
        <li class="right-item">
          <a href="<?= Dispatcher::dispatcher()->encodeUri("site/loginform") ?>">Войти на сайт</a>
        </li>
        <li class="right-item">
          <a href="<?= Dispatcher::dispatcher()->encodeUri("signup/showform") ?>">Регистрация</a>
        </li>
        <?php if ($deleteEditAccess) {
          echo"
        <li class='right-item'>
        <a href='<?= Dispatcher::dispatcher()->encodeUri('usergroup/show', ['page' => 1]) ?>'>User_group</a>
        </li>
        <li>
        <a href='<?= Dispatcher::dispatcher()->encodeUri('users/show', ['page' => 1]) ?>'>User</a> 
        </li>";
        }
        ?>
      </ul>
      <a class="navbar-logo" href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">
      <img src='public/css/123.png' width="300" height="220">
    </a>
    </div>
  </nav>
  
  <div>
    <?= Auth::currentUserInfo() . " " . (isset($_SESSION['user']) ? "<a href='?a=logout'>Выход</a>" : "") ?>
  </div>
  <br />
  

  <div>
    <?php $this->body(); ?>
  </div>


</body>

</html>