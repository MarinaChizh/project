<?php
use App\Core\Dispatcher;
/** @var string $text */
?>
<h3 style="text-align:center"><?= $text ?></h3>
<div class="screencenter">
<a href="<?= Dispatcher::dispatcher()->encodeUri("site/loginform") ?>">Login</a>
</div>