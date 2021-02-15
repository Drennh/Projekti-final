<?php


    include_once 'userMapper.php';
    include_once 'adminClass.php';
    include_once 'simpleUserClass.php';


    session_start();

    if(isset($_POST['login-button'])){
        $login = new LoginLogic($_POST);
        $login->verify();
    }

    class LoginLogic{

        private $email;
        private $password;

        public function __construct($formdata){

            $this->email=$formdata['login-email'];
            $this->password=$formdata['login-password'];
        }

        public function verify(){

                if($this->loginEmpty($this->email,$this->password)){
                    header('Location:../Login/login.php');
                }else if($this->LoginCorrect($this->email,$this->password)){
                    header("Location:../Home/home.php");
                }
                else{
                    header('Location:../Login/login.php');
                }

        } 

    
            private function loginEmpty($email,$password){
                if(empty($email)||empty($password)){
                    return true;
                }
                return false;
            }

            private function LoginCorrect($email,$password){
                
                $mapper = new UserMapper();
                $user = $mapper->getUserByEmail($email);
                if ($user == null || count($user) == 0) return false;
                else if (password_verify($password, $user['password'])) {
                    if ($user['role'] == 1) {
                        $obj = new Admin($user['name'], $user['email'],$user['phone'], $user['role'],$user['password']);
                        $obj->setSession();
                    } else {
                        $obj = new SimpleUser($user['name'], $user['email'], $user['phone'], $user['role'],$user['password']);
                        $obj->setSession();
                    }
                    return true;
                } else return false;
            
        }
    }
?>

