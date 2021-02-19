<?php

   require_once 'messageMapper.php';
   require_once 'messageInfo.php';


    

    if(isset($_POST['contact-button'])){
        $contact = new ContactLogic($_POST);
        $contact->verify();
    }

    class ContactLogic{

        private $name="";
        private $email="";
        private $message="";

        function __construct($formdata){

            $this->name=$formdata['contact-name'];
            $this->email=$formdata['contact-email'];
            $this->message=$formdata['message'];
            
        

        }

        public function verify(){

                  $MessageInfo = new MessageInfo($this->name,$this->email,$this->message);
               
                  if($this->contactEmpty($this->name,$this->email,$this->message)){
    
                    header("Location:../contact/contactUs.php");
                  

                  }else if($this->completedContact($this->name,$this->email,$this->message)){

                    $mapper = new MessagesMapper();
                    $mapper->insertMessage($MessageInfo);
                    header("Location:../Home/home.php");

                  } 
                  else{
                    header("Location:../contact/contactUs.php");
                  }
        }

        function contactEmpty($name,$email,$message){
            if(empty($name)||empty($email)||empty($message)){
                return true;
            }
            return false;
        }

          function completedContact($name,$email,$message){

            if( strlen($name)>=8 &&  preg_match( '/^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/',$email)
            &&strlen($message)>=10) {
            return true;
            }
            return false;

        }
      

    }
          

           
?>

