<?php
include 'config/connect.php';

extract($_POST);
if (isset($_POST['displaySend'])) {
    $sql = "SELECT id, username, mobile as phone, email, city FROM users";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $json[] = $row;
    };
    echo json_encode($json);
}