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
    td, tr {
        border: 1px solid black;
        padding: 2rem;
    }
</style>
<body>
    <form action="result.php" method="POST">
        <table>
            <?php
                for($i = 0; $i < 4; $i++) { 
            ?>
            <tr>
                <?php
                    for($j = 0; $j < 4; $j++) { 
                ?>
                    <td>
                        <?= $randomNum = rand(10, 100); ?>
                        <input type="hidden" name="numbers[]" value="<?= $randomNum ?>">
                    </td>
                <?php
                }
            ?>
            </tr>
            <?php
                }
            ?>
        </table>
        <input type="text" name="inputNumber">
        <button type="submit">SUBMIT</button>
    </form>
    
</body>
</html>