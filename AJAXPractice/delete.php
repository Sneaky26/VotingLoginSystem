<?php 
    include "connect.php";

    $id = $_POST['id'];
    $sql = "delete from username where id='$id'";

    if ($conn->query($sql)){
        echo"successdelete";
    }else {
        echo"delete error";
    }
?>