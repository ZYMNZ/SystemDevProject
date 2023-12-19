<?php
include_once "Models/Dish.php";
include_once "Models/User.php";
include_once "Models/Category.php";
include_once "Views/General/session.php";
class UserController{
    function route()
    {
        global $action;

        if ($action === "haveAccount" || $action === "client" || $action === "updateDish" ||
            $action === "deleteDish" || $action === "addDish" || $action === "createDish"){
            self::render($action);
        }
        else if($action === "listDishes"){
            $listDishByCategory = Dish::listingDishByCategoryId($_GET['catId']);
            $categoryName = new Category($_GET['catId']);
            self::render($action,["listOfDishes" => $listDishByCategory, "categoryName"=>$categoryName]);
        }
        else if($action === "editDish"){
            $dishInfo = new Dish($_GET['dishId']);
            self::render($action,["dish"=>$dishInfo]);
        }
        else if($action === "searchResults"){
            $searchResults = Dish::searchDishByWord($_POST['searchKeyword']);
            self::render($action,['searchResults' => $searchResults]);
        }
        else{
            header("Location: ?controller=error&action=error");
        }


    }

    function render($action,$dataSent=[])
    {
        extract($dataSent);
        include_once "Views/user/$action.php";
    }
}