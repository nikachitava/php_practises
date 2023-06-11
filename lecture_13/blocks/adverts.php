<?php
    $posts_query = "SELECT * FROM posts";
    $topics_result = mysqli_query($conn, $posts_query);
?>

<h1>განცხადებები</h1>

<div class="adverts">
<?php
    while($posts = mysqli_fetch_assoc($topics_result)) {
?>
    <div class="card">
        <img src="<?=$posts['cover_img']?>" alt="apartment">
        <div class="content">
            <div>
                <p class="title"><?=$posts['title']?></p>
            </div>
            <div class="wrapper">
                <p>ფასი:</p>
                <p class="price"><?=$posts['price']?>$</p>
            </div>
            <div class="wrapper">
                <p>ფართობი:</p>
                <p class="area"><?=$posts['area']?>კვ.მ</p>
            </div>
            <div class="wrapper">
                <p>ოთახი:</p>
                <p class="rooms"><?=$posts['rooms']?></p>
            </div>
            <div class="wrapper">
                <p>სართული:</p>
                <p class="rooms"><?=$posts['level']?></p>
            </div>
            <hr>
            <div class="wrapper text-box">
                <p class="description"><?=$posts['description']?></p>
            </div>
            <button>MORE</button>
        </div>
    </div>
    <?php } ?>
</div>