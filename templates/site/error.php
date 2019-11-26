<?php
use App\Core\Dispatcher;
/** @var string $text */
?>
<link rel="stylesheet" href="public/css/style_error.css">
<div class="mainimg">
    <div class="text"><?= $text ?></div>
        <div class="login">
            <a href="<?= Dispatcher::dispatcher()->encodeUri("site/loginform") ?>">Войти</a>
        </div>
        <div class="signup">
            <a href="<?= Dispatcher::dispatcher()->encodeUri("signup/showform") ?>">Регистрация</a>
        </div>
</div>
