<?php

abstract class Person
{
    protected $name;
    protected $email;
    protected $phone;
    protected $role;
    protected $password;

    function __construct($name, $email, $phone, $role,$password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->role = $role;
        $this->password = $password;
    }

    abstract protected function setSession();
    abstract protected function setCookie();
}
