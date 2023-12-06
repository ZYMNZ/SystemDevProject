<?php

class UserController{
    function route()
    {
        global $action;

        if ($action === "haveAccount" || $action === "client" || $action === "addContact" || $action === "Category" || $action === "editCategory"){
            self::render($action);
        }

    }

    function render($action,$dataSent=[])
    {
        extract($dataSent);
        include_once "Views/user/$action.php";
    }
}