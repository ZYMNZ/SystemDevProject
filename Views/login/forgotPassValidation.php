<?php
include_once "Models/User.php";

$result = User::isUsernameTaken($_POST['username']);
var_dump($result);
if ($result){
   $isSuccessful = User::updatePassword($_POST['username'],$_POST['password']);
   echo "<br>";
   var_dump($isSuccessful);
    if ($isSuccessful){
        $_SESSION['passwordUpdated'] = "Password Updated Successfully !!";
        header("Location: ?controller=login&action=login");
    }
    else{
        $_SESSION['error'] = "Sorry try again !";
        header("Location: ?controller=login&action=forgotPass");
    }
}
else{
    $_SESSION['error'] = "Sorry the USERNAME is invalid, try again !";
    header("Location: ?controller=login&action=forgotPass");
}