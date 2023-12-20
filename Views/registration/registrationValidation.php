<?php
// done just need security validations

include_once "Models/User.php";
//unset($_SESSION['username']);
$result = User::registerAdmin($_POST);
if ($result){
    header("Location: ?controller=login&action=login");
}
else{
    var_dump($result);
    $_SESSION['error'] = "Sorry the USERNAME is taken, try another one!";
    header("Location: ?controller=registration&action=registration");
}