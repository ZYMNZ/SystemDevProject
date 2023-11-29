<?php

class UserController{
    function route()
    {
        global $action;

        if ($action === "haveAccount" || $action === "client"){
            self::render($action);
        }
    }

    function render($action,$dataSent=[])
    {
        extract($dataSent);
        include_once "Views/user/$action.php";
    }
}