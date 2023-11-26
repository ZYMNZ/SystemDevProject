<?php
include_once "database.php";
class Contact{

    private int $contactId;
    private String $openingHours;
    private String $address;
    private String $phoneNum;
    private String $email;

    public function __construct
    (
        $contactId=-1,
        $openingHours="",
        $address="",
        $phoneNum="",
        $email=""
    )
    {
        self::initialization($contactId,$openingHours,$address,$phoneNum,$email);
    }

    private function initialization($contactId,$openingHours,$address,$phoneNum,$email){

        if ($contactId < 0){
            //use the default initialization if nth was send by the param
            return;
        }
        if (
            $contactId > 0
            && strlen($openingHours) > 0
            && strlen($address) > 0
            && strlen($phoneNum) > 0
            && strlen($email) > 0
        ){
            // use if data was sent by param
            $this->contactId = $contactId;
            $this->openingHours = $openingHours;
            $this->address = $address;
            $this->phoneNum = $phoneNum;
            $this->email = $email;

        }
        if ($contactId > 0){
            $conn = databaseConnection();
            $sqlPrepareQuery = $conn->prepare(
                "SELECT * FROM `contact` WHERE contact_id = ?");
            $sqlPrepareQuery->bind_param('i', $contactId);
            $sqlPrepareQuery->execute();
            $results = $sqlPrepareQuery->get_result();

            if ($results->num_rows > 0){

                $contactFetchAssoc = $results->fetch_assoc();

                $this->contactId = $contactId;
                $this->openingHours = $contactFetchAssoc['opening_hours'];
                $this->address = $contactFetchAssoc['address'];
                $this->phoneNum = $contactFetchAssoc['phone_num'];
                $this->email = $contactFetchAssoc['email'];
            }
        }
    }

}