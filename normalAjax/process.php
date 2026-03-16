<?php
header('Content-Type: application/json');  

$username = $_POST['username'];
$age = $_POST['age'];

$hey = new stdClass();
$hey->username = $username;
$hey->age = $age;

echo json_encode($hey);
?>