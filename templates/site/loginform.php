<?php
use App\Core\Dispatcher;
/** @var string $text */
/** @var string $loginURL */
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="public/css/style_loginform.css">

    <div class="loginform">
        <div>
            <h1>TransLogist</h1>
        </div>
        <form action="<?= $loginURL ?>" method="POST">
            <div class="form-group"><input class="form-control form-control-lg" type="text" name="user" id="login" placeholder="username"></div>
            <div class="form-group"><input class="form-control form-control-lg" type="text" name="pass" id="password" placeholder="password"></div>
            <button type="submit" class="btn btn-primary">Войти</button>
        </form>    
        <br>
        <div class="formFooter">
            <a  href="<?= Dispatcher::dispatcher()->encodeUri('signup/showform') ?> ">Регистрация</a><br><br>
            <a  href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">Главная</a> 
        </div> 
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
