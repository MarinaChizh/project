<?php
use App\Core\Dispatcher;
/** @var string $text */
/** @var string $loginURL */
?>
<link rel="stylesheet" href="public/css/style_login.css">
<link rel="stylesheet" href="public/css/style.css">
<!-- <div> -->
<div class="two"><h1>TransLogist</h1></div>
<div class="tex"><h1>Тех поддержка</h1></div>
    <form action="<?= $loginURL ?>" method="POST" class="ui-form">
    <h3>Войти на сайт</h3>
        <div class="form-row">
            <input type="text" name="user" id="user" required autocomplete="off"><label for="user">User</label>
        </div>
        <div class="form-row">
            <input type="password" name="pass" id="password" required autocomplete="off" ><label for="password">Пароль</label>
        </div>
        <p><input type="submit" value="Войти"></p>  <br/>
        <div class="button-home">
        <a href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">Home</a> 
        </div> 
    </form>
<!-- </div> -->
