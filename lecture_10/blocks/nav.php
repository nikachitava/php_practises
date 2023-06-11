<?php
    $topics_query = "SELECT id, title FROM topics";
    $topics_result = mysqli_query($conn, $topics_query);
    // print_r($topics_result);
    // $topics = mysqli_fetch_all($topics_result);
    // $topics = mysqli_fetch_assoc($topics_result);
    // $topics = mysqli_fetch_assoc($topics_result);
    // echo "<pre>";
    // print_r($topics);
    // echo "</pre>";
?>

<nav>
    <ul>
        <?php
            while($topics = mysqli_fetch_assoc($topics_result)){
        ?>
        <li><a href="?topic=<?=$topics['id']?>"><?=$topics['title']?></a></li>
        <?php
            }
        ?>
    </ul>
</nav>