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
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">TransCompany</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= Dispatcher::dispatcher()->encodeUri("site/about") ?>">About</a>
        </li>

        <li class="nav-item">
          <a class='nav-link' href='<?= Dispatcher::dispatcher()->encodeUri('cars/show', ['page' => 1]) ?>'>Cars</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= Dispatcher::dispatcher()->encodeUri("orders/show", ['page' => 1]) ?>">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= Dispatcher::dispatcher()->encodeUri("site/loginform") ?>">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= Dispatcher::dispatcher()->encodeUri("signup/showform") ?>">Sign Up</a>
        </li>


        <?php if ($deleteEditAccess) {
          echo "
        <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            US
          </a>
          <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
            <a class='dropdown-item' href='<?= Dispatcher::dispatcher()->encodeUri('usergroup/show', ['page' => 1]) ?>'>User_group</a>
            <a class='dropdown-item' href='<?= Dispatcher::dispatcher()->encodeUri('users/show', ['page' => 1]) ?>'>User</a>
          </div>
        </li>
        ";
        }
        ?>
        
      </ul>
    </div>
  </nav>
  <!-- <div class="container"> -->

  <div id="user_state" class="float-right">
    <?= Auth::currentUserInfo() . " " . (isset($_SESSION['user']) ? "<a href='?a=logout'>Logout</a>" : "") ?>
  </div>
  <br />
  <!-- </div> -->

  <div id="maincontent">
    <?php $this->body(); ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>