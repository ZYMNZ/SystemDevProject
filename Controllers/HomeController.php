<?php

class HomeController{
    function route()
    {
        global $action;
        if ($action=="home"){
            self::render($action);
        }

    }

    function render($action, $dataSend=[])
    {
        extract($dataSend);
        include_once "Views/home/$action.php";
    }
}