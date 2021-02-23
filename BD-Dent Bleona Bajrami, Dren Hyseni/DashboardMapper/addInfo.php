<?php


class AddInfo 
{
    protected $headerTxt;
    protected $file;
    protected $description;
    protected $addType;

    public function __construct($headerTxt,  $file,  $description,  $addType)
    {
        $this->headerTxt=$headerTxt;
        $this->file=$file;
        $this->description=$description;
        $this->addType=$addType;

     
    }

    public function getHeaderTxt()
    {
        return $this->headerTxt;
    }
    public function getFile()
    {
        return $this->file;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getddType()
    {
        return $this->addType;
    }
 
}
