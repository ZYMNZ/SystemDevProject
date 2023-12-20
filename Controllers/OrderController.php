<?php
include_once "Views/General/session.php";
class OrderController{
    function route()
    {
        global $action;

        if ($action="confirmClientOrder"){
            if (!isset($_SESSION["username"])) {
                header("Location: ?controller=login&action=login");
            }
            else {
                self::render($action);
            }
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