<?php
date_default_timezone_set('America/Toronto');
$controllerPrefix = isset($_GET['controller']) ? $_GET['controller'] : "home";

$controller = ucfirst($controllerPrefix) . "Controller";

$action = isset($_GET['action']) ? $_GET['action'] : "home";

//if (file_exists($controller && $action)) {
//need to check why te error page keep displaying even tho the file does exist
    include_once "Controllers/$controller.php";

    $cntrl = new $controller;

    $cntrl->route();
//}
//else{
//    include_once "Views/error/error.php";
//}

