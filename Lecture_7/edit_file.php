<h3>EDIT <?=$_GET['patch']?></h3>
<?php
    $file = fopen($_GET['patch'], "r");
    if(filesize($_GET['patch'])==0){
        $f_content = "";
    }else{
        $f_content = fread($file, filesize($_GET['patch']));
    }
    fclose($file);
?>
<form method="post">
    <textarea name="f_edit_content" cols="70" rows="15"><?=$f_content?></textarea>
    <br><br>
    <button>Edit</button>
</form>