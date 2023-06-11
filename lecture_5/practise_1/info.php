<?php
$erorr_message = ["", "", "", ""];


if(isset($_POST['submit'])) {
    
    print_r($_POST);
    if(isset($_POST['name'])) {
        checkName($_POST['name'], 2, 20);
    }
    if(isset($_POST['surname'])) {
        checkName($_POST['surname'], 3, 50);
    }
    if(isset($_POST['id_number'])) {
        checkID($_POST['id_number']);
    }
    if(isset($_POST['address'])) {
        checkAddress($_POST['address'], 1, 70);
    }
    if(isset($_POST['phone'])) {
        checkPhone($_POST['phone']);
    }
}


function checkName($name, $min, $max) {
    if(strlen($name) > $min &&strlen($name) < $max) {
        // echo "correct";
    } else {
        $erorr_message[0] = "Name lenght from $min to $max symbols"; 
    }
}

function checkID($id_number) {
    if(strlen(is_numeric($id_number)) < 11) {
        // echo "correct";
    } else {
        $erorr_message[1] = "Phone number should include 11 digit"; 
    }
}

function checkAddress($adsress, $min, $max) {
    if(strlen($adsress) > $min &&strlen($adsress) < $max) {
        // echo "correct";
    } else {
        $erorr_message[2] = "Address lenght $max symbol"; 
    }
}

function checkPhone($number) {
    if(strlen($number) < 9) {
        // echo "correct";
    } else {
        $erorr_message[3] = "Phone number should start 5 and 9 digit"; 
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
    <title>Form</title>
</head>
<body>
    <form action="action.php" method="POST">
        <label>Name</label>
        <input type="text" name="name"><br><br>
        <div class="error"> <?= $erorr_message[0] ?></div>

        <label>Surname</label>
        <input type="text"  name="surname"><br><br>
        <div class="error"> <?= $erorr_message[0] ?></div>

        <label>Birthday</label>
        <input type="date" name="date"><br><br>
        

        <label>ID Number</label>
        <input type="text" name="id_number"><br><br>
        <div class="error"> <?= $erorr_message[2] ?></div>

        <label>Address</label>
        <input type="text" name="address"><br><br>
        <div class="error"> <?= $erorr_message[0] ?></div>

        <label>Reg Date</label>
        <input type="text" name="regDate"><br><br>

        <label>Phone</label>
        <input type="text" name="phone"><br><br>
        <div class="error"> <?= $erorr_message[3] ?></div>

        <label>Additional</label>
        <input type="text" name="additional"><br><br>
        <div class="error"> <?= $erorr_message[3] ?></div>

        <button name="submit">SUBMIT</button>
    </form>
    
</body>
</html>