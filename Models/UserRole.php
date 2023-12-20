<?php
include_once "database.php";
class UserRole{

    private int $userId;
    private int $roleId;

    public function __construct($pUserId = -1, $pRoleId = -1)
    {
        self::initialization($pUserId,$pRoleId);
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $pUserId): void
    {
        $this->userId = $pUserId;
    }

    public function getRoleId(): int
    {
        return $this->roleId;
    }

    public function setRoleId(int $pRoleId): void
    {
        $this->roleId = $pRoleId;
    }

    private function initialization($pUserId, $pRoleId)
    {
        if ($pUserId < 0) return;
        else if ($pUserId > 0 && $pRoleId > 0) {
            $this->userId = htmlentities($pUserId, ENT_QUOTES);
            $this->roleId = htmlentities($pRoleId, ENT_QUOTES);
        }
        else {
            $conn = openDatabaseConnection();
            $prepareQuery = $conn->prepare("SELECT * FROM `user_role` WHERE user_id = ?");
            $prepareQuery->bind_param("i", $pUserId);
            $prepareQuery->execute();
            $results = $prepareQuery->get_result();

            if ($results->num_rows > 0) {
                $fetchAssoc = $results->fetch_assoc();
                $this->userId = $fetchAssoc['user_id'];
                $this->roleId = $fetchAssoc['role_id'];
            }
        }
    }

    public static function createUserRole($pUserId,$pRoleId): bool
    {
        $conn = openDatabaseConnection();
        $sql = "INSERT INTO `user_role` (user_id,role_id) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii",$pUserId,$pRoleId);
        $isSuccessful = $stmt->execute();
//        var_dump("creatingUserRole :  $isSuccessful");
        $stmt->close();
        $conn->close();
        return $isSuccessful;
    }

}








