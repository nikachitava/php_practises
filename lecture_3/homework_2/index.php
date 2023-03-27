<?php 
$error_message = "";

if(isset($_POST['check'])) {
    $row = $_POST['row'];
    $col = $_POST['col'];
    $min = $_POST['min'];
    $max = $_POST['max'];

    if(empty($row) || $row < 0) {
        $error_message .= "Enter rows correct value <br>";
    }
    if(empty($col) || $col < 0) {
        $error_message .= "Enter columns correct value > 0 <br>";
    } 
    if(empty($min)) {
        $error_message .= "Enter correct min value <br>";
    }
    if(empty($max)) {
        $error_message .= "Enter correct max value <br>";
    }
    if($min > $max) {
        $error_message .= "Min value can't be more Max <br>";
    }
    createTable($row, $col, $min, $max);
}

function createTable($ROW, $COL, $MIN, $MAX) {
    echo "<table>";
    for($i = 0; $i < $COL; $i++) {
        echo "<tr>";
        for($j = 0; $j < $ROW; $j++) {
            echo "<td>". rand($MIN, $MAX) ."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
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

    <form method="post">
        <div class="error_message">
            <?= $error_message ?>
        </div>
        <label>Enter row numbers: </label>
        <input type="text" name="row" placeholder="Enter row numbers: "><br><br>
        <label>Enter column numbers: </label>
        <input type="text" name="col" placeholder="Enter column numbers: "><br><br>
        <label>Enter min value: </label>
        <input type="text" name="min" placeholder="Enter min value: "><br><br>
        <label>Enter max value: </label>
        <input type="text" name="max" placeholder="Enter max value: "><br><br>
        <button name="check">SUBMIT</button>
    </form>
    
</body>
</html>