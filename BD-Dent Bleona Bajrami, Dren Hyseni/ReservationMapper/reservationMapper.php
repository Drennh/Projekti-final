<?php

require_once "../DatabaseConfig/databaseConfig.php";

class ReservationMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }



public function cancelReservation($reservationId)
    {
        $this->query = "delete from reservations where reservationId=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $reservationId);
        $statement->execute();    
    }
}

    ?>