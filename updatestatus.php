<?php 
require 'db/db.php';
$status = $_POST['status'];
$id =  $_POST['id'];
if($status == 1){
    $status = 0;
}else{
    $status = 1;
}
$sql = "UPDATE task SET status=$status WHERE id=$id";
$susces = mysqli_query($db, $sql);
return $sql;
?>