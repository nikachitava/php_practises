<?php 

$error_message = "";

if(isset($_POST['submit'])) {

    $mail = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $security_code = $_POST['security_code'];

    if(!str_contains($mail, "@")) {
        $error_message .= "Mail must containt @";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registration</title>
</head>
<body>
    <form method="POST">
        <label>Email</label>
        <input type="text" name="email"><br><br>
        <label>Create password</label>
        <input type="text" name="password"><br><br>
        <label>Confirm password</label>
        <input type="text" name="confirm_password"><br><br>
        <div class="div">
            Secity Code: 1231
        </div>
        <label>Security Code</label>
        <input type="text"  name="security_code"><br><br>
        <button  name="submit">SUBMIT</button>
    </form>
    
    
</body>
</html>