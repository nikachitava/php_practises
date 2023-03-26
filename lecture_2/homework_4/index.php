<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

    <table>
        <?php 
            $index = 2;
            for($i = 0; $i < 5; $i++) {
                $index += $i;
                echo "<tr>";
                for($j = 0; $j < 6; $j++){
                    echo "<td>$index</td>"; 
                    $index ++;
                }
                $index = 2;
                echo "</tr>";
            }
        
        ?>
    
    </table>
    
</body>
</html>