<?php 

$error_message = "";
$succes_message = "";

if(isset($_POST['check'])) {
    $code = $_POST['code'];
    $securityCode = $_POST['securityCode'];

    if(empty($code)) {
        $error_message .= "You should enter security code to Enter <br>";
    }
    if($code != $securityCode) {
        $error_message .= "Enter corret security Code <br>";
    }
    if($code == $securityCode) {
        $succes_message .= "Your enter succesfully";
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
</head>
<style>
    .error_message {
        color: red;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .succes_message {
        color: green;
        font-weight: bold;
        margin-bottom: 10px;
    }
</style>
<body>

    <?php 
        $securityCode = rand(1000, 99999);
        echo "<h1>Your Security Code: ". $securityCode ."</h1>";
    ?>
    <form method="POST">
        <div class="error_message">
            <?= $error_message ?>
        </div>
        <div class="succes_message">
            <?= $succes_message ?>
        </div>
        <label>Enter security code:</label>
        <input type="text" name="code">
        <button name="check">SUBMIT</button> 
        <input type="hidden" name="securityCode" value=<?= $securityCode ?>>
    </form>
    
</body>
</html>