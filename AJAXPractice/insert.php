<?php
    include('connect.php');

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO username(name,email) values('$name','$email')";

    if ($conn -> query($sql)){
        echo"SUCCESSFULLY"; 
    } else {
        echo"error";
    }
?>