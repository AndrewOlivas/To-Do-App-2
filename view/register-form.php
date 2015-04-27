<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1 class="title">Register</h1>

<form class="form" method="POST" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div>
        <label for="email">E-mail: </label>
        <input type="text" name="email"/>
    </div>
    
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    
    <div>
        <button class="myButton2" type="submit">Submit</button>
    </div>
</form>