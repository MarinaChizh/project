<link rel="stylesheet" href="public/css/style_login.css">
<?php
use App\Core\Dispatcher;
/** @var string $text */
/** @var string $loginURL */
?>

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
</div>

