<?php
require_once "../DatabaseConfig/databaseConfig.php";


class AddMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function insertDoctorInformation(\AddInfo $AddInfo)
    {

        $this->query = "insert into doctormarketing (headtext, image,description, addtype) values (:headtext,:image,:description,:addtype)";
        $statement = $this->conn->prepare($this->query);
        $headerText = $AddInfo->getHeaderTxt();
        $file = $AddInfo->getFile();
        $description = $AddInfo->getDescription();
        $addType = $AddInfo->getddType();
        $statement->bindParam(":headtext", $headerText);
        $statement->bindParam(":image", $file);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":addtype", $addType);
        $statement->execute();
    }

    public function UpdateDoctorInformation(\AddInfo $AddInfo, $id)
    {

        $this->query = "update doctormarketing
             set headtext = :headtext , image=:image,description=:description 
             where addtype = :addtype and id=:id";
        $statement = $this->conn->prepare($this->query);
        $headerText = $AddInfo->getHeaderTxt();
        $file = $AddInfo->getFile();
        $description = $AddInfo->getDescription();
        $addType = "doctor";
        $statement->bindParam(":id", $id);
        $statement->bindParam(":headtext", $headerText);
        $statement->bindParam(":image", $file);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":addtype", $addType);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }





    public function getAllAdds()
    {
        $this->query = "select * from doctormarketing";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllInspirationalInfo()
    {
        $this->query = "select * from inspirational";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteContent($userId)
    {
        $this->query = "delete from doctormarketing where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }

    public function deleteInspirational($userId)
    {
        $this->query = "delete from inspirational where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }

    public function insertInspirationalInfo(\AddInfo $AddInfo)
    {

        $this->query = "insert into inspirational (headertext,description) values (:headtext,:description)";
        $statement = $this->conn->prepare($this->query);
        $headerText = $AddInfo->getHeaderTxt();
        $description = $AddInfo->getDescription();
        $statement->bindParam(":headtext", $headerText);
        $statement->bindParam(":description", $description);
        $statement->execute();
    }
}
