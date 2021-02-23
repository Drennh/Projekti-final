<?php
include_once 'reservationMapper.php';
if (isset($_GET['id'])) {
    $reservationId = $_GET['id'];
    $mapper = new ReservationMapper();
    $mapper->cancelReservation($reservationId);
    header("Location:../Dashboard/dashboard.php");
}
