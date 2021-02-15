<?php
require_once "../DatabaseConfig/databaseConfig.php";

class UserMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getUserByID($userId)
    {
        $this->query = "select * from users where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    public function getUserByEmail($email)
    {
        $this->query = "select * from users where email=:email";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":email", $email);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers()
    {
        $this->query = "select * from users";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertUser(\SimpleUser $user)
    {
        $this->query = "insert into Users (name, email,phone, role,password) values (:name,:email,:phone,:role,:password)";
        $statement = $this->conn->prepare($this->query);
        $name = $user->getName();
        $email = $user->getEmail();
        $phone = $user->getPhone();
        $pass = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $role = $user->getRole();
        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":role", $role);
        $statement->bindParam(":password", $pass);
        $statement->execute();
    }

    public function deleteUser($userId)
    {
        $this->query = "delete from users where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();    
    }

    public function makeAdmin($userId,$adminRole)
    {
        $this->query = "update users set role=:role where userid=:id" ;
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->bindParam(":role", $adminRole);
        $statement->execute();  
    }

    public function removeAdmin($userId,$userRole)
    {
        $this->query = "update users set role=:role where userid=:id" ;
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->bindParam(":role", $userRole);
        $statement->execute();  
    }

    
}
