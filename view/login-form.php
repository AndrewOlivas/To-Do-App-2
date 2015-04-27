<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1 class="title">Login</h1>

<form class="form" method="POST" action="<?php echo $path . "controller/login-user.php"; ?>">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>

    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" />
    </div>
    <br>
    <div>
        <button class="myButton2" type="submit">Submit:</button>
    </div>

</form>