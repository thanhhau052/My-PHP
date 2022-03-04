<?php
include 'config/connect.php';

extract($_POST);
if (isset($_POST['deleteSend'])) {
    $unique = $_POST['deleteSend'];
    $sql = "DELETE FROM users WHERE id = $unique";
    $result = mysqli_query($con, $sql);
}