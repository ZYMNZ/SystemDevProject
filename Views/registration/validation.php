<?php

include_once "Models/User.php";

$result = User::registerUser($_POST);

if ($result){
    header("Location: /?controller=login&action=login");
}
else{
    header("Location: /?controller=registration&action=registration");
}