<?php
    if(isset($_POST['f_name'])){
        $f_patch = "files/".$_POST['f_name'].".txt";
        fopen($f_patch, "w");
    }

    if(isset($_GET['act']) && $_GET['act']=="del"){
        unlink($_GET['patch']);
    }

    if(isset($_POST['f_content'])){
        $f_patch = $_GET['patch'];
        $file = fopen($f_patch, "a");
        fwrite($file, $_POST['f_content']."\n");
        fclose($file);
    }

    if(isset($_POST['f_edit_content'])){
        $f_patch = $_GET['patch'];
        $file = fopen($f_patch, "w");
        fwrite($file, $_POST['f_edit_content']);
        fclose($file);
    }
?>