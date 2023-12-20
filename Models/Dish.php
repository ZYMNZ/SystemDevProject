<?php
include_once "database.php";
class Dish{

    private int $dishId;
    private String $dishTitle;
    private String $dishDescription;
    private String $dishImageLocation;
    private int $categoryId;


    public function __construct
    (
        $dishId=-1,
        $dishTitle="",
        $dishDescription="",
        $dishImageLocation="",
        $categoryId=-1
    )
    {
        self::initialization($dishId,$dishTitle,$dishDescription,$dishImageLocation,$categoryId);
    }

    public function getDishId(): int
    {
        return $this->dishId;
    }

    public function setDishId(int $dishId): void
    {
        $this->dishId = $dishId;
    }

    public function getDishTitle(): string
    {
        return $this->dishTitle;
    }

    public function setDishTitle(string $dishTitle): void
    {
        $this->dishTitle = $dishTitle;
    }

    public function getDishDescription(): string
    {
        return $this->dishDescription;
    }

    public function setDishDescription(string $dishDescription): void
    {
        $this->dishDescription = $dishDescription;
    }

    public function getDishImageLocation(): string
    {
        return $this->dishImageLocation;
    }

    public function setDishImageLocation(string $dishImageLocation): void
    {
        $this->dishImageLocation = $dishImageLocation;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }


    private function initialization
    (
        $dishId,
        $dishTitle,
        $dishDescription,
        $dishImageLocation,
        $categoryId
    ) : void
    {
        if ($dishId<0){
            //nothing was sent by the param
            return;
        }
        else if
        (
            $dishId > 0
            && strlen($dishTitle) > 0
            && strlen($dishDescription) > 0
            && strlen($dishImageLocation) > 0
            && $categoryId > 0
        ){
            $this->dishId = $dishId;
            $this->dishTitle = $dishTitle;
            $this->dishDescription = $dishDescription;
            $this->dishImageLocation = $dishImageLocation;
            $this->categoryId = $categoryId;
        }
        else if($dishId>0)
        {
            $conn = openDatabaseConnection();
            $sqlPrepare = $conn->prepare("SELECT * FROM `dish` WHERE dish_id = ?");
            $sqlPrepare->bind_param("i",$dishId);
            $sqlPrepare->execute();
            $results = $sqlPrepare->get_result();

            if ($results->num_rows > 0){

                $dishFetchAssoc = $results->fetch_assoc();

                $this->dishId = $dishId;
                $this->dishTitle = $dishFetchAssoc['dish_title'];
                $this->dishDescription = $dishFetchAssoc['dish_description'];
                $this->dishImageLocation = $dishFetchAssoc['dish_image_location'];
                $this->categoryId = $dishFetchAssoc['category_id'];
            }
        }
    }

    //list all dishes
    public static function listAllDishes(): array
    {
        $conn = openDatabaseConnection();
        $results = $conn->query("SELECT * FROM `dish`");
        $list = [];
        while ($dishFetchAssoc = $results->fetch_assoc()) {
            $dish = new Dish();
            $dish->dishId = $dishFetchAssoc['dish_id'];
            $dish->dishTitle = $dishFetchAssoc['dish_title'];
            $dish->dishDescription = $dishFetchAssoc['dish_description'];
            $dish->dishImageLocation = $dishFetchAssoc['dish_image_location'];
            $dish->categoryId = $dishFetchAssoc['category_id'];
            $list[] = $dish;
        }
        return $list;

    }

    //Get category name by Id then listing category
    public static function listingDishByCategoryName($pCategoryName) : ?array
    {
        $category = Category::getByCategoryName($pCategoryName);
        return self::listingDishByCategoryId($category->getCategoryId());
    }


    //GETTING DISHED BY CATEGORY
    public static function listingDishByCategoryId($pCategoryId): ?array
    {
        $conn = openDatabaseConnection();
        $sqlPrepare = $conn->prepare("SELECT * FROM `dish` WHERE category_id = ?");
        $sqlPrepare->bind_param("i",$pCategoryId);
        $sqlPrepare->execute();
        $results = $sqlPrepare->get_result();
        $list = [];
        if ($results->num_rows > 0){

            while ($dishFetchAssoc = $results->fetch_assoc()) {
                $dish = new Dish();
                $dish->dishId = $dishFetchAssoc['dish_id'];
                $dish->dishTitle = $dishFetchAssoc['dish_title'];
                $dish->dishDescription = $dishFetchAssoc['dish_description'];
                $dish->dishImageLocation = $dishFetchAssoc['dish_image_location'];
                $dish->categoryId = $pCategoryId;
                $list[] = $dish;
            }
            return $list;
        }
        return null;
    }



    // INSERTING INTO DB
    public static function createDish($pDishTitle, $pDishDescription, $pCategoryId, $pImageLocation=""): bool
    {
        $conn = openDatabaseConnection();
        $sqlPrepare = $conn->prepare("INSERT INTO `dish` (dish_title, dish_description, category_id,dish_image_location) values (?,?,?,?)");
        $sqlPrepare->bind_param("ssis",$pDishTitle, $pDishDescription, $pCategoryId, $pImageLocation);
        return $sqlPrepare->execute();
    }

    //UPDATING DISH TITLE AND DESCRIPTION
    public static function updateDish($pDishId,$pDishTitle, $pDishDescription): bool
    {
        $conn = openDatabaseConnection();
        $sqlPrepare = $conn->prepare("UPDATE `dish` SET dish_title = ?, dish_description = ? WHERE dish_id = ?");
        $sqlPrepare->bind_param("ssi",$pDishTitle,$pDishDescription,$pDishId );
        return $sqlPrepare->execute();
    }

    //DELETING DISH BY ID
    public static function deleteDish($pDishId): bool
    {
        $conn = openDatabaseConnection();
        $sqlPrepare = $conn->prepare("DELETE FROM `dish` WHERE dish_id = ?");
        $sqlPrepare->bind_param("i",$pDishId);
        return $sqlPrepare->execute();
    }

    //Search for a dish
    public static function searchDishByWord($pSearch): ?array
    {
        $conn = openDatabaseConnection();
        $results = $conn->query("SELECT dish_title, dish_description FROM dish WHERE dish_title LIKE '%$pSearch%'");
        $searchResults = [];
        if($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                $dish = new Dish();
                $dish->dishTitle = $row['dish_title'];
                $dish->dishDescription = $row['dish_description'];
                $searchResults[] = $dish;
            }
            return $searchResults;
        }
        return null;
    }

}

