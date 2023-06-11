<?php
    if(isset($_GET['topic'])){
        $topic_id = $_GET['topic'];
        $posts_query =  "SELECT * FROM posts WHERE topic_id= $topic_id";
        // $posts = mysqli_fetch_assoc($posts_result);
        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";
    }else{
        $posts_query =  "SELECT * FROM posts ORDER BY ID DESC LIMIT 3";
    }

    
    $posts_result = mysqli_query($conn, $posts_query);
?>


<div class="content">
    <h3>POSTS</h3>
    <?php
        while($posts = mysqli_fetch_assoc($posts_result)){
    ?>
    <article>
        <div class="img">
            <img src="storage/posts/empty.png" alt="">
        </div>
        <div class="post">
            <h3><?=$posts['title']?></h3>
            <div class="author">
                <?=$posts['user_id']?>
            </div>
            <div class="post-info">
                Date: <?=$posts['created_at']?>, View: <?=$posts['view']?>
            </div>
            <div class="description">
                <?=substr($posts['text'], 0, 250)."..."?>
            </div>
            <div class="read-more">
                <a href="">Read More</a>
            </div>
        </div>
    </article>
    <?php
        }
    ?>
</div>
