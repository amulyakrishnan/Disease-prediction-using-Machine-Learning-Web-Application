<?php
require_once 'login_helper.php';
session();

if(isloggedin() === false){
    header('Location:login.php');
}
?>
<!-- <h1> protected</h1>
<p>
<a href="logout.php">logout</a> -->


