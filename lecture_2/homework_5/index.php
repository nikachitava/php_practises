<?php 
    include "data.php"; 
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
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    table {
        border-collapse: collapse;
    }
    td, tr, th {
        border: 1px solid black;
        padding: .3em;
    }
</style>
<body>

    <table>
        <tr>
            <th>Make</th>
            <th>Model</th>
            <th>Color</th>
            <th>Mileage</th>
            <th>Status</th>
        </tr>
        <?php 
            $key = ['Make', 'Model', 'Color', 'Mileage', 'Status'];
            for($i = 0; $i < 3; $i++) {
                echo "<tr>";
                for($j = 0; $j < 5; $j++) {
                    echo "<td>". $cars[$i][$key[$j]] ."</td>";  
                }
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>