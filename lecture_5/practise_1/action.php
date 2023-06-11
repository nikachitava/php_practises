<?php 
print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Action</title>
</head>
<body>

<table>
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Birthday Date</th>
        <th>ID Number</th>
        <th>Address</th>
        <th>Registration Date</th>
        <th>Phone number</th>
        <th>Additional</th>
    </tr>
    <tr>
        <?php
            for($i = 0; $i < 8; $i++) {
                $data = ['name', 'surname', 'date', 'id_number', 'address', 'regDate', 'phone', 'additional'];
                // echo "<td> $_POST[$data[$i]] </td>";
            }
        ?>
    </tr>
</table>
    
</body>
</html>