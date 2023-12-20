<?php

$controllerPrefix = isset($_GET['controller']) ? $_GET['controller'] : "user";

$controller = ucfirst($controllerPrefix) . "Controller";

$action = isset($_GET['action']) ? $_GET['action'] : "haveAccount";

if (!file_exists("Controllers/$controller.php")) {
    header("Location: /?controller=error&action=error");
}
//need to check why te error page keep displaying even tho the file does exist
else {
    include_once "Controllers/$controller.php";
    $cntrl = new $controller;
    $cntrl->route();
}




