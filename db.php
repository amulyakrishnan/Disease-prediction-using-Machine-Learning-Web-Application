<?php

$server ="localhost";
$user ="newuser";
$password = "root123";
$db = "doctor1";

$con = new mysqli($server,$user,$password,$db);
if($con->connect_error) {
    die($con->connect_error);
}
?>