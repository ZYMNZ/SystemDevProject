<?php
include_once "Models/Dish.php";

$isCreated = Dish::createDish($_POST['dishTitle'],$_POST['dishDescription'],$_GET['catId']);

var_dump($isCreated);
if ($isCreated){
    $_SESSION['dishCreated'] = "Dish Added Successfully !!";
    header("Location: ?controller=user&action=listDishes&catId=" . $_GET['catId']);
}
else{
    $_SESSION['error'] = "Sorry Something Went Wrong, Try Again !";
    header("Location: ?controller=user&action=listDishes&catId=" . $_GET['catId']);
}

