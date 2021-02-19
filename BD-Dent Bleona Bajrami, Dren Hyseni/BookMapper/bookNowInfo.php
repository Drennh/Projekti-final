<?php


class BookInfo 
{
    protected $name;
    protected $phone;
    protected $email;
    protected $date;

    public function __construct($name, $phone, $email,$date)
    {
        $this->name=$name;
        $this->phone=$phone;
        $this->email=$email;
        $this->date=$date;
     
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getDate()
    {
        return $this->date;
    }
}
