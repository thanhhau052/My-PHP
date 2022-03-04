<?php 
    include 'config/connect.php';
    
    extract($_POST);
    if(isset($_POST['username']) && 
        isset($_POST['phone']) && 
        isset($_POST['email']) && 
        isset($_POST['city'])) {
        $sql = "INSERT INTO users (username,mobile,email,city) 
        VALUES ('$username', '$phone', '$email', '$city')";

        $result= mysqli_query($con, $sql);
    }