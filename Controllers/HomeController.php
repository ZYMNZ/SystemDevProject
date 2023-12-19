<?php
include_once "Models/Dish.php";
include_once "Views/General/session.php";
class HomeController{
    function route()
    {
        global $action;
        if ($action=="home"){
            if (isset($_SESSION["catId"])) unset($_SESSION["catId"]);
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