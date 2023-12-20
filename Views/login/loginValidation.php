<?php
include_once "Models/User.php";
//include_once "Views/General/session.php";

unset($_SESSION['username']);

$result = User::validateUserByUsernamePassword($_POST['username'],md5($_POST['password']));

//var_dump($result);

if ($result){
    $_SESSION['username'] = $_POST['username'];
    header("Location: ?controller=home&action=home");
}
else{
    $_SESSION['error'] = "Username or Password was invalid !";
    header("Location: ?controller=login&action=login");
}