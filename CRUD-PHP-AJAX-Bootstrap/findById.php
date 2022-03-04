<?php
include 'config/connect.php';

extract($_POST);
if (isset($_POST['updateId'])) {
    $user_id = $_POST['updateId'];
    $sql = "SELECT id, username, mobile as phone, email, city FROM users WHERE id = $user_id";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $response = $row;
    }
    echo json_encode($response);
}