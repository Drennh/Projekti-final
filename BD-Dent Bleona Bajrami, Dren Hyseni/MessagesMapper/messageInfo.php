<?php


class MessageInfo 
{
    protected $name;
    protected $email;
    protected $messsage;

    public function __construct($name,  $email, $message)
    {
        $this->name=$name;
        $this->email=$email;
        $this->message=$message;
     
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getMessage()
    {
        return $this->message;
    }
}
