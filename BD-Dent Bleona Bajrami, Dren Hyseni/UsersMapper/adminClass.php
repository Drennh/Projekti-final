<?php
require_once 'personClass.php';


class Admin extends Person
{
    public function __construct($name, $email, $phone, $role, $password)
    {
        parent::__construct($name, $email, $phone, $role, $password);
    }


    public function setSession()
    {

        $_SESSION["role"] = 1;
        $_SESSION['roleName'] = "Administrator";
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
