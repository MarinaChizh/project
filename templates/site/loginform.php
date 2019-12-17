<?php
use App\Core\Dispatcher;
/** @var string $text */
/** @var string $loginURL */
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="public/css/1.css">
<!-- <link rel="stylesheet" href="public/css/style_login.css">
<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
        <h1>TransLogist</h1>
        </div>
        <form action="<?= $loginURL ?>" method="POST">
            <input type="text" name="user" id="login" placeholder="username">
            <input type="text" name="pass" id="password" class="fadeIn third" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Войти">
        </form>    
            <div id="formFooter">
            <a class="underlineHover" href="<?= Dispatcher::dispatcher()->encodeUri('signup/showform') ?> ">Registration</a><br><br>
            <a class="underlineHover" href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">Go to the Site</a> 
            </div> 
    </div>
</div> -->

<!-- <link rel="stylesheet" href="public/css/style_login.css"> -->

    <div class="loginform">
        <div class="fadeIn first">
        <h1>TransLogist</h1>
        </div>
        <form action="<?= $loginURL ?>" method="POST">
            <div class="form-group"><input class="form-control form-control-lg" type="text" name="user" id="login" placeholder="username"></div>
            <div class="form-group"><input class="form-control form-control-lg" type="text" name="pass" id="password" class="fadeIn third" placeholder="password"></div>
            <button type="submit" class="btn btn-primary">Войти</button>
        </form>    
            <div id="formFooter">
            <a class="underlineHover" href="<?= Dispatcher::dispatcher()->encodeUri('signup/showform') ?> ">Registration</a><br><br>
            <a class="underlineHover" href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">Go to the Site</a> 
            </div> 
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
