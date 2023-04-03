<?php 
if(isset($_POST['submit'])) {
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

    function createTable($ROW, $COL, $MIN, $MAX) {
        echo "<table>";
        for($i = 0; $i < $COL; $i++) {
            $sum = 0;
            echo "<tr>";
                for($j = 0; $j < $ROW; $j++) {
                    echo "<td>". $randomNumber = rand($MIN, $MAX) ."</td>";
                    $sum += (int)$randomNumber;
                }
                echo "<td>". "<span>სტრიქონის ჯამი: ". $sum ."</span>"."</td>";
            echo "</tr>";
        }
        echo "</table>";
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
        <h1>TABLE</h1>
        <?php 
        createTable($row, $col, $min, $max);
        ?>
    </div>
    
</body>
</html>