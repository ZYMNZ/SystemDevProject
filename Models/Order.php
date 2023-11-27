<?php

class Order{
    private int $orderId;
    private String $orderDate;
    private int $apartmentNum;
    private String $username;
    private bool $status;
    private int $userId;
    private int $tableId;
    private int $dishId;

    public function __construct
    (
        $orderId = -1,
        $orderDate = "",
        $apartmentNum = -1,
        $username = "",
        $status = false,
        $userId = -1,
        $tableId = -1,
        $dishId = 1
    )
    {
        self::initialization(
            $orderId,
            $orderDate,
            $apartmentNum,
            $username,
            $status,
            $userId,
            $tableId,
            $dishId
        );
    }

    private function initialization
    (
        $orderId,
        $orderDate,
        $apartmentNum,
        $username,
        $status,
        $userId,
        $tableId,
        $dishId
    )
    {
        if ($orderId < 0){
            //nothing is sent by the param
            return;
        }
        elseif ($orderId > 0
            && strlen($orderDate) > 0
            && $apartmentNum > 0
            && strlen($username) > 0
            && $status != null
            && $userId > 0
            && $tableId > 0
            && $dishId > 0
         )
        {
           $this->orderId = $orderId;
           $this->orderDate = $orderDate;
           $this->apartmentNum = $apartmentNum;
           $this->username = $username;
           $this->status = $status;
           $this->userId = $userId;
           $this->tableId = $tableId;
           $this->dishId = $dishId;
        }

        elseif ($orderId > 0)
        {
                
        }

    }
}