<?php
include_once "Views/General/session.php";
class ErrorController{
    function route()
    {
        global $action;
        if ($action=="error"){
            self::render($action);
        }
        else{
            header("Location: ?controller=error&action=error");
        }

    }

    function render($action, $dataSent=[])
    {
        extract($dataSent);
        include_once "Views/error/$action.php";
    }
}