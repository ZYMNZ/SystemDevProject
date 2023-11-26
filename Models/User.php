<?php
include_once "database.php";
class User{

    private int $userId;
    private String $username;
    private String $password;
    private String $apartment;

    public function __construct
    (
        $userId=-1,
        $username="",
        $password="",
        $apartment=""
    ){
        self::initialization($userId,$username,$password,$apartment);
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getApartment(): string
    {
        return $this->apartment;
    }

    public function setApartment(string $apartment): void
    {
        $this->apartment = $apartment;
    }

    private function initialization($userId, $username, $password, $apartment)
    {
        if ($userId<0){
            //nothing sent by parameter
            return;
        }
        else if
        (
            $userId>0
            && strlen($username)
            && strlen($password)
            && strlen($apartment)
        ){
            $this->userId = $userId;
            $this->username = $username;
            $this->password = $password;
            $this->apartment = $apartment;
        }
        else if($userId>0){
            $conn = databaseConnection();
            $prepareQuery = $conn->prepare("SELECT * FROM `user` WHERE user_id = ?");
            $prepareQuery->bind_param("i",$userId);
            $prepareQuery->execute();
            $results = $prepareQuery->get_result();

            if ($results->num_rows > 0){

                $userFetchAssoc = $results->fetch_assoc();

                $this->userId = $userFetchAssoc['user_id'];
                $this->username = $userFetchAssoc['username'];
                $this->password = $userFetchAssoc['password'];
                $this->apartment = $userFetchAssoc['apartment'];
            }
        }
    }

}