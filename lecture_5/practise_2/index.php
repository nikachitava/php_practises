<?php
include "upload.php";
?>

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
    <div class="cont">
        <div class="upload">
            <h3>Upload File</h3>
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="f_name">
                <br><br>
                <button name="f_upload">UPLOAD</button>
            </form>
        </div>
        <div class="list">
            <h3>Content of root</h3>
            <table>
                <?php for($i = 2; $i<count(scandir("root/")); $i++) { ?>
                <tr>
                    <td><?=scandir("root")[$i]?></td>
                    <td><a href="?drop=<?="root/".scandir("root")[$i]?>">DELETE</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    
</body>
</html>