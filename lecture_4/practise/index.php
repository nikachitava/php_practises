<?php
    $base_dir = "root";

    $dir_urls = "<a href=?dir=".$base_dir.">".$base_dir."</a>";

    if(isset($_GET['dir']) && $_GET['dir']!="root"){
        $base_dir .= "/".$_GET['dir'];
        $dir_urls .= "/<a href=?dir=".$_GET['dir'].">".$_GET['dir']."</a>"; 
    }

    if(isset($_POST['f_create']) && !empty($_POST['f_name'])){
        $f_name = $_POST['f_name']; 
        $folder_path = $base_dir."/".$f_name;  
        if(!is_dir($folder_path)){     
            mkdir($folder_path);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 4</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="create">
            <form method="post">
                <h3>Create Folder</h3>
                <input type="text" name="f_name">
                <br><br>
                <button name="f_create">Create Folder</button>
            </form>
        </div>
        <div class="content">
            <h3><?=$dir_urls?></h3>
            <ul>
                <?php
                    for($i=2; $i<count(scandir($base_dir)); $i++){
                ?>
                <li><a href="?dir=<?=scandir($base_dir)[$i]?>"><?=scandir($base_dir)[$i]?></a></li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>