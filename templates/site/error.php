<?php
use App\Core\Dispatcher;
/** @var string $text */
?>
<style type="text/css">
.login {
    display:inline-block;
    position:absolute;
    top:100px;
    left:500px;
}

.login a{
    text-decoration: none;
  outline: none;
  display: inline-block;
  color: black;
  padding: 20px 120px;
  margin: 10px 20px;
  border-radius: 10px;
  font-family: 'Montserrat', sans-serif;
  font-size: 15px;
  text-transform: uppercase;
  letter-spacing: 2px;
  background-image: linear-gradient(to right, #9EEFE1 0%, #4830F0 51%, #9EEFE1 100%);
  background-size: 200% auto;
  box-shadow: 0 0 20px rgba(0,0,0,.1);
  transition: .5s;
}

.login a:hover {background-position: right center;}

.signup {
    display:inline-block;
    position:absolute;
    top:100px;
    left:800px;
}

.signup a{
    text-decoration: none;
  outline: none;
  display: inline-block;
  color: black;
  padding: 20px 80px;
  margin: 10px 20px;
  border-radius: 10px;
  font-family: 'Montserrat', sans-serif;
  font-size: 15px;
  text-transform: uppercase;
  letter-spacing: 2px;
  background-image: linear-gradient(to right, #9EEFE1 0%, #4830F0 51%, #9EEFE1 100%);
  background-size: 200% auto;
  box-shadow: 0 0 20px rgba(0,0,0,.1);
  transition: .5s;
}

.signup a:hover {background-position: right center;}
.mainimg{
    position: relative;
    display:inline-block;
}

.text{
    text-align:center
}


</style>
<div class="mainimg">
<div class="text"><?= $text ?></div>
<img src="122185-avto-gruzovye_perevozki-trejler_telezhki_semi-trejler_telezhki-freightliner_gruzoviki-1920x1080.jpg">
<div class="login">
<a href="<?= Dispatcher::dispatcher()->encodeUri("site/loginform") ?>">Login</a>
</div>
<div class="signup">
<a href="<?= Dispatcher::dispatcher()->encodeUri("signup/showform") ?>">Регистрация</a>
</div>
</div>