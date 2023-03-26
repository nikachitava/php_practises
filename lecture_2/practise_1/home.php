<?php
    include "question.php";
    shuffle($questions);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>QUIZ</h2>
        <hr>
       <form action="answer.php" method="post">
            <table class="tb-questions">
            <thead>
                <tr>
                    <th>კითხვა</th>
                    <th>პასუხი</th>
                    <th>ქულა</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i=0; $i<count($questions); $i++){
                ?>
                <tr>
                    <td><?=$questions[$i]['question']?>
                        <input type="hidden" name="questions[]" value="<?=$questions[$i]['question']?>">
                    </td>
                    <td><textarea name="answers[]" cols="30" rows="5"></textarea> </td>
                    <td><?=$questions[$i]['point']?>
                        <input type="hidden" name="points[]" value="<?=$questions[$i]['point']?>">
                    </td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td colspan="2">
                        სახელი: <input type="text" name="name">
                        გვარი:  <input type="text" name="lastname">
                    </td>
                    <td><button name="send">გაგზავნა</button></td>
                </tr>
            </tbody> 
            </table>
       </form>
    </div>
</body>
</html>
