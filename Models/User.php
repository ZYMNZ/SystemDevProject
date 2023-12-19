<?php
include_once "database.php";
include_once "Models/UserRole.php";
include_once "Models/Role.php";
class User{

    private int $userId;
    private String $username;
    private String $password;
    private int $apartment;

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
            $conn = openDatabaseConnection();
            $prepareQuery = $conn->prepare("SELECT * FROM `user` WHERE user_id = ?");
            $prepareQuery->bind_param("i",$userId);
            $prepareQuery->execute();
            $results = $prepareQuery->get_result();

            if ($results->num_rows > 0){

                $userFetchAssoc = $results->fetch_assoc();

                $this->userId = $userFetchAssoc['user_id'];
                $this->username = $userFetchAssoc['username'];
                $this->password = $userFetchAssoc['password'];
                $this->apartment = $userFetchAssoc['apartment_num'] ?? -1;
            }
        }
    }

    //Registering Admin

    public static function registerAdmin($pPostArray): ?bool
    {
        $isTaken = self::isUsernameTaken($pPostArray['username']);
        if (!$isTaken) {
            $result = self::createAdmin($pPostArray);
            if ($result["isSuccessful"]) {
                $role = Role::getRoleByName('admin');
                return UserRole::createUserRole($result['newRegisteredUserId'], $role->getRoleId());
            }
            else{
                var_dump("REGISTRATION OF ADMIN DIDNT GO WELLLLL");
            }
        }
        var_dump("REGISTRATION OF ADMIN BA7777");
        return false;
    }
    private static function createAdmin($pPostArray) : array
    {
        $conn = openDatabaseConnection();
        $sqlQuery = "INSERT INTO `user` (username,password) VALUES (?,md5(?))";
        $prepareQuery = $conn->prepare($sqlQuery);
        $prepareQuery->bind_param("ss",$pPostArray['username'],$pPostArray['password']);
        $isSuccessful = $prepareQuery->execute();
        $userId = $conn->insert_id;
        $conn->close();
        $prepareQuery->close();
        return [
          'isSuccessful' => $isSuccessful,
          'newRegisteredUserId' => $userId
        ];
    }

    public static function isUsernameTaken($pUsername): bool  //check if the username is already in the DB
    {
        $conn = openDatabaseConnection();
        $sql = "SELECT * FROM `user` WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s',$pUsername);
        $stmt->execute();
        $results = $stmt->get_result();
        if ($results->num_rows > 0){
            return true;
        }
        return false;
    }


    // FORGET PAGE

    static public function updatePassword($pUsername,$pPassword): bool
    {
        $conn = openDatabaseConnection();
        $sql = "UPDATE `user` SET password = md5(?) WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss',$pPassword,$pUsername);
        return $stmt->execute();
    }


    // registering Resident
    // to be done soon




    //Done works perfectly, been tested
    // In Login Page, checks if the user exists
    public static function validateUserByUsernamePassword($pUsername,$pPassword) : ?User
    {
        $conn = openDatabaseConnection();
        $sqlQuery = "SELECT * FROM `user` WHERE username = ? AND password = ?";
        $prepareQuery = $conn->prepare($sqlQuery);
        $prepareQuery->bind_param("ss",$pUsername,$pPassword);
        $isSuccessful = $prepareQuery->execute();
//        var_dump($isSuccessful);
            $results = $prepareQuery->get_result();
//            var_dump($results);
            if ($results->num_rows>0){
                $fetchAssoc = $results->fetch_assoc();

                $user = new User();
                $user->userId = $fetchAssoc['user_id'];
                $user->username = $fetchAssoc['username'];
                $user->password = $fetchAssoc['password'];
                $user->apartment = -1;
                var_dump($user);
                return $user;
            }
        return null;
    }



}









