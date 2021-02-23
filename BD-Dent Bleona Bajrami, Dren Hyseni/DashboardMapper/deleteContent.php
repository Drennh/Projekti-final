<?php
include_once 'addMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new AddMapper();
    $mapper->deleteContent($userId);
    header("Location:../Dashboard/dashboard.php");
}
