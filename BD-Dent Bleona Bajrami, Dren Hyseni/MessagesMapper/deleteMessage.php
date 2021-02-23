<?php
include_once 'messageMapper.php';
if (isset($_GET['id'])) {
    $messageId = $_GET['id'];
    $mapper = new MessagesMapper();
    $mapper->deleteMessage($messageId);
    header("Location:../Dashboard/dashboard.php");
}
