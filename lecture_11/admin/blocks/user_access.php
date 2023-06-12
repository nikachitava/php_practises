<?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_valid_request = "SELECT id, name, lastname FROM users WHERE email='$email' and password='$password'";
        $user_valid_result = mysqli_query($conn, $user_valid_request);
        if(mysqli_num_rows($user_valid_result)==1){
            $user_valid_row = mysqli_fetch_assoc($user_valid_result);
            $_SESSION['user_id'] = $user_valid_row['id'];
            $_SESSION['user_full_name'] = $user_valid_row['name']." ". $user_valid_row['lastname'];
        }
    }

    if(isset($_GET['logout'])){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_full_name']);
        session_destroy();
        header('location: index.php');
    }
?>