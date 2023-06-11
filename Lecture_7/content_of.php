<h3>Content of <?=$_GET['patch']?></h3>
<div class="f-content">
    <!-- <?=readfile($_GET['patch'])?> -->
    <!-- <?php
        $file = fopen($_GET['patch'], "r");
        if(filesize($_GET['patch'])==0){
            $f_content = "";
        }else{
            $f_content = fread($file, filesize($_GET['patch']));
        }
        echo $f_content;
        fclose($file);
    ?> -->
    <?php
         $file = fopen($_GET['patch'], "r");
         $f_content = "";
         while(!feof($file)){
            // echo "<h2>Feof - ".feof($file)."</h2>";
            $f_content .= fgets($file)."<br>";
         }
        //  echo "<h2>Feof - ".feof($file)."</h2>";
         echo $f_content;
         fclose($file);
    ?>
</div>