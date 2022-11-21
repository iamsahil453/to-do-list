<?php 
require 'db/db.php';
    	if (isset($_POST['submit'])) {
                 $title = $_POST['name'];
                $desc = $_POST['desc'];
                $asign = $_POST['asign'];
                $date = $_POST['startDate'];
                $sql = "INSERT INTO task (title,desci,asign_to,created_at,status) VALUES ('$title','$desc','$asign','$date',0)";
                mysqli_query($db, $sql);
                header('location: index.php');
         
        }
?>