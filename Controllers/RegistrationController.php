<?php
include_once "Views/General/session.php";
class RegistrationController{

    function route()
    {
        global $action;
        if ($action === "registration"){
            self::render($action);
        }
        else if ($action === 'registrationValidation'){
            self::render($action);
        }
    }

    function render($action, $dataSent=[])
    {
        extract($dataSent);
        include_once "Views/registration/$action.php";
    }
}