<?php
include_once "Models/Dish.php";
include_once "Models/Category.php";
class UserController{
    function route()
    {
        global $action;

        if ($action === "haveAccount" || $action === "client"){
            self::render($action);
        }
        else if($action === "listDishes"){
            $listDishByCategory = Dish::listingDishByCategoryId($_GET['catId']);
            $categoryName = new Category($_GET['catId']);
            self::render($action,["listOfDishes" => $listDishByCategory, "categoryName"=>$categoryName]);
        }
        else if($action === "editDish"){

            self::render($action);
        }

    }

    function render($action,$dataSent=[])
    {
        extract($dataSent);
        include_once "Views/user/$action.php";
    }
}