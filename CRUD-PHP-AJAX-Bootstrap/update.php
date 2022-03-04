<?php
include 'config/connect.php';

if (isset($_POST['hiddenData'])) {
    $uniqueId = $_POST['hiddenData'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city = $_POST['city'];

    $sql = "UPDATE users SET username = '$username', 
                                mobile = '$phone', 
                                email = '$email', 
                                city = '$city'
                        WHERE id = '$uniqueId'";
    $result = mysqli_query($con, $sql);
}