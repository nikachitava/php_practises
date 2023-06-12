<header>
    <div class="login_user">
        <?php
            if(isset($_SESSION['user_id'])){
        ?>
            <span><?=$_SESSION['user_full_name']?></span>
            <br>
            <span><a href="?logout=yes">Log Out</a></span>
        <?php
            }
        ?>
    </div>
</header>