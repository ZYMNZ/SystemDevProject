<?php

class RegistrationController{

    function route()
    {
        global $action;
        if ($action === "registration"){
            self::render($action);
        }
    }

    function render($action, $dataSent=[])
    {
        extract($dataSent);
        include_once "Views/registration/$action.php";
    }
}