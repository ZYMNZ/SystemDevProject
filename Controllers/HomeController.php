<?php
include_once "Models/Dish.php";
class HomeController{
    function route()
    {
        global $action;
        if ($action=="home"){

            self::render($action);
        }

    }

    function render($action, $dataSent=[])
    {
        extract($dataSent);
        include_once "Views/home/$action.php";
    }
}