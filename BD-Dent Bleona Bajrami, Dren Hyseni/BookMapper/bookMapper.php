<?php
require_once "../DatabaseConfig/databaseConfig.php";

class BookMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    
    public function insertReservation(\BookInfo $BookInfo)
    {
        $this->query = "insert into reservations (name, phone,email,date) values (:name,:phone,:email,:date)";
        $statement = $this->conn->prepare($this->query);
        $name = $BookInfo->getName();
        $phone = $BookInfo->getPhone();
        $email = $BookInfo->getEmail();
        $date = $BookInfo->getDate();
        $statement->bindParam(":name", $name);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":date", $date);
        $statement->execute();
    }

    public function getAllReservations()
    {
        $this->query = "select * from reservations";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
