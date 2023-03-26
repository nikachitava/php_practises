<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answers</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
        <h2><?=$_POST['name']." ".$_POST['lastname']?></h2>
        <hr>
        <form action="result.php" method="post">
            <table class="tb-questions">
            <thead>
                <input type="hidden" name='fullname' value='<?=$_POST['name']." ".$_POST['lastname']?>'>
                <tr>
                    <th>კითხვა</th>
                    <th>პასუხი</th>
                    <th>შეფასება</th>
                    <th>მაქსიმალური ქულა</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i=0; $i<count($_POST['questions']); $i++){
                ?>
                <tr>
                    <td><?=$_POST['questions'][$i]?>
                        <input type="hidden" name="questions[]" value="<?=$_POST['questions'][$i]?>">
                    </td>
                    <td><?=$_POST['answers'][$i]?>
                        <input type="hidden" name="answers[]" value="<?=$_POST['answers'][$i]?>">
                    </td>
                    <td><input type="text" name="grades[]"></td>
                    <td><?=$_POST['points'][$i]?></td>
                
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td colspan="4"><button>შეფასება</button></td>
                </tr>
            </tbody> 
            </table>
       </form>
    </div>
</body>
</html>
