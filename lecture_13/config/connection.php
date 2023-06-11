<?php
    const SERVER_NAME = "localhost";
    const USER_NAME = "root";
    const PASSWORD = "";
    const DB_NAME = "myhome";

    $conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
?>
