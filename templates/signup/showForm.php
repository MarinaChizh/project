<link rel="stylesheet" href="public/css/style_login.css">
    <div>
        <?php
            foreach ($signUpErrors as $key => $value) {
                echo "<div class='alert alert-danger' role='alert'>$value</div>";
            } 
        ?>
    </div>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
            <h3>Регистрация</h3>
        </div>
        <form action="<?= $SignUpURL ?>" method="POST">
            <input type="text" name="name" value="<?= $newSignUpDate['name'] ?? '' ?>" placeholder = "Введите имя"> 
            <input type="text" name="surname" value="<?= $newSignUpDate['surname'] ?? '' ?>" placeholder = "Введите фамилию">
            <input type="text" name="login" value="<?= $newSignUpDate['login'] ?? '' ?>" placeholder = "Введите логин">
            <input type="text" name="pass" placeholder = "Введите пароль">
            <input type="text" name="passrepeat" placeholder = "Повторите пароль">         
            <input type="submit" value="Регистрация"  class="fadeIn fourth">
        </form>
    </div>
</div>
    