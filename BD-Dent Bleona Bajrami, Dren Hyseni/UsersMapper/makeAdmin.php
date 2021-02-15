<?php
include_once 'userMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $adminRole=1;
    $mapper = new UserMapper();
    $mapper->makeAdmin($userId,$adminRole);
    header("Location:../Dashboard/dashboard.php");
}
