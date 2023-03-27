<?php 
function createTable() {
    echo "<table>";
    for($i = 0; $i < 10; $i++) {
        echo "<tr>";
        for($j = 0; $j < 10; $j++) {
            echo "<td>". rand(10, 99) ."</td>";
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
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    table {
        border-collapse: collapse;
    }
    td, tr {
        border: 1px solid black;
        padding: .5em;
    }
</style>
<body>
    
<?php createTable() ?>
    
</body>
</html>