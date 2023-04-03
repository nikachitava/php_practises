<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Enter number:
        <input type="text" name="number">
        <button name="check">Submit</button>
    </form>

    <?php 
    function count_digit($number) {
        return strlen($number);
    }

    if(isset($_POST['check'])) {  
        $number = $_POST['number'];
        echo count_digit($number);
    }
    ?>
    
</body>
</html>