<?php 
require 'db/db.php';
    $id =  $_POST['id'];
    $sql = "UPDATE task SET is_deleted=1 WHERE id=$id";
    $susces = mysqli_query($db, $sql);
    return $sql;
?>