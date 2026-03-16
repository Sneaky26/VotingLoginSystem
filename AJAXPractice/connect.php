<?php 
    $conn = new mysqli("localhost","root","","ajax");

    if ($conn->connect_error){
        die("error".$conn->connect_error);
    }
?>