<?php 
$error_message = "";

if(isset($_POST['submit'])) {

    $password = $_POST['password'];

    if(empty(trim($password))) {
        $error_message .= "• Password is empty <br>";
    }
    if (strlen($password) > 6) {
        $error_message .= "• Password length must from 6 to 15";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h3>PASSWORD STRENGHT</h1>
        <form method="post">
            <label>Enter Password:</label> <br><br>
            <input type="text" name="password">
            <button name="submit">SUBMIT</button>
        </form>
        <div class="error_message">
            <?= $error_message ?>
            <!-- <p>• Password length 6-20 symbol<span> - Weak</span></p>
            <p>• First letter UPPERCASE<span> - Medium</span></p>
            <p>• All of them + number in password<span> - Strong</span></p> -->
        </div>
    </div>
    
</body>
</html>