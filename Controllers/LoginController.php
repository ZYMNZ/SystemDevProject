<?php
include_once "Views/General/session.php";
class LoginController{
    function route()
    {
        global $action;

        if ($action == "login" || $action == "forgotPass" || $action == "loginValidation"|| $action == "forgotPassValidation" ){

            self::render($action);
        }
        else{
            header("Location: ?controller=error&action=error");
        }
    }

    function render($action,$dataSent=[])
    {
        extract($dataSent);
        include_once "Views/login/$action.php";
    }
}
