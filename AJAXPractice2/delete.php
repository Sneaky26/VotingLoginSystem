<?php 
    include "connect.php";
    $id = $_POST['id'];
    $sql = "DELETE FROM user WHERE id='$id'";

     if ($conn -> query($sql)){
        echo"insert successfully";
    } else {
        echo"insert failed";
    }
?>