<?php
require_once "../DatabaseConfig/databaseConfig.php";

class MessagesMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    
    public function insertMessage(\MessageInfo $MessageInfo)
    {
        $this->query = "insert into messages (name, email,message) values (:name,:email,:message)";
        $statement = $this->conn->prepare($this->query);
        $name = $MessageInfo->getName();
        $email = $MessageInfo->getEmail();
        $message = $MessageInfo->getMessage();
        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":message", $message);
        $statement->execute();
    }

    public function getAllMessages()
    {
        $this->query = "select * from messages";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteMessage($messageId)
    {
        $this->query = "delete from messages where messageId=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $messageId);
        $statement->execute();    
    }
}
