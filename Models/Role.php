<?php
include_once "database.php";
class Role{
    private int $roleId = -1;
    private string $roleName = "";

    public function __construct($pRoleId = -1, $pRoleName = "")
    {
        self::initializeProperties($pRoleId,$pRoleName);
    }

    public function getRoleId(): int
    {
        return $this->roleId;
    }

    public function setRoleId(int $roleId): void
    {
        $this->roleId = $roleId;
    }

    public function getRoleName(): string
    {
        return $this->roleName;
    }

    public function setRoleName(string $roleName): void
    {
        $this->roleName = $roleName;
    }



    private function initializeProperties(
        $pRoleId,$pRoleName
    ): void
    {
        if ($pRoleId < 0) return;
        else if (
            $pRoleId > 0
            && strlen($pRoleName) > 0
        ) {
            $this->roleId = htmlentities($pRoleId, ENT_QUOTES);
            $this->roleName = htmlentities($pRoleName, ENT_QUOTES);
        } else if ($pRoleId > 0) {
            $conn = openDatabaseConnection();
            $sql = "SELECT * FROM role WHERE role_name = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s",$pRoleName);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0){
                $fetchAssoc = $result->fetch_assoc();
                $role = new Role();
                $role->roleId = $fetchAssoc['role_id'];
                $role->roleName = $pRoleName;
            }
        }
    }

    public static function getRoleByName($pRoleName): ?Role
    {
        $dBConnection = openDatabaseConnection();
        $sql = "SELECT * FROM role WHERE role_name = ?";
        $stmt = $dBConnection->prepare($sql);
        $stmt->bind_param('s', $pRoleName);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $role = new Role();
            $result = $result->fetch_assoc();
            $role->roleId = $result['role_id'];
            $role->roleName = $pRoleName;
            return $role;
        }
        return null;
    }





}