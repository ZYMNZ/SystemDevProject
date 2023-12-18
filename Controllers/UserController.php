<?php
include_once "Models/Dish.php";
class UserController{
    function route()
    {
        global $action;

        if ($action === "haveAccount" || $action === "client" || $action === "addContact"|| $action === "editCategory"){
            self::render($action);
        }
        else if($action === "category"){
//            $listDishByCategory = Dish::listingDishByCategoryName("");
            self::render($action);
        }

    }

    function render($action,$dataSent=[])
    {
        extract($dataSent);
        include_once "Views/user/$action.php";
    }
}