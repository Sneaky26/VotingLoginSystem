 <?php
    $conn = new mysqli("localhost","root","","votingsystem");

    if ($conn -> connect_error){
        die("Error:". $conn->connect_error);
    } 
 
 ?>