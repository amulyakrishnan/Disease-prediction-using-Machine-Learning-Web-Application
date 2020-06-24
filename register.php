<?php

require_once 'login_helper.php';
session();

require_once 'process_register.php';
?>



<form action="register.php" method="post">

    <input type = "text" name = "name" placeholder="Name" required/><br>

    <?php
    if (isset($error['email'])){
        // echo "<p>{$error['email']}</p>";
    }
    ?>

    <input type="email" name = "email" placeholder="Email" required/><br>
    <?php
    if (isset($error['password'])){
        // echo "<p>{$error['password']}</p>";
    }
    ?>
    <input type="password" name="password" placeholder="Password" required/><br>
    <input type="password" name="r_password" placeholder = "Retype Password" required/><br>
    <button type="submit">Submit</button>

</form>