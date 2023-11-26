<?php
include_once "database.php";
class Dish{

    private int $dishId;
    private String $dishTitle;
    private String $dishDescription;
    private String $dishImageLocation;

    public function __construct
    (
        $dishId=-1,
        $dishTitle="",
        $dishDescription="",
        $dishImageLocation=""
    )
    {
        self::initialization($dishId,$dishTitle,$dishDescription,$dishImageLocation);
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



    private function initialization
    (
        $dishId,
        $dishTitle,
        $dishDescription,
        $dishImageLocation
    )
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
        ){
            $this->dishId = $dishId;
            $this->dishTitle = $dishTitle;
            $this->dishDescription = $dishDescription;
            $this->dishImageLocation = $dishImageLocation;
        }
        else if($dishId>0)
        {
            $conn = databaseConnection();
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
            }
        }
    }

}

