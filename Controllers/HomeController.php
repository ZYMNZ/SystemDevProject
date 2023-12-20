<?php
include_once "Models/Dish.php";
include_once "Views/General/session.php";
class HomeController{
    function route()
    {
        global $action;
        if ($action=="home"){
            if (!isset($_SESSION["username"])) {
                header("Location: ?controller=login&action=login");
            }
            else {
                $_SESSION['listOfDishes'] = Dish::listAllDishes();
                self::render($action, ["dish" => $_SESSION['listOfDishes']]);
            }
        }
        else{
            header("Location: ?controller=error&action=error");
        }

    }

    function render($action, $dataSent=[])
    {
        extract($dataSent);
        include_once "Views/home/$action.php";
    }
}