<?php
    include "file_worker.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture_7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="content">
            <?php
                if(isset($_GET['act']) && $_GET['act']=="ins"){
                    include "insert_into.php";
                }elseif(isset($_GET['act']) && $_GET['act']=="cont"){
                    include "content_of.php";
                }elseif(isset($_GET['act']) && $_GET['act']=="edit"){
                    include "edit_file.php";
                }
            ?>
        </div>
        <aside>
            <h3><a href="index.php">HOME</a></h3>
            <h3>Create .txt File</h3>
            <form method="post" action="index.php">
                <input type="text" name="f_name">
                <br><br>
                <button>Create File</button>
            </form>
            <h3>List of files</h3>
            <table class="f_list">
                <?php
                    for($i=2; $i<count(scandir("files")); $i++){
                ?>
                <tr>
                    <td><a href="?act=cont&&patch=<?="files/".scandir("files")[$i]?>"><?=scandir("files")[$i]?></a></td>
                    <td><a href="?act=ins&&patch=<?="files/".scandir("files")[$i]?>">INSERT</a></td>
                    <td><a href="?act=edit&&patch=<?="files/".scandir("files")[$i]?>">EDIT</a></td>
                    <td><a href="?act=del&&patch=<?="files/".scandir("files")[$i]?>">DELETE</a></td>
                </tr>
                <?php } ?>
            </table>
        </aside>
    </main>
</body>
</html>