<?php
include_once "Views/General/session.php";
class ErrorController{
    function route()
    {
        global $action;
        if ($action=="error"){
            self::render($action);
        }

    }

    function render($action, $dataSent=[])
    {
        extract($dataSent);
        include_once "Views/error/$action.php";
    }
}