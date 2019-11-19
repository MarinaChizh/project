<?php
use App\Core\Dispatcher;
/** @var string $text */
/** @var string $loginURL */
?>

<div>
    <form action="<?= $loginURL ?>" method="POST" class="text-center border border-light p-5">
        <label>
            <input class="form-control mb-4"type="text" name="user" placeholder="User">
        </label><br/>
        <label>
            <input class="form-control mb-4"type="password" name="pass" placeholder="Password">
        </label><br/>
        <input class="btn btn-info my-4" type="submit" value="Login">  <br/>
        <div class="btn btn-info my-4">
        <a href="<?= Dispatcher::dispatcher()->encodeUri("site/home") ?>">Home</a> 
        </div> 
    </form>
</div>
