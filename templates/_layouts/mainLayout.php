<?php
use App\Core\{Auth};
use App\Core\Dispatcher;
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
  <link rel="stylesheet" href="public/css/style_main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#">TransLogist</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a  class="nav-link" href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= Dispatcher::dispatcher()->encodeUri("site/about") ?>">О нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='<?= Dispatcher::dispatcher()->encodeUri('cars/show', ['page' => 1]) ?>'>Автомобили</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= Dispatcher::dispatcher()->encodeUri("orders/show", ['page' => 1]) ?>">Заказы</a>
          </li>
              <?php
                  if (!isset($_SESSION['user']['cod'])) {
                    echo
                "<li class='nav-item'>
                    <a class='nav-link' href=" . Dispatcher::dispatcher()->encodeUri('site/loginform') . ">Войти на сайт</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link' href=" . Dispatcher::dispatcher()->encodeUri('signup/showform') . ">Регистрация</a>
                  </li>";}
                  else{ 
                  echo
                  "<div class='nav-item'>
                  ". Auth::currentUserInfo() ? '<div class="right-item"><a class="nav-link" href="?a=logout">Выход</a></div>' : "". "
                </div>";
                  }

                  if ($deleteEditAccess) {
                    echo
                  "<li class='nav-item'>
                    <a class='nav-link' href=" . Dispatcher::dispatcher()->encodeUri('usergroup/show', ['page' => 1]) . ">Группа пользователей</a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link' href=" . Dispatcher::dispatcher()->encodeUri('users/show', ['page' => 1]) . ">Пользователи</a>
                  </li>";
                  }
              ?>
        </ul>
      </div>
    </nav>
  <div>
    <?php $this->body(); ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>