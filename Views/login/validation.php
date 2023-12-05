<?php
include_once "Models/User.php";

$result = User::validateUserByUsernamePassword($_POST['username'],md5($_POST['password']));

//var_dump($result);

if ($result){
    header("Location: ?controller=home&action=home");
}
else{
    header("Location: ?controller=login&action=login");
}