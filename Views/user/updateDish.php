<?php

include_once "Models/Dish.php";

$isCreated = Dish::updateDish($_POST['dishId'],$_POST['dishTitle'],$_POST['dishDescription']);
var_dump($isCreated);
if ($isCreated){
    $_SESSION['dishUpdated'] = "Dish Info Updated !!";
    header("Location: ?controller=user&action=listDishes&catId=" . $_GET['catId']);
}
else{
    $_SESSION['error'] = "Sorry Something Went Wrong, Try Again !";
    header("Location: ?controller=user&action=listDishes&catId=" . $_GET['catId']);
}

