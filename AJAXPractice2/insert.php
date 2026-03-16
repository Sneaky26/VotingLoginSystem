<?php 
    include "connect.php";
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (name,email)
            VALUES('$name','$email')";
    if ($conn -> query($sql)){
        echo"insert successfully";
    } else {
        echo"insert failed";
    }
?>