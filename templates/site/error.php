
<?php
use App\Core\Dispatcher;
/** @var string $text */
?>
<link rel="stylesheet" href="public/css/style_erro.css">

<div class="container"> 
<div class="text_error">
<h1><?=$text?></h1>
</div>


<ul>
<li><a href="<?= Dispatcher::dispatcher()->encodeUri("site/loginform") ?>"><i class="fa fa-facebook" aria-hidden="true"><img src="public/img/login_105181.png"></i></a></li>
<li><a href="<?= Dispatcher::dispatcher()->encodeUri("signup/showform") ?>"><i class="fa fa-twitter" aria-hidden="true"><img src="public/img/editdocument_105148.png"></i></a></li>
<li><a href="http://project/home"><i class="fa fa-google-plus" aria-hidden="true"><img src="public/img/homepage_80953.png"></i></a></li>
</ul>
</div>


