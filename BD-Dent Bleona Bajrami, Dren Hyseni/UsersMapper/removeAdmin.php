<?php
include_once 'userMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $removeAdmin=0;
    $mapper = new UserMapper();
    $mapper->makeAdmin($userId,$removeAdmin);
    header("Location:../Dashboard/dashboard.php");
}
