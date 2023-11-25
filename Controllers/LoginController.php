<?php

class LoginController{
    function route()
    {
        global $action;

        if ($action === "login"){
            self::render($action);
        }
    }

    function render($action,$dataSent=[])
    {
        extract($dataSent);
        include_once "Views/login/$action";
    }
}
