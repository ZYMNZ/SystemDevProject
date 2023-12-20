<?php
include_once "Views/General/session.php";
class OrderController{
    function route()
    {
        global $action;

        if ($action="confirmClientOrder"){
            self::render($action);
        }
        else{
            header("Location: ?controller=error&action=error");
        }
        
    }

    function render($view, $dataSent=[])
    {
        extract($dataSent);
        include_once "Views/order/$view.php";
    }
}