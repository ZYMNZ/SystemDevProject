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
            if (!isset($_SESSION["username"])) {
                header("Location: ?controller=login&action=login");
            }
            else {
                self::render($action);
            }
        }
        else if($action === "listDishes"){
            if (!isset($_SESSION["username"])) {
                header("Location: ?controller=login&action=login");
            }

//            if (!isset($_SESSION["catId"])){
//                header("Location: ?controller=home&action=home");
//                var_dump($_SESSION["catId"]);
//            }
            else {
                $listDishByCategory = Dish::listingDishByCategoryId($_GET['catId']);
                $categoryName = new Category($_GET['catId']);
                self::render($action, ["listOfDishes" => $listDishByCategory, "categoryName" => $categoryName]);
            }
        }
        else if($action === "editDish"){
            if (!isset($_SESSION["username"])) {
                header("Location: ?controller=login&action=login");
            }
            else {
                $dishInfo = new Dish($_GET['dishId']);
                self::render($action, ["dish" => $dishInfo]);
            }
        }
        else if($action === "searchResults"){
            if (!isset($_SESSION["username"])) {
                header("Location: ?controller=login&action=login");
            }
            else {
                $searchResults = Dish::searchDishByWord($_POST['searchKeyword']);
                self::render($action, ['searchResults' => $searchResults]);
            }
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