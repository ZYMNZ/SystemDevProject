<?php
include_once "database.php";
class User{

    private int $userId;
    private ?String $username;
    private ?String $password;
    private ?int $apartment;

    public function __construct
    (
        $userId=-1,
        $username="",
        $password="",
        $apartment=-1
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

    public function getApartment(): int
    {
        return $this->apartment;
    }

    public function setApartment(int $apartment): void
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
            $userId > 0 && ( (strlen($username) > 0 && strlen($password) > 0) || $apartment> 0 )
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
                $this->apartment = $userFetchAssoc['apartment_num'];
            }
        }
    }

    public static function registerUser($pPostArray)
    {

    }

    public static function validateUserByUsernamePassword($pUsername,$pPassword) : ?User
    {
        $conn = databaseConnection();
        $sqlQuery = "SELECT * FROM `user` WHERE username = ? AND password = ?";
        $prepareQuery = $conn->prepare($sqlQuery);
        $prepareQuery->bind_param("ss",$pUsername,$pPassword);
        $isSuccessful = $prepareQuery->execute();
        var_dump($isSuccessful);
//        if ($isSuccessful) {
            $results = $prepareQuery->get_result();
            var_dump($results);
            if ($results->num_rows>0){
                $fetchAssoc = $results->fetch_assoc();

                $user = new User();
                $user->userId = $fetchAssoc['user_id'];
                $user->username = $fetchAssoc['username'];
                $user->password = $fetchAssoc['password'];
                $user->apartment = $fetchAssoc['apartment_num'];
                var_dump($user);
                return $user;
            }
//        }
        return null;
    }

    //1 we check if data is empty,
    //2 if not empty => we insert it in the database
    //3 we need to insert it in the user_usergroup
        // to do so we need to send the user_id that was created then



}









