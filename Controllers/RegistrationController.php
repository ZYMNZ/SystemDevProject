<?php
include_once "Views/General/session.php";
class RegistrationController{

    function route()
    {
        global $action;
        if ($action === "registration" || $action === 'registrationValidation'){
            self::render($action);
        }
        else{
            header("Location: ?controller=error&action=error");
        }
    }

    function render($action, $dataSent=[])
    {
        extract($dataSent);
        include_once "Views/registration/$action.php";
    }
}