<?php

   require_once '../DashboardMapper/addMapper.php';
   require_once '../DashboardMapper/addInfo.php';


    

    if(isset($_POST['dashboard-button'])){
        $contact = new AddLogic($_POST);
        $contact->verify();
    }

    class AddLogic{
 
      private $headerTxt;
      private $file;
      private $description;
      private $addType;

        function __construct($formdata){

            $this->headerTxt=$formdata['headertxt'];
            $this->file=$formdata['myfile'];
            $this->description=$formdata['details'];
            $this->addType=$formdata['add'];
            
        

        }

        public function verify(){

                  $AddInfo = new AddInfo($this->headerTxt,$this->file,$this->description,$this->addType);
               
                  if($this->formEmpty($this->headerTxt,$this->file,$this->description,$this->addType)){
    
                    header("Location:../Dashboard/dashboard.php");
                  

                  }else if($this->completedForm($this->headerTxt,$this->file,$this->description,$this->addType)){

                  
                      $mapper = new AddMapper();
                      $mapper->insertDoctorInformation($AddInfo);
                      header("Location:../Home/home.php");

                  } 
                  else{
                    header("Location:../Dashboard/dashboard.php");
                  }
        }

        function formEmpty($headerTxt,$file,$description,$addType){
            if(empty($headerTxt)||empty($file)||empty($description)||empty($addType)){
                return true;
            }
            return false;
        }

          function completedForm($headerTxt,$file,$description,$addType){

            if( strlen($headerTxt)>=4 && strlen($description)>=8) {
            return true;
            }
            return false;

        }
      

    }
          

           
?>

