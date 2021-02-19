<?php

   require_once 'bookNowInfo.php';
   require_once 'bookMapper.php';
  

    if(isset($_POST['book-button'])){
        $Book = new BookLogic($_POST);
        $Book->verify();
    }

    class BookLogic{

        private $name="";
        private $phone="";
        private $email="";
        private $date="";

        function __construct($formdata){

            $this->name=$formdata['name1'];
            $this->phone=$formdata['phone'];
            $this->email=$formdata['email'];
            $this->date=$formdata['date'];
        }

        public function verify(){

                  $BookInfo = new BookInfo($this->name,$this->phone,$this->email,$this->date);
               
                  if($this->BookEmpty($this->name,$this->phone,$this->email,$this->date)){
    
                    header("Location:../book/bookNow.php");
                  

                  }else if($this->completedContact($this->name,$this->phone,$this->email,$this->date)){

                    $mapper = new BookMapper();
                    $mapper->insertReservation($BookInfo);
                    header("Location:../Home/home.php");

                  } 
                  else{
                    header("Location:../book/bookNow.php");
                  }
        }

        function BookEmpty($name,$phone,$email,$date){
            if(empty($name)||empty($phone)||empty($email)||empty($date)){
                return true;
            }
            return false;
        }

          function completedContact($name,$phone,$email,$date){

            if( strlen($name)>=8 && strlen($phone)>=9 && preg_match( '/^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/',$email) ) {
            return true;
            }
            return false;

        }
      

    }
          

           
?>

