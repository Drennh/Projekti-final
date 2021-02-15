<?php

   include_once 'adminClass.php';
   include_once 'simpleUserClass.php';
   require_once 'userMapper.php';


    session_start();

    if(isset($_POST['signup-button'])){
        $signup = new SignupLogic($_POST);
        $signup->verify();
    }

    class SignupLogic{

        private $name="";
        private $email="";
        private $phone="";
        private $password="";

        function __construct($formdata){

            $this->name=$formdata['signup-name'];
            $this->email=$formdata['signup-email'];
            $this->phone=$formdata['singup-phonenumber'];
            $this->password=$formdata['signup-password'];
        

        }

        public function verify(){

            $user = new SimpleUser($this->name,$this->email,$this->phone,0,$this->password);
               
                  if($this->loginEmpty($this->name,$this->email,$this->phone,$this->password)){
                   
                   header("Location:../SignUp/signup.php");
                  

                  }else if($this->coorectSignup($this->name,$this->email,$this->phone,$this->password)){

                    $mapper = new UserMapper();
                    $mapper->insertUser($user);
                    header("Location:../Login/login.php");

                  } 
                  else{
                    header("Location:../SignUp/signup.php");
                  }
        }

        function loginEmpty($name,$email,$phone,$password){
            if(empty($name)||empty($email)||empty($phone)||empty($password)){
                return true;
            }
            return false;
        }

          function coorectSignup($name,$email,$phone,$password){

            if( strlen($name)>=8 &&  preg_match( '/^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/',$email)
            &&strlen($phone)>=8 && preg_match( '/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/',$password) ) {
            return true;
            }
            return false;

        }
      

    }
          

           
?>

