<?php
    require_once "config/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYHOME</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div>
            <a href="#">MYHOME<span style='color:green'>.GE</span></a>
        </div>
        <ul>
            <li>ყველა</li>
            <li>იყიდება</li>
            <li>ქირავდება</li>
            <li>გირავდება</li>
        </ul>
        <div>
            <a href="#" class="login">შესვლა</a>
        </div>
    </header>

    <main>
        
        <section>
            <?php include "blocks/vip_adverts.php"; ?>
        </section>
        <section>
            <?php include "blocks/adverts.php"; ?>
        </section>
    </main>
    
</body>
</html>