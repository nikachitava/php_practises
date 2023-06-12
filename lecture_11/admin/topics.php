<?php
    session_start();
    require_once "../config/connection_db.php";
    require_once "blocks/user_access.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topics</title>
    <?php
        include_once "blocks/front_libraries.php";  
    ?>
</head>
<body>
    <?php
        include "blocks/header.php";
    ?>
    <main>
        <?php
            if(!isset($_SESSION['user_id'])){
                include "blocks/login.php";
            }else{
                include "blocks/nav.php";
                include "blocks/content_of_topic.php";
            }
        ?>
    </main>
    <footer>2023 Year</footer>
</body>
</html>