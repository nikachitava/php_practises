<?php 

if(isset($_GET['drop'])) {
    unlink($_GET['drop']);
    header("location:index.php");
}
if(isset($_POST['f_upload'])) {
    $u_file = $_FILES['f_name'];
    move_uploaded_file($u_file['tmp_name'], "root/".$u_file['name']);
}
?>