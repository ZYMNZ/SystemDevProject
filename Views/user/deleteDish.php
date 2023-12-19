<?php

include_once "Models/Dish.php";

$isDelete = Dish::deleteDish($_GET['dishId']);
var_dump($isDelete);
if ($isDelete){
    $_SESSION['dishDeleted'] = "Dish Info Deleted Successfully !!";
    header("Location: ?controller=user&action=listDishes&catId=" . $_GET['catId']);
}
else{
    $_SESSION['error'] = "Sorry Something Went Wrong, Try Again !";
    header("Location: ?controller=user&action=listDishes&catId=" . $_GET['catId']);
}