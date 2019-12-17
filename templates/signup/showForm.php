<link rel="stylesheet" href="public/css/style_loginform.css">

    <div>
        <?php
            foreach ($signUpErrors as $key => $value) {
                echo "<div class='alert alert-danger' role='alert'>$value</div>";
            } 
        ?>
    </div>

    <div class="loginform">
        <div>
            <h3>Регистрация</h3>
        </div>
        <form action="<?= $SignUpURL ?>" method="POST">
        <div class="form-group"><input class="form-control form-control-lg" type="text" name="name" value="<?= $newSignUpDate['name'] ?? '' ?>" placeholder = "Введите имя"></div>
        <div class="form-group"><input class="form-control form-control-lg" type="text" name="surname" value="<?= $newSignUpDate['surname'] ?? '' ?>" placeholder = "Введите фамилию"></div>
        <div class="form-group"><input class="form-control form-control-lg" type="text" name="login" value="<?= $newSignUpDate['login'] ?? '' ?>" placeholder = "Введите логин"></div>
        <div class="form-group"><input class="form-control form-control-lg" type="text" name="pass" placeholder = "Введите пароль"></div>
        <div class="form-group"><input class="form-control form-control-lg" type="text" name="passrepeat" placeholder = "Повторите пароль"></div>      
        <div class="form-group"><input class="form-control form-control-lg" type="submit" value="Регистрация"  class="fadeIn fourth"></div>
        </form>
    </div>

    