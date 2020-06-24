<?php

require_once 'login_helper.php';
session();
require_once 'process_login.php';
?>



<form action = "services.html" method="post">
<?php
if(isset($error['email'])){
    echo "<p>{$error['email']}</p>";
}
?>

<input type="email" name="email" placeholder="Email" required/><br>
<?php
if(isset($error['password'])){
    echo "<p>{$error['password']}</p>";
}
?>
<input type="password" name="password" placeholder="Password" required/><br>
<button type="submit">Login</button>
</form>