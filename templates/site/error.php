
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
<li><a href="<?= Dispatcher::dispatcher()->encodeUri("site/loginform") ?>"><img src="public/img/login_105181.png"></a></li>
<li><a href="<?= Dispatcher::dispatcher()->encodeUri("signup/showform") ?>"><img src="public/img/editdocument_105148.png"></a></li>
<li><a href="http://project/home"><img src="public/img/homepage_80953.png"></a></li>
</ul>
</div>


