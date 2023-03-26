<?php 
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $web = $_POST['web'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'];

    echo "<p>Name: ". $name . "</p>";
    echo "<p>Mail: ". $mail . "</p>";
    echo "<p>Website: ". $web . "</p>";
    echo "<p>Comment: ". $comment . "</p>";
    foreach($gender as $myGender) {
        echo "<p>Gender: ". $myGender . "</p>";
    }
?>