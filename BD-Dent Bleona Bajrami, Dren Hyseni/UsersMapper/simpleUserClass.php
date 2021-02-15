<?php
include_once 'personClass.php';

class SimpleUser extends Person
{

    public function __construct($name,  $email, $phone, $role, $password)
    {
        parent::__construct($name, $email, $phone, $role,$password);
     
    }

    public function setSession()
    {
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
    }

    public function setCookie()
    {
        setcookie("name", $this->getName(), time() + 2 * 24 * 60 * 60);
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getRole()
    {
        return $this->role;
    }
}
