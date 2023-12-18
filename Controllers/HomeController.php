<?php
include_once "Models/Dish.php";
class HomeController{
    function route()
    {
        global $action;
        if ($action=="home"){
            $_SESSION['listOfDishes'] = Dish::listAllDishes();
            self::render($action,["dish"=>$_SESSION['listOfDishes']]);
        }

    }

    function render($action, $dataSent=[])
    {
        extract($dataSent);
        include_once "Views/home/$action.php";
    }
}