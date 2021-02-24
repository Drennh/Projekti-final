<?php

require_once '../DashboardMapper/addMapper.php';
require_once '../DashboardMapper/addInfo.php';




if (isset($_POST['dashboard-button-add'])) {
  $Add = new AddLogic($_POST);
  $Add->verify();
} else if (isset($_POST['dashboard-button-edit'])) {
  $Add = new EditLogic($_POST);
  $Add->verify();
}

class AddLogic
{

  private $headerTxt;
  private $file;
  private $description;
  private $addType;

  function __construct($formdata)
  {

    $this->headerTxt = $formdata['headertxt'];
    $this->file = $formdata['myfile'];
    $this->description = $formdata['details'];
    $this->addType = $formdata['add'];
  }

  public function verify()
  {

    $AddInfo = new AddInfo($this->headerTxt, $this->file, $this->description, $this->addType);

    if ($this->formEmpty($this->headerTxt, $this->file, $this->description, $this->addType)) {
      header("Location:../Dashboard/dashboard.php");
    } else if ($this->completedFormDoctorMarketing($this->headerTxt, $this->file, $this->description, $this->addType)) {
      $mapper = new AddMapper();
      $mapper->insertDoctorInformation($AddInfo);
      header("Location:../Home/home.php");
    } else if ($this->completedFormInspirational($this->headerTxt, $this->description)) {
      $mapper = new AddMapper();
      $mapper->insertInspirationalInfo($AddInfo);

      header("Location:../Home/home.php");
    } else {

      header("Location:../Dashboard/dashboard.php");
    }
  }

  function formEmpty($headerTxt, $file, $description, $addType)
  {
    if (
      empty($headerTxt) || empty($description) || empty($addType)
    ) {
      return true;
    } else if (empty($file) ? strcmp($addType, 'Inspirational') != 0 : false) {
      return true;
    }
    return false;
  }

  function completedFormDoctorMarketing($headerTxt, $file, $description, $addType)
  {

    if (strlen($headerTxt) >= 4 && strlen($description) >= 8 &&  strcmp($addType, 'doctor') == 0 || strcmp($addType, 'marketing') == 0) {
      return true;
    }
    return false;
  }

  function completedFormInspirational($headerTxt, $description)
  {
    if (strlen($headerTxt) >= 4 && strlen($description) >= 8) {
      return true;
    }
    return false;
  }
}




class EditLogic
{

  private $id;
  private $headerTxt;
  private $file;
  private $description;
  private $addType;

  function __construct($formdata)
  {

    $this->id = $formdata['id'];
    $this->headerTxt = $formdata['headertxt'];
    $this->file = $formdata['myfile'];
    $this->description = $formdata['details'];
  }

  public function verify()
  {

    $AddInfo = new AddInfo($this->headerTxt, $this->file, $this->description, $this->addType);

    if ($this->formEmpty($this->headerTxt, $this->file, $this->description)) {
      header("Location:../Dashboard/dashboard.php");
    } else if ($this->editCompleted($this->headerTxt, $this->file, $this->description)) {
      $mapper = new AddMapper();
      $mapper->UpdateDoctorInformation($AddInfo, $this->id);
      header("Location:../Home/home.php");
    }
  }

  function formEmpty($headerTxt, $file, $description)
  {
    if (empty($headerTxt) || empty($description) || empty($file)) {
      return true;
    }
    return false;
  }

  function editCompleted($headerTxt, $file, $description)
  {
    if (strlen($headerTxt) >= 4 && strlen($description) >= 8) {
      return true;
    }
    return false;
  }
}
