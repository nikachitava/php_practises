<?php require_once "config/connection_db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header></header>
    <main>
        <?php 
            include "blocks/nav.php";
            include "blocks/content.php";
        ?>
        
    </main>
    <footer>2023 Year</footer>
    
</body>
</html>