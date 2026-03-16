<?php
include "connect.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE username SET name ='$name', email='$email' WHERE id ='$id'";

if ($conn-> query($sql)){
    echo"update success";
} else {
    echo"failed update";
}
?>