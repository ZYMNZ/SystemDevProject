<?php

$controllerPrefix = isset($_GET['controller']) ? $_GET['controller'] : "user";

$controller = ucfirst($controllerPrefix) . "Controller";

$action = isset($_GET['action']) ? $_GET['action'] : "haveAccount";

//if (file_exists($controller && $action)) {
//need to check why te error page keep displaying even tho the file does exist
    include_once "Controllers/$controller.php";

    $cntrl = new $controller;

    $cntrl->route();
//}
//else{
//    include_once "Views/error/error.php";
//}

