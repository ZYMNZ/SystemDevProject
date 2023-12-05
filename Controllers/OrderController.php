<?php

class OrderController{
    function route()
    {
        global $action;

        if ($action="confirmClientOrder"){
            self::render($action);
        }
        
    }

    function render($view, $dataSent=[])
    {
        extract($dataSent);
        include_once "Views/order/$view.php";
    }
}