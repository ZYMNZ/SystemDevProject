<?php

class UserUserGroup{

    private int $userId;
    private int $userUserGroup;

    public function __construct($userId = -1, $userUserGroup = -1)
    {
        self::initialization($userId,$userUserGroup);
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function getUserUserGroup(): int
    {
        return $this->userUserGroup;
    }

    public function setUserUserGroup(int $userUserGroup): void
    {
        $this->userUserGroup = $userUserGroup;
    }

    private function initialization($userId, $userUserGroup)
    {
        $conn = databaseConnection();
        $prepareQuery = $conn->prepare("SELECT * FROM `user_usergroup` WHERE user_id = ?");
        $prepareQuery->bind_param("i",$userId);
        $prepareQuery->execute();
        $results = $prepareQuery->get_result();

        if ($results->num_rows > 0){

            $fetchAssoc = $results->fetch_assoc();
            $this->userId = $fetchAssoc['user_id'];
            $this->userUserGroup = $fetchAssoc['user_usergroup'];
        }
    }
}








